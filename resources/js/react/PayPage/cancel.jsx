import React from "react";

const CancelModal = ({ show, onClose, onConfirm }) => {
    if (!show) return null;

    return (
        <div
            className="modal-backdrop w-100"
            style={{ backgroundColor: "rgba(0, 0, 0, 0.8)" }}
        >
            <div className="modal d-block" tabIndex="-1">
                <div className="modal-dialog modal-dialog-centered">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5>Cancel Payment</h5>
                            <button
                                className="btn-close"
                                onClick={onClose}
                            ></button>
                        </div>
                        <div className="modal-body">
                            <p>
                                Are you sure you want to cancel the payment?
                                This action cannot be undone.
                            </p>
                        </div>
                        <div className="modal-footer">
                            <button
                                className="btn btn-secondary"
                                onClick={onClose}
                            >
                                Close
                            </button>
                            <button
                                className="btn btn-danger"
                                onClick={onConfirm}
                            >
                                Cancel Payment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default CancelModal;
