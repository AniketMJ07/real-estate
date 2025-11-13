import React, { useState, useEffect, useRef } from "react";
import axios from "axios";
import CancelModal from "./cancel";

const PayPage = ({
    qrcodeTransaction,
    qr,
    payment_id,
    uid,
    paylinks,
    merchantType,
    paylinks_enabled,
    autr,
}) => {
    const [timeLeft, setTimeLeft] = useState(300); // 5 minutes in seconds
    const [status, setStatus] = useState(""); // pending, success, failed
    const [reason, setReason] = useState("");
    const [showCancelModal, setShowCancelModal] = useState(false);
    const timerRef = useRef(null);
    const pollRef = useRef(null);

    const isIos = () => {
        return !!(window.webkit && window.webkit.messageHandlers);
    };

    const isPc = () => {
        return window.innerWidth > 768;
    };

    const blockDeveloperTools = () => {
        const devTools = /./;
        devTools.toString = function () {
            window.location.href = "/error?code=devtools";
        };
        console.log(devTools);
    };

    const socket = window.Echo.private(
        "qr-transaction" +
            `.${qrcodeTransaction.business_id}.${qrcodeTransaction.id}.${uid}`
    ).listen(".payment.status", (e) => {
        if (e.status === "success") {
            handleSuccess(e.transaction);
        } else if (e.status === "cancelled") {
            handleFailure(e.transaction);
        } else if (e.status === "failed") {
            handleTimeout();
        }
    });

    const redirectUrl = qrcodeTransaction.redirect_url;

    useEffect(() => {
        pollRef.current = setInterval(checkStatus, CONFIG.pollInterval);

        return () => {
            clearInterval(pollRef.current);
        };
    }, []);

    useEffect(() => {
        if (
            qrcodeTransaction.status === "created" ||
            qrcodeTransaction.status === "scanning"
        ) {
            setStatus(qrcodeTransaction.status);
        } else if (qrcodeTransaction.status === "success") {
            handleSuccess(qrcodeTransaction);
        } else if (qrcodeTransaction.status === "cancelled") {
            handleFailure(qrcodeTransaction);
        } else if (qrcodeTransaction.status === "failed") {
            handleTimeout();
        }
    }, [qrcodeTransaction]);

    const CONFIG = {
        statusCheckUrl: `/api/gateway/check_txn?id=${payment_id}&uid=${uid}`,
        upiCollectCheckUrl: `/api/gateway/upi-collect`,
        pollInterval: 3000,
    };

    const formatTime = (seconds) => {
        const m = Math.floor(seconds / 60)
            .toString()
            .padStart(2, "0");
        const s = (seconds % 60).toString().padStart(2, "0");
        return `${m}:${s}`;
    };

    useEffect(() => {
        // Calculate expiry time based on created_at (assume UTC ISO string)
        if (qrcodeTransaction.redirect_url !== null) {
            const updatedAt = new Date(qrcodeTransaction.updated_at).getTime();
            const expiryTime = updatedAt + 5 * 60 * 1000; // 5 minutes in ms

            const updateTimer = () => {
                const now = Date.now();
                const secondsLeft = Math.max(
                    0,
                    Math.floor((expiryTime - now) / 1000)
                );
                setTimeLeft(secondsLeft);

                if (
                    secondsLeft <= 0 &&
                    qrcodeTransaction.status === "scanning"
                ) {
                    clearInterval(timerRef.current);
                    clearInterval(pollRef.current);
                    handleTimeout();
                }
            };

            updateTimer(); // set initial value

            timerRef.current = setInterval(updateTimer, 1000);

            return () => {
                clearInterval(timerRef.current);
            };
        }

        return () => {
            clearInterval(pollRef.current);
            socket.stopListening(".payment.status");
            if (timerRef.current) {
                clearInterval(timerRef.current);
            }
        };
    }, [qrcodeTransaction]);

    const checkStatus = async () => {
        try {
            const res = await axios.get(CONFIG.statusCheckUrl);
            if (
                res.data.status === "confirmed" ||
                res.data.status === "success"
            ) {
                if (res.data.txn_status === "success") {
                    handleSuccess(res.data);
                } else if (res.data.txn_status === "cancelled") {
                    handleFailure(res.data);
                } else if (res.data.txn_status === "failed") {
                    handleTimeout();
                }
            }
        } catch (err) {
            console.error("Status check error", err);
        }
    };

    const handleBpPaymentCheck = async () => {
        const utr = document.getElementById("utr_input").value;
        if (!utr) {
            window.toastr.error("Please enter UTR Number");
            return;
        }
        try {
            const res = await axios.post("/api/gateway/check_txn_utr", {
                utr: utr,
                _token: window.csrfToken,
                uid: uid,
                id: btoa(qrcodeTransaction.id),
            });
            if (
                res.data.status === "confirmed" ||
                res.data.status === "success"
            ) {
                if (res.data.txn_status === "success") {
                    handleSuccess(res.data);
                } else if (res.data.txn_status === "cancelled") {
                    handleFailure(res.data);
                } else if (res.data.txn_status === "failed") {
                    handleTimeout();
                }
            } else if (res.data.status === "error") {
                window.toastr.error(res.data.msg || "Error checking UTR");
            }
        } catch (err) {
            console.error("Status check error", err);
        }
    };

    const handleSuccess = (data) => {
        setStatus("success");
        clearInterval(timerRef.current);
        clearInterval(pollRef.current);
        var redirectTimer = 3;
        const redirectInterval = setInterval(() => {
            const timerElement = document.querySelector(".redirect-timer");
            if (timerElement) {
                timerElement.textContent = redirectTimer;
                redirectTimer--;
            }
        }, 1000);
        setTimeout(() => {
            clearInterval(redirectInterval);
            const redirectElement = document.getElementById("redirectMessage");
            if (redirectElement) {
                redirectElement.textContent = "Redirecting...";
            }
            redirectWithParams(data.txn_status ?? data.status);
        }, 4000);
    };

    const handleFailure = (data) => {
        setStatus(data.txn_status ?? data.status);
        setReason(data.txn_status ?? data.status);
        clearInterval(timerRef.current);
        clearInterval(pollRef.current);
        var redirectTimer = 3;
        const redirectInterval = setInterval(() => {
            const timerElement = document.querySelector(".redirect-timer");
            if (timerElement) {
                timerElement.textContent = redirectTimer;
                redirectTimer--;
            }
        }, 1000);
        setTimeout(() => {
            clearInterval(redirectInterval);
            const redirectElement = document.getElementById("redirectMessage");
            if (redirectElement) {
                redirectElement.textContent = "Redirecting...";
            }
            redirectWithParams(data.txn_status ?? data.status);
        }, 4000);
    };

    const handleTimeout = () => {
        setStatus("failed");
        setReason("expired");
        var redirectTimer = 3;
        const redirectInterval = setInterval(() => {
            const timerElement = document.querySelector(".redirect-timer");
            if (timerElement) {
                timerElement.textContent = redirectTimer;
                redirectTimer--;
            }
        }, 1000);
        setTimeout(() => {
            clearInterval(redirectInterval);
            const redirectElement = document.getElementById("redirectMessage");
            if (redirectElement) {
                redirectElement.textContent = "Redirecting...";
            }
            redirectWithParams("expired");
        }, 4000);
    };

    const redirectWithParams = (txnStatus) => {
        if (redirectUrl) {
            const params = new URLSearchParams({
                merchant_order_id: qrcodeTransaction.merchant_order_id,
                amount: qrcodeTransaction.amount,
                status: txnStatus,
            }).toString();
            window.location.href =
                redirectUrl + (redirectUrl.includes("?") ? "&" : "?") + params;
        }
    };

    const handleCollectPayment = async () => {
        const vpa = document.getElementById("vpa_input").value;
        document.getElementById("vpa_input").setAttribute("readonly", true);
        document
            .getElementById("collectPaymentBtn")
            .setAttribute("disabled", true);
        document.getElementById("collectPaymentBtn").innerHTML =
            "<i class='ti ti-loader fa fa-spin'></i>";
        try {
            const res = await axios.post(CONFIG.upiCollectCheckUrl, {
                _token: window.csrfToken,
                system_uuid: qrcodeTransaction.system_uuid,
                vpa,
            });
            if (
                res.data.status === "success" ||
                res.data.status === "confirmed"
            ) {
                window.toastr.success(
                    "Payment request sent successfully. Please approve the payment in your UPI app."
                );
                document.getElementById("vpa_message").textContent =
                    "Payment request sent successfully. Please approve the payment in your UPI app.";
                document
                    .getElementById("vpa_message")
                    .classList.add("text-success");
                document
                    .getElementById("vpa_message")
                    .classList.remove("text-danger");
            } else if (res.data.status === "error") {
                window.toastr.error(
                    res.data.key === "vpa_invalid"
                        ? "Invalid UPI ID"
                        : "Error processing request."
                );
                document
                    .getElementById("vpa_input")
                    .removeAttribute("readonly");
                document.getElementById("collectPaymentBtn").innerHTML = "Pay";
                document
                    .getElementById("collectPaymentBtn")
                    .removeAttribute("disabled");
                document.getElementById("vpa_message").textContent =
                    res.data.key === "vpa_invalid"
                        ? "Invalid UPI ID"
                        : "Error processing request.";
                document
                    .getElementById("vpa_message")
                    .classList.add("text-danger");
                document
                    .getElementById("vpa_message")
                    .classList.remove("text-success");
            }
        } catch (err) {
            window.toastr.error(
                "Error processing payment with UPI ID Request. Please try again later."
            );
            document.getElementById("vpa_input").removeAttribute("readonly");
            document.getElementById("collectPaymentBtn").innerHTML = "Pay";
            document
                .getElementById("collectPaymentBtn")
                .removeAttribute("disabled");
            document.getElementById("vpa_message").textContent =
                "Error processing payment with UPI ID Request. Please try again later.";
            document.getElementById("vpa_message").classList.add("text-danger");
            document
                .getElementById("vpa_message")
                .classList.remove("text-success");
        }
    };

    const shareUpiQr = async () => {
        const imgElement = document.getElementById("upiQr");
        const response = await fetch(imgElement.src);
        const blob = await response.blob();
        const file = new File([blob], "UPI_QR.png", { type: blob.type });

        if (navigator.canShare && navigator.canShare({ files: [file] })) {
            await navigator.share({
                title: "Pay via Google Pay",
                text: "Scan this QR code to pay via Google Pay.",
                files: [file],
            });
        } else {
            alert(
                "Sharing not supported. Long press on the QR code to save it."
            );
        }
    };

    return (
        <div className="auth-main h-100">
            <div className="auth-wrapper v1 h-100">
                <div
                    className="auth-form h-100"
                    // style={{
                    //     backgroundImage: "none",
                    //     background:
                    //         "linear-gradient(60deg, var(--bs-info), var(--bs-success), var(--bs-info))",
                    // }}
                >
                    <div
                        className="card shadow"
                        style={{ maxWidth: 800, margin: "auto" }}
                    >
                        <div className="card-body">
                            {(status === "created" ||
                                status === "scanning") && (
                                <div id="paymentContent">
                                    <div className="d-flex flex-column flex-md-row justify-content-between">
                                        <div className="col-md-5">
                                            <div className="merchant-details">
                                                <div className="mb-4 text-center">
                                                    {qrcodeTransaction.business
                                                        .logo !== null ? (
                                                        <div className="merchant-logo mb-3">
                                                            <img
                                                                src={
                                                                    qrcodeTransaction
                                                                        .business
                                                                        .logo
                                                                }
                                                                alt="logo"
                                                                width="75"
                                                                className="img-fluid rounded border-1"
                                                            />
                                                        </div>
                                                    ) : (
                                                        <div
                                                            className="rounded avtar mb-3 placeholder-glow"
                                                            style={{
                                                                background:
                                                                    "linear-gradient(60deg, var(--bs-info), var(--bs-success), var(--bs-primary), var(--bs-info))",
                                                                color: "white",
                                                                animation:
                                                                    "move-bg 10s infinite linear",
                                                            }}
                                                        >
                                                            <i className="ti ti-building-store f-32"></i>
                                                        </div>
                                                    )}
                                                    <div className="merchant-info d-flex flex-column">
                                                        <h5 id="merchantName">
                                                            {
                                                                qrcodeTransaction
                                                                    .business
                                                                    .name
                                                            }
                                                        </h5>
                                                        <span
                                                            id="merchantName"
                                                            className="text-muted"
                                                        >
                                                            {
                                                                qrcodeTransaction
                                                                    .merchant_info
                                                                    .name
                                                            }
                                                        </span>
                                                    </div>
                                                </div>
                                                <hr className="d-none d-md-block" />
                                                <div className="d-none d-md-block">
                                                    <div className="alert bg-green-100 rounded-4 mt-5 d-flex align-items-center justify-content-between mb-3">
                                                        <span className="label f-w-600 f-24">
                                                            Amount
                                                        </span>
                                                        <span
                                                            id="amount"
                                                            className="text-success f-w-700 f-28"
                                                        >
                                                            ₹{" "}
                                                            {
                                                                qrcodeTransaction.amount
                                                            }
                                                        </span>
                                                    </div>
                                                </div>
                                                <div className="text-center">
                                                    <span className="text-muted mt-2">
                                                        #
                                                        {
                                                            qrcodeTransaction.merchant_order_id
                                                        }
                                                    </span>
                                                </div>
                                            </div>

                                            {autr && (
                                                <>
                                                    <div className="saprator my-3 d-none d-md-flex align-items-center justify-content-center"></div>
                                                    <p className="mt-3">
                                                        Enter UTR Number after
                                                        payment to confirm
                                                        transaction
                                                    </p>
                                                    <div className="input-group">
                                                        <input
                                                            className="form-control"
                                                            id="utr_input"
                                                            placeholder="Enter UTR Number"
                                                            autoComplete="off"
                                                        />
                                                        <button
                                                            className="btn btn-secondary"
                                                            onClick={
                                                                handleBpPaymentCheck
                                                            }
                                                        >
                                                            Confirm
                                                        </button>
                                                    </div>
                                                </>
                                            )}
                                        </div>
                                        <div className="col-md-5 text-center mt-3">
                                            <div className="d-sm-none">
                                                <hr
                                                    className="text-muted"
                                                    style={{
                                                        borderColor: "grey",
                                                    }}
                                                />
                                                <div className="alert bg-green-100 rounded-4 mt-5 d-flex align-items-center justify-content-between mb-3">
                                                    <span className="label f-w-600 f-24">
                                                        Amount
                                                    </span>
                                                    <span
                                                        id="amount"
                                                        className="text-success f-w-700 f-28"
                                                    >
                                                        ₹{" "}
                                                        {
                                                            qrcodeTransaction.amount
                                                        }
                                                    </span>
                                                </div>
                                            </div>
                                            <p className="f-w-500 text-muted">
                                                Scan the QR to pay
                                            </p>
                                            <img
                                                id="upiQr"
                                                src={qr}
                                                width="200"
                                                height="200"
                                            />
                                            {redirectUrl && (
                                                <p className="mt-2">
                                                    Expires in{" "}
                                                    <span className="text-danger f-w-600">
                                                        {formatTime(timeLeft)}
                                                    </span>
                                                </p>
                                            )}
                                            {paylinks_enabled && !isPc() && (
                                                <>
                                                    <div className="saprator my-3 d-flex align-items-center justify-content-center">
                                                        <span className="mx-2">
                                                            OR
                                                        </span>
                                                    </div>
                                                    <div className="row mt-3 justify-content-center">
                                                        {/* Device-specific paylinks */}
                                                        {Object.entries(
                                                            paylinks[
                                                                isIos()
                                                                    ? "ios"
                                                                    : "android"
                                                            ]
                                                        ).map(([key, data]) =>
                                                            key !==
                                                            "googlepay" ? (
                                                                <a
                                                                    key={key}
                                                                    href={
                                                                        data.link
                                                                    }
                                                                    className="col-2"
                                                                >
                                                                    <img
                                                                        src={
                                                                            data.icon
                                                                        }
                                                                        alt={
                                                                            key
                                                                        }
                                                                        width="40"
                                                                        className="img-fluid rounded"
                                                                    />
                                                                </a>
                                                            ) : (
                                                                navigator?.userAgent !==
                                                                    "FoodomaaAndroidWebViewUA" && (
                                                                    <div
                                                                        key={
                                                                            key
                                                                        }
                                                                        onClick={() =>
                                                                            shareUpiQr()
                                                                        }
                                                                        className="col-2"
                                                                    >
                                                                        <img
                                                                            src={
                                                                                data.icon
                                                                            }
                                                                            alt={
                                                                                key
                                                                            }
                                                                            width="40"
                                                                            className="img-fluid rounded"
                                                                        />
                                                                    </div>
                                                                )
                                                            )
                                                        )}
                                                    </div>
                                                </>
                                            )}
                                            {merchantType == "hdfc" && (
                                                <>
                                                    <div className="saprator my-3 d-flex align-items-center justify-content-center">
                                                        <span className="mx-2">
                                                            OR
                                                        </span>
                                                    </div>
                                                    <p className="mt-3">
                                                        Enter UPI ID to pay
                                                    </p>
                                                    <div className="input-group">
                                                        <input
                                                            className="form-control"
                                                            id="vpa_input"
                                                            placeholder="sanjeev@axisbank"
                                                        />
                                                        <button
                                                            className="btn btn-secondary"
                                                            onClick={
                                                                handleCollectPayment
                                                            }
                                                            id="collectPaymentBtn"
                                                        >
                                                            Pay
                                                        </button>
                                                    </div>
                                                    <span
                                                        className=""
                                                        id="vpa_message"
                                                    ></span>
                                                </>
                                            )}
                                            {qrcodeTransaction.redirect_url !==
                                                null && (
                                                <div className="mt-4">
                                                    <hr />
                                                    <button
                                                        className="btn btn-outline-danger w-50 text-center"
                                                        onClick={() =>
                                                            setShowCancelModal(
                                                                true
                                                            )
                                                        }
                                                    >
                                                        Cancel
                                                    </button>
                                                </div>
                                            )}
                                        </div>
                                    </div>
                                </div>
                            )}
                            <div>
                                {status === "success" && (
                                    <div
                                        id="successAnimation"
                                        className="text-center"
                                    >
                                        <img
                                            src="/assets/images/pay_success.gif"
                                            alt="Success"
                                            className="img-fluid"
                                        />
                                        <h4 className="text-success">
                                            Transaction Successful!
                                        </h4>
                                    </div>
                                )}

                                {status === "failed" && (
                                    <div
                                        id="failedAnimation"
                                        className="text-center"
                                    >
                                        <img
                                            src="/assets/images/pay_failed.gif"
                                            alt="Failed"
                                            className="img-fluid"
                                        />
                                        <h4 className="text-danger">
                                            Transaction Failed!
                                        </h4>
                                        <p>Reason: {reason}</p>
                                    </div>
                                )}
                                {status === "cancelled" && (
                                    <div
                                        id="failedAnimation"
                                        className="text-center"
                                    >
                                        <img
                                            src="/assets/images/pay_failed.gif"
                                            alt="Failed"
                                            className="img-fluid"
                                        />
                                        <h4 className="text-danger">
                                            Transaction Failed!
                                        </h4>
                                        <p>
                                            Reason: Transaction Cancelled by
                                            Payer
                                        </p>
                                    </div>
                                )}
                                {qrcodeTransaction.redirect_url !== null &&
                                    status !== "created" &&
                                    status !== "scanning" && (
                                        <h6
                                            className="mt-2 text-muted text-center"
                                            id="redirectMessage"
                                        >
                                            Redirecting in{" "}
                                            <span className="redirect-timer">
                                                4
                                            </span>{" "}
                                            seconds...
                                        </h6>
                                    )}
                            </div>
                        </div>
                    </div>
                    <div className="row w-100 w-md-25 mt-5">
                        <div className="col">
                            <div className="branding text-center">
                                <div className="text-muted mb-2 f-12 f-w-500 text-small">
                                    Payment QR by
                                </div>
                                <div className="branding-logo">
                                    <img
                                        src="/assets/images/logo/logo_light_mode.png"
                                        alt="logo"
                                        className="logo-light-mode"
                                        width="75"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {qrcodeTransaction.redirect_url !== null && (
                <CancelModal
                    show={showCancelModal}
                    onClose={() => setShowCancelModal(false)}
                    onConfirm={async () => {
                        await axios.post("/api/gateway/pay/cancel", {
                            _token: window.csrfToken,
                            id: btoa(qrcodeTransaction.id),
                            uid: uid,
                        });
                        setShowCancelModal(false);
                        handleFailure({ txn_status: "cancelled" });
                    }}
                />
            )}
        </div>
    );
};

export default PayPage;
