
$('#BankDetailSubmit').click(function () {

    $.validator.addMethod("loginRegex1", function (value, element) {
        return this.optional(element) || /^[a-z0-9!@#$%&*-_.]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");
    $.validator.addMethod("loginRegex", function (value, element) {
        return this.optional(element) || /^[a-z0-9\_.]+$/i.test(value);
    }, "Spaces or Special Characters not allowed");
    $.validator.addMethod("userRegex", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
    }, "First name contain letters.");
    $.validator.addMethod("bankaccno", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    }, "Account no. only contain alphnu.");
    $.validator.addMethod("usermobile", function (value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "Spaces and characters not allowed ");
    // Form Name
    $("#BankDetailForm").validate({
        rules:
                {
                    'data[bank][bank_name]':
                            {
                                required: true,
                            },
                    'data[bank][account_no]':
                            {
                                required: true,
                                bankaccno: true,
                            },
                    'data[bank][ifsc]':
                            {
                                required: true,
                                bankaccno: true,
                                minlength: 11,
                                maxlength: 11,
                            },
                    'data[bank][baddress]':
                            {
                                required: true,
                            }

                },
        messages:
                {
                    'data[bank][bank_name]':
                            {
                                required: "Bank name is Mandatory",
                            },
                    'data[bank][account_no]':
                            {
                                required: "Account Number is Mandatory",
                                bankaccno: "Account number only contains alphanumeric numbers",
                            },
                    'data[bank][ifsc]':
                            {
                                required: "IFSC is Mandatory",
                                bankaccno: "IFSC only contains alphanumeric numbers",
                                minlength: "Minimum 11 alpha numeric Allowed",
                                maxlength: "Maximum 11 alphanumeric allowed",
                            },
                    'data[bank][baddress]':
                            {
                                required: "Bank address is Mandatory",
                            }
                },

        errorElement: "div",
        errorPlacement: function (error, element) {
            if (element.attr("name") == "data[bank][bank_name]")
                error.insertAfter(".bank-missing");
            else if (element.attr("name") == "data[bank][account_no]")
                error.insertAfter(".acc-missing");
            else if (element.attr("name") == "data[bank][ifsc]")
                error.insertAfter(".ifsc-missing");
            else if (element.attr("name") == "data[bank][baddress]")
                error.insertAfter(".baddress-missing");

        }
    });

});

