import React from "react";
import ReactDOM from "react-dom/client";
import PayPage from "./PayPage";
import CryptoJS from "crypto-js";

const pay_page = document.getElementById("pay_page");
if (pay_page) {
    const el = document.getElementById("pay_page");
    if (el) {
        const KEY = "testadfbSafeuopi"; // 16‑byte key  (⟵ matches PHP)
        const IV = KEY.slice(0, 16);
        const decrypt = (cipherText) => {
            if (!cipherText) return null; // guard for empty strings

            const bytes = CryptoJS.AES.decrypt(
                cipherText,
                CryptoJS.enc.Utf8.parse(KEY),
                {
                    iv: CryptoJS.enc.Utf8.parse(IV),
                    mode: CryptoJS.mode.CBC,
                    padding: CryptoJS.pad.Pkcs7,
                }
            );
            const plain = bytes.toString(CryptoJS.enc.Utf8);
            return plain ? JSON.parse(plain) : null;
        };
        el.dataset.paymentId;
        const qrcodeTransaction = decrypt(el.dataset.transaction);
        const paylinks = decrypt(el.dataset.paylinks);

        const props = {
            qrcodeTransaction: qrcodeTransaction,
            qr: el.dataset.qr,
            payment_id: el.dataset.paymentId,
            uid: el.dataset.uid,
            merchantType: el.dataset.merchantType,
            paylinks: paylinks,
            paylinks_enabled: el.dataset.paylinksEnabled === "true",
            autr: el.dataset.autr,
        };
        ReactDOM.createRoot(el).render(<PayPage {...props} />);
    }
}
