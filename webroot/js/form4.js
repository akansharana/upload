
$('#nomineeDetail').click(function () {
    $.validator.addMethod("loginRegex1", function (value, element) {
        return this.optional(element) || /^[a-z0-9!@#$%&*-_.]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");
    $.validator.addMethod("loginRegex", function (value, element) {
        return this.optional(element) || /^[a-z0-9\_.]+$/i.test(value);
    }, "Spaces or Special Characters not allowed");
    $.validator.addMethod("bankaccno", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    }, "Account no. only contain alphnu.");
    $.validator.addMethod("userRegex", function (value, element) {
        return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
    }, "First name contain letters.");
    $.validator.addMethod("usermobile", function (value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "Spaces and characters not allowed ");
    // Form Name
    $("#nomineeForm").validate({
        rules:
                {
                    'data[nominee][nomineename]':
                            {
                                required: true,

                            },
                    'data[nominee][nomineedob]':
                            {
                                required: true,
                            },
                    'data[nominee][RelationWithPolicyHolder]':
                            {
                                required: true,

                            },
                    'data[nominee][NomineeAnnualIncome]':
                            {
                                required: true,

                            },
                    'data[nominee][NomineeOccupation]':
                            {
                                required: true,

                            },
                    'data[nominee][NomineeAddress]':
                            {
                                required: true,

                            }
                },
        messages:
                {
                    'data[nominee][nomineename]':
                            {
                                required: "Nominee Name is Mandatory",

                            },
                    'data[nominee][nomineedob]':
                            {
                                required: "Please provide date of birth of nominee",
                            },
                    'data[nominee][RelationWithPolicyHolder]':
                            {
                                required: "Please provide relation with Nominee",

                            },
                    'data[nominee][NomineeAnnualIncome]':
                            {
                                required: "Please enter guardin mobile number",

                            },
                    'data[nominee][NomineeOccupation]':
                            {
                                required: "Please enter Valid occupation details",

                            },
                    'data[nominee][NomineeAddress]':
                            {
                                required: "Please enter Valid address details",

                            }
                },

        errorElement: "div",
        errorPlacement: function (error, element) {
            if (element.attr("name") == "data[nominee][nomineename]")
                error.insertAfter(".nominee-missing");
            else if (element.attr("name") == "data[nominee][nomineedob]")
                error.insertAfter(".nomineedob-missing");
            else if (element.attr("name") == "data[nominee][RelationWithPolicyHolder]")
                error.insertAfter(".RelationWithPolicyHolder-missing");
            else if (element.attr("name") == "data[nominee][NomineeAnnualIncome]")
                error.insertAfter(".NomineeAnnualIncome-missing");
            else if (element.attr("name") == "data[nominee][NomineeOccupation]")
                error.insertAfter(".NomineeOccupation-missing");
            else if (element.attr("name") == "data[nominee][NomineeAddress]")
                error.insertAfter(".NomineeAddress-missing");
        }
    });

});


