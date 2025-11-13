$(function () {
    "use strict";

    jQuery(".js-validation-aadhar-send-otp").validate({
        rules: {
            aadhaar_no: {
                required: true,
                minlength: 12,
                maxlength: 12,
                number: true,
            },
        },
        messages: {
            aadhaar_no: {
                required: "Please enter aadhar number",
                minlength: "Please enter valid aadhar number",
                maxlength: "Please enter valid aadhar number",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else if (
                element.prop("type") === "password" ||
                element.prop("type") === "password"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        // highlight: function (element, errorClass) {
        // 	if ($(element).prop("type") != "checkbox" && $(element).prop("type") != "radio") {
        // 		$(element).addClass("is-invalid").removeClass("is-valid");
        // 	}
        // },
        // unhighlight: function (element, errorClass) {
        // 	if ($(element).prop("type") != "checkbox" && $(element).prop("type") != "radio") {
        // 		$(element).addClass("is-valid").removeClass("is-invalid");
        // 	}
        // },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            jQuery(".js-validation-aadhar-send-otp")
                .find('button[type="submit"]')
                .prop("disabled", true);
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    console.log("response", response);
                    // Return valid JSON
                    // Release button
                    jQuery(".js-validation-aadhar-send-otp")
                        .find('button[type="submit"]')
                        .prop("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        Swal.fire({
                            text: response.msg,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        }).then(function () {
                            $(".js-validation-aadhar-send-otp").addClass(
                                "d-none"
                            );
                            $(".js-validation-aadhar-verify-otp").removeClass(
                                "d-none"
                            );
                        });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
        },
    });
    jQuery(".js-validation-aadhar-verify-otp").validate({
        rules: {
            otp: { required: !0, rangelength: [6, 6], digits: true },
        },
        messages: {
            otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 6 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else if (
                element.prop("type") === "password" ||
                element.prop("type") === "password"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            var data = FormToJSON(form);
            $(".js-validation-signup-send-otp").toggleClass("state_toggle");
            jQuery(".js-validation-aadhar-verify-otp")
                .find('button[type="submit"]')
                .prop("disabled", true);
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-verify-otp").toggleClass("state_toggle");
                    jQuery(".js-validation-aadhar-verify-otp")
                        .find('button[type="submit"]')
                        .prop("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        $("#aadhar_modal").modal("hide");
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        Swal.fire({
                            text: response.msg,
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });
    jQuery("form.js-validation-yono-sbi").validate({
        rules: {
            tid: { required: !0, rangelength: [8, 8] },
            password: { required: !0, rangelength: [3, 20] },
        },
        messages: {
            tid: {
                required: "Please enter a valid tid",
                rangelength: "Your tid must consist of 8 digits",
            },
            password: {
                required: "Please enter a password",
                rangelength: "Your password must consist of 3 to 20 characters",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            $("#yono_sbi_info_modal").modal("show");
            return false;
        },
    });

    $("#confirm_yono_sbi_info_btn").click(function () {
        if (
            !$("#accept_yono_sbi_tc_btn").prop("checked") ||
            !$("#accept_account_btn_yono_sbi").prop("checked")
        ) {
            if (!$("#accept_yono_sbi_tc_btn").prop("checked")) {
                $("#accept_yono_sbi_tc_btn").focus();
                $("#accept_yono_sbi_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn_yono_sbi").prop("checked")) {
                $("#accept_account_btn_yono_sbi").focus();
                $("#accept_account_btn_yono_sbi").addClass("is-invalid");
            }
            return false;
        }
        $("#yono_sbi_info_modal").modal("hide");
        var form = $("form.js-validation-yono-sbi")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);

        $("#js-validation-yono-sbi").toggleClass("state_toggle");
        jQuery(".js-validation-yono-sbi")
            .find('button[type="submit"]')
            .prop("disabled", true);

        Swal.fire({
            title: "Please Wait !",
            html: "We are processing your request, please wait...",
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading();
            },
        });

        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-yono-sbi").toggleClass("state_toggle");
                jQuery(".js-validation-yono-sbi")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                Swal.close();
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    $("#alert_modal").modal("show");
                    $("#confirm_alert_btn").click(function () {
                        $("#alert_modal").modal("hide");
                        if (response.redirect)
                            window.location.href = response.redirect;
                        if (response.reload) window.location.reload();
                    });
                    // Swal.fire({
                    // 	text: response.msg,
                    // 	icon: "success",
                    // 	buttonsStyling: false,
                    // 	confirmButtonText: "Ok, got it!",
                    // 	customClass: {
                    // 		confirmButton: "btn btn-success m-1",
                    // 		cancelButton: "btn btn-danger m-1",
                    // 		input: "form-control",
                    // 	},
                    // }).then(function () {
                    // 	if (response.reload) window.location.reload();
                    // });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-send-otp").validate({
        rules: {
            mobile_no: { required: !0, rangelength: [10, 10], digits: true },
            upi_merchant: { required: !0 },
        },
        messages: {
            mobile_no: {
                required: "Please enter a mobile no.",
                digits: "Your mobile no. must consist of digits only",
                rangelength:
                    "Your mobile no. must consist of at least 10 characters",
            },
            upi_merchant: "Please select a value!",
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            console.log("info_modal");
            $("#info_modal").modal("show");
            // $("#cancel_info_btn").click(function () {
            // 	$("#info_modal").modal("hide");
            // });
            // swal.fire({
            // 	title: "Are you sure?",
            // 	text: "You agree to grant us Read Transaction Permission for your Phonepe Business Account using Phonepe Business App.",
            // 	icon: "warning",
            // 	// type: "warning",
            // 	showCancelButton: true,
            // 	// confirmButtonColor: "#DD6B55",
            // 	confirmButtonText: "Yes, I Agree!",
            // 	cancelButtonText: "No, cancel it!",
            // 	// closeOnConfirm: false,
            // 	// closeOnCancel: false,
            // }).then(function (isConfirm) {
            // 	if (isConfirm.value) {
            // 		var action = jQuery(form).attr("action");
            // 		console.log("action", action);
            // 		var data = FormToJSON(form);
            // 		console.log("data", data);
            // 		$("#js-validation-send-otp").toggleClass("state_toggle");
            // 		jQuery(".js-validation-send-otp").find('button[type="submit"]').prop("disabled", true);
            // 		fetch(action, {
            // 			method: "POST",
            // 			headers: {
            // 				"Content-Type": "application/json",
            // 			},
            // 			body: JSON.stringify(data),
            // 		})
            // 			.then(function (res) {
            // 				return res.json();
            // 			}) // Return valid JSON
            // 			.then(async function (response) {
            // 				// Return valid JSON
            // 				// Release button
            // 				$("#js-validation-send-otp").toggleClass("state_toggle");
            // 				jQuery(".js-validation-send-otp").find('button[type="submit"]').prop("disabled", false);
            // 				if (response && typeof response === "object" && response.status && response.status == "success") {
            // 					if (response.fast_redirect) {
            // 						window.location.href = response.fast_redirect;
            // 						return;
            // 					}
            // 					Swal.fire({
            // 						text: response.msg,
            // 						icon: "success",
            // 						buttonsStyling: false,
            // 						confirmButtonText: "Ok, got it!",
            // 						customClass: {
            // 							confirmButton: "btn btn-success m-1",
            // 							cancelButton: "btn btn-danger m-1",
            // 							input: "form-control",
            // 						},
            // 					}).then(function () {
            // 						if (response.status && response.status == "success") {
            // 							jQuery('input[name="merchant_id"]').val(response.merchant_id);
            // 							jQuery(".js-validation-send-otp").hide();
            // 							jQuery(".js-validation-verify-otp").removeClass("d-none");
            // 						}
            // 					});
            // 				} else {
            // 					Swal.fire({
            // 						text: response.msg || "Sorry, something went wrong, please try again.",
            // 						icon: "error",
            // 						title: "Error 😢",
            // 						buttonsStyling: false,
            // 						confirmButtonText: "Ok, got it!",
            // 						customClass: {
            // 							confirmButton: "btn btn-success m-1",
            // 							cancelButton: "btn btn-danger m-1",
            // 							input: "form-control",
            // 						},
            // 					});
            // 				}
            // 			});
            // 	}
            // });
            return false;
        },
    });

    $("#confirm_info_btn").click(function () {
        if (
            !$("#accept_tc_btn").prop("checked") ||
            !$("#accept_account_btn").prop("checked")
        ) {
            if (!$("#accept_tc_btn").prop("checked")) {
                $("#accept_tc_btn").focus();
                $("#accept_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn").prop("checked")) {
                $("#accept_account_btn").focus();
                $("#accept_account_btn").addClass("is-invalid");
            }
            return false;
        }
        $("#info_modal").modal("hide");
        var form = $("form.js-validation-send-otp")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);
        $("#js-validation-send-otp").toggleClass("state_toggle");
        jQuery(".js-validation-send-otp")
            .find('button[type="submit"]')
            .prop("disabled", true);
        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-send-otp").toggleClass("state_toggle");
                jQuery("form.js-validation-send-otp")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    Swal.fire({
                        text: response.msg,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    }).then(function () {
                        if (response.status && response.status == "success") {
                            jQuery('input[name="merchant_id"]').val(
                                response.merchant_id
                            );
                            jQuery(".js-validation-send-otp").addClass(
                                "d-none"
                            );
                            jQuery(".js-validation-verify-otp").removeClass(
                                "d-none"
                            );
                            jQuery(".js-validation-verify-otp").addClass(
                                "phonepe_business_div"
                            );
                        }
                    });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-verify-otp").validate({
        rules: {
            otp: { required: !0, rangelength: [5, 5], digits: true },
        },
        messages: {
            otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 5 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            $("#js-validation-verify-otp").toggleClass("state_toggle");
            $("#js-validation-verify-otp button[type=submit]").attr(
                "disabled",
                true
            );
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-verify-otp").toggleClass("state_toggle");
                    $("#js-validation-verify-otp button[type=submit]").attr(
                        "disabled",
                        false
                    );
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        console.log("response", response);
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        $("#alert_modal").modal("show");
                        $("#confirm_alert_btn").click(function () {
                            $("#alert_modal").modal("hide");
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                        // Swal.fire({
                        // 	text: response.msg,
                        // 	icon: "success",
                        // 	buttonsStyling: false,
                        // 	confirmButtonText: "Ok, got it!",
                        // 	customClass: {
                        // 		confirmButton: "btn btn-success m-1",
                        // 		cancelButton: "btn btn-danger m-1",
                        // 		input: "form-control",
                        // 	},
                        // }).then(function () {
                        // 	if (response.redirect) window.location.href = response.redirect;
                        // 	if (response.reload) window.location.reload();
                        // });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });

    jQuery("form.js-validation-hdfc-send-otp").validate({
        rules: {
            mobile_no: { required: !0, rangelength: [10, 10], digits: true },
            upi_merchant: { required: !0 },
        },
        messages: {
            mobile_no: {
                required: "Please enter a mobile no.",
                digits: "Your mobile no. must consist of digits only",
                rangelength:
                    "Your mobile no. must consist of at least 10 characters",
            },
            upi_merchant: "Please select a value!",
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            $("#hdfc_info_modal").modal("show");
            return false;
        },
    });

    $("#confirm_hdfc_info_btn").click(function () {
        if (
            !$("#accept_hdfc_tc_btn").prop("checked") ||
            !$("#accept_account_btn_hdfc").prop("checked")
        ) {
            if (!$("#accept_hdfc_tc_btn").prop("checked")) {
                $("#accept_hdfc_tc_btn").focus();
                $("#accept_hdfc_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn_hdfc").prop("checked")) {
                $("#accept_account_btn_hdfc").focus();
                $("#accept_account_btn_hdfc").addClass("is-invalid");
            }
            return false;
        }
        $("#hdfc_info_modal").modal("hide");
        var form = $("form.js-validation-hdfc-send-otp")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);
        $("#js-validation-hdfc-send-otp").toggleClass("state_toggle");
        jQuery(".js-validation-hdfc-send-otp")
            .find('button[type="submit"]')
            .prop("disabled", true);
        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-hdfc-send-otp").toggleClass("state_toggle");
                jQuery(".js-validation-hdfc-send-otp")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    Swal.fire({
                        text: response.msg,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    }).then(function () {
                        if (response.status && response.status == "success") {
                            jQuery('input[name="merchant_id"]').val(
                                response.merchant_id
                            );
                            jQuery(".js-validation-hdfc-send-otp").addClass(
                                "d-none"
                            );
                            jQuery(
                                ".js-validation-hdfc-verify-otp"
                            ).removeClass("d-none");
                            jQuery(".js-validation-hdfc-verify-otp").addClass(
                                "hdfc_div"
                            );
                        }
                    });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-hdfc-verify-otp").validate({
        rules: {
            otp: { required: !0, rangelength: [6, 6], digits: true },
            pin: { required: !0, rangelength: [4, 4], digits: true },
        },
        messages: {
            otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 6 digits",
            },
            pin: {
                required: "Please enter a pin",
                digits: "Your pin must consist of digits only",
                rangelength: "Your pin must consist of 4 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            $("#js-validation-hdfc-verify-otp").toggleClass("state_toggle");
            $("#js-validation-hdfc-verify-otp button[type=submit]").attr(
                "disabled",
                true
            );
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-hdfc-verify-otp").toggleClass(
                        "state_toggle"
                    );
                    $(
                        "#js-validation-hdfc-verify-otp button[type=submit]"
                    ).attr("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        $("#alert_modal").modal("show");
                        $("#confirm_alert_btn").click(function () {
                            $("#alert_modal").modal("hide");
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                        // Swal.fire({
                        // 	text: response.msg,
                        // 	icon: "success",
                        // 	buttonsStyling: false,
                        // 	confirmButtonText: "Ok, got it!",
                        // 	customClass: {
                        // 		confirmButton: "btn btn-success m-1",
                        // 		cancelButton: "btn btn-danger m-1",
                        // 		input: "form-control",
                        // 	},
                        // }).then(function () {
                        // 	if (response.redirect) window.location.href = response.redirect;
                        // 	if (response.reload) window.location.reload();
                        // });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });

	//here gpay 
	    jQuery("form.js-validation-gpay-send-otp").validate({
        rules: {
            mobile_no: { required: !0, rangelength: [10, 10], digits: true },
            upi_merchant: { required: !0 },
        },
        messages: {
            mobile_no: {
                required: "Please enter a mobile no.",
                digits: "Your mobile no. must consist of digits only",
                rangelength:
                    "Your mobile no. must consist of at least 10 characters",
            },
            upi_merchant: "Please select a value!",
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            $("#gpay_info_modal").modal("show");
            return false;
        },
    });

    $("#confirm_gpay_info_btn").click(function () {
        if (
            !$("#accept_gpay_tc_btn").prop("checked") ||
            !$("#accept_account_btn_hdfc").prop("checked")
        ) {
            if (!$("#accept_gpay_tc_btn").prop("checked")) {
                $("#accept_gpay_tc_btn").focus();
                $("#accept_gpay_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn_hdfc").prop("checked")) {
                $("#accept_account_btn_hdfc").focus();
                $("#accept_account_btn_hdfc").addClass("is-invalid");
            }
            return false;
        }
        $("#gpay_info_modal").modal("hide");
        var form = $("form.js-validation-gpay-send-otp")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);
        $("#js-validation-gpay-send-otp").toggleClass("state_toggle");
        jQuery(".js-validation-gpay-send-otp")
            .find('button[type="submit"]')
            .prop("disabled", true);
        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-gpay-send-otp").toggleClass("state_toggle");
                jQuery(".js-validation-gpay-send-otp")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    Swal.fire({
                        text: response.msg,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    }).then(function () {
                        if (response.status && response.status == "success") {
                            jQuery('input[name="merchant_id"]').val(
                                response.merchant_id
                            );
                            jQuery('input[name="upi_id"]').val(
                                response.upi_id
                            );
                            jQuery(".js-validation-gpay-send-otp").addClass(
                                "d-none"
                            );
                            jQuery(
                                ".js-validation-gpay-verify-otp"
                            ).removeClass("d-none");
                            jQuery(".js-validation-gpay-verify-otp").addClass(
                                "gpay_div"
                            );
                        }
                    });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-gpay-verify-otp").validate({
        rules: {
            otp: { required: !0, rangelength: [6, 6], digits: true },
            pin: { required: !0, rangelength: [4, 4], digits: true },
        },
        messages: {
            otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 6 digits",
            },
            pin: {
                required: "Please enter a pin",
                digits: "Your pin must consist of digits only",
                rangelength: "Your pin must consist of 4 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            $("#js-validation-gpay-verify-otp").toggleClass("state_toggle");
            $("#js-validation-gpay-verify-otp button[type=submit]").attr(
                "disabled",
                true
            );
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-gpay-verify-otp").toggleClass(
                        "state_toggle"
                    );
                    $(
                        "#js-validation-gpay-verify-otp button[type=submit]"
                    ).attr("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        $("#alert_modal").modal("show");
                        $("#confirm_alert_btn").click(function () {
                            $("#alert_modal").modal("hide");
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                        // Swal.fire({
                        // 	text: response.msg,
                        // 	icon: "success",
                        // 	buttonsStyling: false,
                        // 	confirmButtonText: "Ok, got it!",
                        // 	customClass: {
                        // 		confirmButton: "btn btn-success m-1",
                        // 		cancelButton: "btn btn-danger m-1",
                        // 		input: "form-control",
                        // 	},
                        // }).then(function () {
                        // 	if (response.redirect) window.location.href = response.redirect;
                        // 	if (response.reload) window.location.reload();
                        // });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });

	//gpay end here


    jQuery(".js-select2").on("change", (e) => {
        jQuery(e.currentTarget).valid();
    });

    jQuery("form.js-validation-paytm-send-otp").validate({
        rules: {
            paytm_mobile_no: {
                required: !0,
                rangelength: [10, 10],
                digits: true,
            },
            upi_merchant: { required: !0 },
        },
        messages: {
            paytm_mobile_no: {
                required: "Please enter a mobile no.",
                digits: "Your mobile no. must consist of digits only",
                rangelength:
                    "Your mobile no. must consist of at least 10 characters",
            },
            upi_merchant: "Please select a value!",
        },
        errorPlacement: function (error, element) {
            console.log(error);
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            console.log("paytm_info_modal");
            $("#paytm_info_modal").modal("show");
            return false;
        },
    });

    $("#confirm_paytm_info_btn").click(function () {
        if (
            !$("#accept_paytm_tc_btn").prop("checked") ||
            !$("#accept_account_btn_paytm").prop("checked")
        ) {
            if (!$("#accept_paytm_tc_btn").prop("checked")) {
                $("#accept_paytm_tc_btn").focus();
                $("#accept_paytm_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn_paytm").prop("checked")) {
                $("#accept_account_btn_paytm").focus();
                $("#accept_account_btn_paytm").addClass("is-invalid");
            }
            return false;
        }
        $("#paytm_info_modal").modal("hide");
        var form = $("form.js-validation-paytm-send-otp")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);
        $("#js-validation-paytm-send-otp").toggleClass("state_toggle");
        jQuery(".js-validation-paytm-send-otp")
            .find('button[type="submit"]')
            .prop("disabled", true);
        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-paytm-send-otp").toggleClass("state_toggle");
                jQuery(".js-validation-paytm-send-otp")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    Swal.fire({
                        text: response.msg,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    }).then(function () {
                        if (response.status && response.status == "success") {
                            jQuery('input[name="paytm_merchant_id"]').val(
                                response.merchant_id
                            );
                            jQuery(".js-validation-paytm-send-otp").addClass(
                                "d-none"
                            );
                            jQuery(
                                ".js-validation-paytm-verify-otp"
                            ).removeClass("d-none");
                            jQuery(".js-validation-paytm-verify-otp").addClass(
                                "paytm_div"
                            );
                        }
                    });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-paytm-verify-otp").validate({
        rules: {
            paytm_otp: { required: !0, rangelength: [6, 6], digits: true },
        },
        messages: {
            paytm_otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 6 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            $("#js-validation-paytm-verify-otp").toggleClass("state_toggle");
            $("#js-validation-paytm-verify-otp button[type=submit]").attr(
                "disabled",
                true
            );
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-paytm-verify-otp").toggleClass(
                        "state_toggle"
                    );
                    $(
                        "#js-validation-paytm-verify-otp button[type=submit]"
                    ).attr("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        $("#alert_modal").modal("show");
                        $("#confirm_alert_btn").click(function () {
                            $("#alert_modal").modal("hide");
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                        // Swal.fire({
                        // 	text: response.msg,
                        // 	icon: "success",
                        // 	buttonsStyling: false,
                        // 	confirmButtonText: "Ok, got it!",
                        // 	customClass: {
                        // 		confirmButton: "btn btn-success m-1",
                        // 		cancelButton: "btn btn-danger m-1",
                        // 		input: "form-control",
                        // 	},
                        // }).then(function () {
                        // 	if (response.redirect) window.location.href = response.redirect;
                        // 	if (response.reload) window.location.reload();
                        // });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });

    // cretae a some process for bharatpe its same as paytm but dont have password field
    jQuery("form.js-validation-bharatpe-send-otp").validate({
        rules: {
            mobile_no: { required: !0, rangelength: [10, 10], digits: true },
            upi_merchant: { required: !0 },
        },
        messages: {
            mobile_no: {
                required: "Please enter a mobile no.",
                digits: "Your mobile no. must consist of digits only",
                rangelength:
                    "Your mobile no. must consist of at least 10 characters",
            },
            upi_merchant: "Please select a value!",
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            $("#bharatpe_info_modal").modal("show");
            return false;
        },
    });

    $("#confirm_bharatpe_info_btn").click(function () {
        if (
            !$("#accept_bharatpe_tc_btn").prop("checked") ||
            !$("#accept_account_btn_bharatpe").prop("checked")
        ) {
            if (!$("#accept_bharatpe_tc_btn").prop("checked")) {
                $("#accept_bharatpe_tc_btn").focus();
                $("#accept_bharatpe_tc_btn").addClass("is-invalid");
            }
            if (!$("#accept_account_btn_bharatpe").prop("checked")) {
                $("#accept_account_btn_bharatpe").focus();
                $("#accept_account_btn_bharatpe").addClass("is-invalid");
            }
            return false;
        }
        $("#bharatpe_info_modal").modal("hide");
        var form = $("form.js-validation-bharatpe-send-otp")[0];
        var action = jQuery(form).attr("action");
        var data = FormToJSON(form);
        $("#js-validation-bharatpe-send-otp").toggleClass("state_toggle");
        jQuery(".js-validation-bharatpe-send-otp")
            .find('button[type="submit"]')
            .prop("disabled", true);
        fetch(action, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then(function (res) {
                return res.json();
            }) // Return valid JSON
            .then(async function (response) {
                // Return valid JSON
                // Release button
                $("#js-validation-bharatpe-send-otp").toggleClass(
                    "state_toggle"
                );
                jQuery(".js-validation-bharatpe-send-otp")
                    .find('button[type="submit"]')
                    .prop("disabled", false);
                if (
                    response &&
                    typeof response === "object" &&
                    response.status &&
                    response.status == "success"
                ) {
                    if (response.fast_redirect) {
                        window.location.href = response.fast_redirect;
                        return;
                    }
                    Swal.fire({
                        text: response.msg,
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    }).then(function () {
                        if (response.status && response.status == "success") {
                            jQuery('input[name="merchant_id"]').val(
                                response.merchant_id
                            );
                            jQuery(".js-validation-bharatpe-send-otp").addClass(
                                "d-none"
                            );
                            jQuery(
                                ".js-validation-bharatpe-verify-otp"
                            ).removeClass("d-none");
                            jQuery(
                                ".js-validation-bharatpe-verify-otp"
                            ).addClass("bharatpe_div");
                        }
                    });
                } else {
                    Swal.fire({
                        text:
                            response.msg ||
                            "Sorry, something went wrong, please try again.",
                        icon: "error",
                        title: "Error 😢",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-success m-1",
                            cancelButton: "btn btn-danger m-1",
                            input: "form-control",
                        },
                    });
                }
            });
    });

    jQuery("form.js-validation-bharatpe-verify-otp").validate({
        rules: {
            otp: { required: !0, rangelength: [4, 4], digits: true },
        },
        messages: {
            otp: {
                required: "Please enter a otp",
                digits: "Your otp must consist of digits only",
                rangelength: "Your otp must consist of 4 digits",
            },
        },
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");

            if (element.parent(".input-group").length) {
                error.insertAfter(element.parent());
            } else if (
                element.prop("type") === "radio" &&
                element.parent(".radio-inline").length
            ) {
                error.insertAfter(element.parent().parent());
            } else if (
                element.prop("type") === "checkbox" ||
                element.prop("type") === "radio"
            ) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            var action = jQuery(form).attr("action");
            console.log("action", action);
            var data = FormToJSON(form);
            console.log("data", data);
            $("#js-validation-bharatpe-verify-otp").toggleClass("state_toggle");
            $("#js-validation-bharatpe-verify-otp button[type=submit]").attr(
                "disabled",
                true
            );
            fetch(action, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            })
                .then(function (res) {
                    return res.json();
                }) // Return valid JSON
                .then(async function (response) {
                    // Return valid JSON
                    // Release button
                    $("#js-validation-bharatpe-verify-otp").toggleClass(
                        "state_toggle"
                    );
                    $(
                        "#js-validation-bharatpe-verify-otp button[type=submit]"
                    ).attr("disabled", false);
                    if (
                        response &&
                        typeof response === "object" &&
                        response.status &&
                        response.status == "success"
                    ) {
                        if (response.fast_redirect) {
                            window.location.href = response.fast_redirect;
                            return;
                        }
                        $("#alert_modal").modal("show");
                        $("#confirm_alert_btn").click(function () {
                            $("#alert_modal").modal("hide");
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                        // Swal.fire({
                        // 	text: response.msg,
                        // 	icon: "success",
                        // 	buttonsStyling: false,
                        // 	confirmButtonText: "Ok, got it!",
                        // 	customClass: {
                        // 		confirmButton: "btn btn-success m-1",
                        // 		cancelButton: "btn btn-danger m-1",
                        // 		input: "form-control",
                        // 	},
                        // }).then(function () {
                        // 	if (response.redirect) window
                        // 	.location.href = response.redirect;
                        // 	if (response.reload) window.location.reload();
                        // });
                    } else {
                        Swal.fire({
                            text:
                                response.msg ||
                                "Sorry, something went wrong, please try again.",
                            icon: "error",
                            title: "Error 😢",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-success m-1",
                                cancelButton: "btn btn-danger m-1",
                                input: "form-control",
                            },
                        }).then(function () {
                            if (response.redirect)
                                window.location.href = response.redirect;
                            if (response.reload) window.location.reload();
                        });
                    }
                });
        },
    });
});

// $("form#select_merchant_form").on("submit", function (e) {
// 	e.preventDefault();
// 	console.log("this is test form");
// 	var form = $(this);
// 	console.log("form", form);
// 	var data = FormToJSON(form);
// 	console.log("data", data);
// });

// $(".merchant_type_radio").on("click", function () {
// 	console.log("hello test");
// 	var merchant_type = $(`input[name="merchant_type"]:checked`).val();
// 	// $("#merchant_btn").attr("disabled", true);
// 	// $("#merchant_btn").html("Please wait...");
// 	if (merchant_type === "hdfc") {
// 		console.log("hdfc");
// 		$("#select_merchant_form").addClass("d-none");
// 		$(".hdfc_div").removeClass("d-none");
// 		$(".phonepe_business_div").addClass("d-none");
// 		$(".yono_sbi_div").addClass("d-none");
// 	} else if (merchant_type === "phonepe_business") {
// 		console.log("phonepe");
// 		$("#select_merchant_form").addClass("d-none");
// 		$(".phonepe_business_div").removeClass("d-none");
// 		$(".hdfc_div").addClass("d-none");
// 		$(".yono_sbi_div").addClass("d-none");
// 	} else {
// 		console.log("yono_sbi");
// 		$("#select_merchant_form").addClass("d-none");
// 		$(".yono_sbi_div").removeClass("d-none");
// 		$(".hdfc_div").addClass("d-none");
// 		$(".phonepe_business_div").addClass("d-none");
// 	}
// });

// make on change event for merchant_type radio button
$(`input[name="merchant_type"]`).on("click", function () {
    var selected_merchant_type = $(`input[name="merchant_type"]:checked`).val();
    if (selected_merchant_type == "paytm_business") {
        $(".warning_paytm_div").removeClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_phonepe_div").addClass("d-none");
    } else if (selected_merchant_type == "bharatpe_merchants_disable") {
        $(".warning_bharatpe_div_disable").removeClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
    } else if (selected_merchant_type == "phonepe_business") {
        $(".warning_phonepe_div").removeClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
    } else if (selected_merchant_type == "hdfc") {
        $(".warning_hdfc_div").removeClass("d-none");
        $(".warning_phonepe_div").addClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
    } else if (selected_merchant_type == "bharatpe_merchants") {
        $(".warning_bharatpe_div").removeClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_phonepe_div").addClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
    } else if (selected_merchant_type == "gpay_merchants") {
        $(".warning_gpay_div").removeClass("d-none");
        $(".warning_tataneu_div").addClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_phonepe_div").addClass("d-none");
        $(".warning_quintuspay_div").addClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
        $(".warning_gpay_div_disable").addClass("d-none");
    } else {
        $(".warning_phonepe_div").addClass("d-none");
        $(".warning_hdfc_div").addClass("d-none");
        $(".warning_paytm_div").addClass("d-none");
        $(".warning_bharatpe_div_disable").addClass("d-none");
        $(".warning_bharatpe_div").addClass("d-none");
    }
});

$("#merchant_btn").on("click", function () {
    var merchant_type = $(`input[name="merchant_type"]:checked`).val();
    $(".merchant_div").removeClass("d-none");
    if (merchant_type === "hdfc") {
        console.log("hdfc");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".hdfc_div").removeClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else if (merchant_type === "phonepe_business") {
        console.log("phonepe");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".phonepe_business_div").removeClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else if (merchant_type === "yono_sbi") {
        console.log("yono_sbi");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".yono_sbi_div").removeClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else if (merchant_type === "paytm_business") {
        console.log("paytm_business");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".paytm_div").removeClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else if (merchant_type === "gpay_merchants") {
        console.log("gpay");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".gpay_div").removeClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".tata_neu_div").addClass("d-none");
        $(".quintusPay_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
    } else if (merchant_type === "bharatpe_merchants") {
        console.log("bharatpe");
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".bharatpe_div").removeClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else if (merchant_type === "bharatpe_merchants_disable") {
        $(".bharatpe_div").addClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    } else {
        $("#select_merchant_form").addClass("d-none");
        $(".select_merchant_div").addClass("d-none");
        $(".bharatpe_div").addClass("d-none");
        $(".phonepe_business_div").addClass("d-none");
        $(".yono_sbi_div").addClass("d-none");
        $(".hdfc_div").addClass("d-none");
        $(".paytm_div").addClass("d-none");
		 $(".gpay_div").addClass("d-none");
    }
});

$(".select_merchant_btn").on("click", function () {
    console.log("warn_modal");
    $("#warn_modal").modal("show");
});

$("#confirm_warn_btn").click(function () {
    if (!$("#accept_warn_tc_btn").prop("checked")) {
        $("#accept_warn_tc_btn").focus();
        $("#accept_warn_tc_btn").addClass("is-invalid");
        return false;
    }
    $("#warn_modal").modal("hide");
    $(".info_div").addClass("d-none");
    $(".select_merchant_div").removeClass("d-none");
});

// $(".merchant_div").removeClass("d-none");
$(".back_home_merchant_btn").on("click", function () {
    $(".info_div").removeClass("d-none");
    $(".merchant_div").addClass("d-none");
    $(".select_merchant_div").addClass("d-none");
});

$(".back_select_merchant_btn").on("click", function () {
    // $(".info_div").removeClass("d-none");
    // $(".merchant_div").addClass("d-none");
    $(".select_merchant_div").removeClass("d-none");
    $(".phonepe_business_div").addClass("d-none");
    $(".yono_sbi_div").addClass("d-none");
    $(".hdfc_div").addClass("d-none");
    $(".paytm_div").addClass("d-none");
    $(".bharatpe_div").addClass("d-none");
});

$("#show_phonepe_create_merchant_modal").on("click", function () {
    $("#phonepe_create_merchant_modal").modal("show");
});

$("#show_hdfc_create_merchant_modal").on("click", function () {
    $("#hdfc_create_merchant_modal").modal("show");
});

$("#show_paytm_create_merchant_modal").on("click", function () {
    $("#paytm_create_merchant_modal").modal("show");
});

$("#show_yono_sbi_create_merchant_modal").on("click", function () {
    $("#yono_sbi_create_merchant_modal").modal("show");
});
