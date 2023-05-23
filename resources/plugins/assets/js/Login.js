'use strict';
(function () {
    var Login = $D();
    var Currency = {};
    var data;
    var tableIdentifier = 0;
       
    $(document).ready(function () {
        GetExchangeRate("USD", "JPY");
        GetExchangeRate("JPY", "USD");
        $("#Username").focus();
        $("#frmLogin").submit(function (e) {
            e.preventDefault();
            LoginMeIn();
        });
        $("#CurrentPassword").change(function () {
            CheckIsUserNameAndPass($("#Username").val(), $(this).val());
        });
        $("#ConfirmPassword").change(function () {
            var newPassword = $("#NewPassword").val();
            if ($(this).val() === newPassword) {
                $("#btnSave").attr("disabled", false);
                $("#ConfirmPassword, #NewPassword").closest(".input-group").removeClass("has-error").addClass("has-no-error");
            }
            else {
                $("#btnSave").attr("disabled", true);
                $("#ConfirmPassword, #NewPassword").closest(".input-group").removeClass("has-no-error").addClass("has-error");
                Login.showError("New and Confirm password do not match.");
            }
        });
        $("#ForgotPasswordLink").click(function () {
            $("#mdlForgotPassword").modal("show");
            $("#UserName").focus();
        });
        $("#btnSave").click(function (e) {
            e.preventDefault();
            UpdatePassword($("#Username").val(), $("#NewPassword").val());
        });
        //All Function --------------------------------------------------------------------------------
        function LoginMeIn() {
            Login.formData = $('#frmLogin').serializeArray();
            Login.setJsonData();
            Login.formAction = '/Login/LoginEntry';
            Login.sendData().then(function () {
                var login = Login.responseData;
                if (login.error) {
                    if (login.errmsg == "Invalid Username or Password. Please try again.")
                        Login.showError(login.errmsg);
                    else
                        Login.showErrorNoTimeout(login.errmsg);
                    $("#Username").addClass("input-error");
                    $("#Password").addClass("input-error");
                    $("#Username").addClass("parsley-success");
                    $("#Password").addClass("parsley-success");
                    $("#Password").val("");
                } else {
                    $("#Username").removeClass("input-error");
                    $("#Password").removeClass("input-error");
                    $("#frmLogin > div.login-buttons > button").attr("disabled", true);
                    window.location = "/";
                }
            });
        }

        function GetExchangeRate(fromCurrency, toCurrency) {
            let amountVal = 1;
            let url = `https://v6.exchangerate-api.com/v6/0ae5560ee7661b1824520e41/latest/${fromCurrency}`; // EDIT YOUR-API-KEY (ex: 0ae5560ee7661b1824520e41)

            fetch(url).then(response => response.json()).then(result => {
                let exchangeRate = result.conversion_rates[toCurrency];
                let totalExRate = amountVal * exchangeRate;
                    Currency = {
                        "FromCurrency": fromCurrency,
                        "ToCurrency": toCurrency,
                        "FromCurrencyAmount": amountVal,
                        "ToCurrencyAmount": totalExRate
                    };
                console.log(Currency);
                data = { currency: Currency }
                console.log(data);
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: "Login/SaveExchangeRate",
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify(data),
                });
            }).catch(() => {
               console.log("RATE MASTER : Something went wrong");
                });
        }

        function CheckIsUserNameAndPass(userName, currentPass) {
            Login.formAction = '/Login/CheckIsUserNameAndPassIsExists';
            Login.jsonData = { UserName: userName, CurrentPassword: currentPass };
            Login.sendData().then(function () {
                var login = Login.responseData;
                if (login < 1) {
                    Login.showError("Username and Password do not exists.");
                    $("#Username, #CurrentPassword").closest(".input-group").removeClass("has-no-error").addClass("has-error");
                }
                else {
                    $("#Username, #CurrentPassword").closest(".input-group").removeClass("has-error").addClass("has-no-error");
                    tableIdentifier = login;
                }
            });
        }
        function UpdatePassword(userName, newpassword) {
            Login.formAction = '/Login/UpdatePassword';
            Login.jsonData = {
                Tableidentifier: tableIdentifier,
                UserName: userName,
                Newpassword: newpassword
            };
            Login.sendData().then(function () {
                $("#mdlForgotPassword").modal("hide");
            });
        }
    });
})();