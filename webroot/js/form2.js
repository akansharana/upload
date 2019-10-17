    $('#PersonalInformation').click(function() {

        $.validator.addMethod("loginRegex1", function(value, element) {
            return this.optional(element) || /^[a-z0-9!@#$%&*-_.]+$/i.test(value);
        }, "Username must contain only letters, numbers, or dashes.");
        $.validator.addMethod("loginRegex", function(value, element) {
            return this.optional(element) || /^[a-z0-9\_.]+$/i.test(value);
        }, "Spaces or Special Characters not allowed");
        $.validator.addMethod("bankaccno", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, "Account no. only contain alphnu.");
		$.validator.addMethod("userRegex", function(value, element) {
            return this.optional(element) || /^[a-zA-Z ]+$/i.test(value);
        }, "First name contain letters.");
        $.validator.addMethod("usermobile", function(value, element) {
            return this.optional(element) || /^[0-9]+$/i.test(value);
        }, "Spaces and characters not allowed ");
        // Form Name
        $("#PersonalInformationForm").validate({
            rules:
                    {
                       		'data[UserPersonalInformation][caddress]':
                                {
                                    required: true,
                                    loginRegex1: true,
								},
								'data[UserPersonalInformation][ccity]':
                                {
                                    required: true,             
								},
								'data[UserPersonalInformation][cstate]':
                                {
                                    required: true,
								},
								'data[UserPersonalInformation][ccountry]':
                                {
                                    required: true,
								},
								'data[UserPersonalInformation][czip]':
                                {
									required: true,
                                    minlength: 6,
                                    maxlength: 6,
                                    usermobile:true,
								},
								'data[UserPersonalInformation][gname]':
                                {
                                    required: false,
                                    minlength: 3,
                                    maxlength: 30,
                                    userRegex: true,
                                },
								'data[UserPersonalInformation][grelation]':
                                {
                                    required: false,
                                },
								'data[UserPersonalInformation][gaddress]':
                                {
                                    required: false,
                                },
								'data[UserPersonalInformation][gmobile]':
                                {
                                    required: false,
                                    minlength: 10,
                                    maxlength: 10,
                                    usermobile:true,
                                },
								'data[UserPersonalInformation][gaadhar]':
                                {
                                    required: false,
                                    minlength: 16,
                                    maxlength: 16,
                                    usermobile:true,
                                },
								'data[UserPersonalInformation][gpan]':
                                {
                                    required: false,
                                    minlength: 10,
                                    maxlength: 10,
                                    usermobile:true,
                                },
                    },
            messages:
                    {
                        'data[UserPersonalInformation][caddress]':
                                {
                                    required: "Address is Mandatory",
                                    loginRegex1: "Address Contain only alphaber, Number, Dashs(-)",
                                },
								'data[UserPersonalInformation][ccity]':
                                {
                                    required: "City is Mandatory",
                                },
								'data[UserPersonalInformation][cstate]':
                                {
                                    required: "State is Mandatory",
                                },
								'data[UserPersonalInformation][ccountry]':
                                {
                                    required: "Country is Mandatory",
                                },
								'data[UserPersonalInformation][czip]':
                                {
                                    required: "Please enter ZIP Code",
                                    minlength: "Minimum 6 numbers Allowed",
                                    usermobile: "ZIP Contain only numbers",
                                    maxlength: "Maximum 6 numbers allowed",
								},
								'data[UserPersonalInformation][gname]':
                                {
                                    required: "Gurdian Name is Mandatory",
								},
								'data[UserPersonalInformation][grelation]':
                                {
                                    required: "Please provide Relation with Guardian",
								},
								'data[UserPersonalInformation][gaddress]':
                                {
                                    required: "Please provide address of Guardian",
								},
								'data[UserPersonalInformation][gmobile]':
                                {
                                    required: "Please enter guardin mobile number",
                                    minlength: "Minimum 10 numbers Allowed",
                                    usermobile: "Mobile number Contain Only Numbers",
                                    maxlength: "Maximum 10 numbers allowed",
								},
								'data[UserPersonalInformation][gaadhar]':
                                {
                                   required: "Please enter guardian Adhaar Card",
                                    minlength: "Minimum 16 numbers Allowed",
                                    usermobile: "Adhaar card contain only numbers",
                                    maxlength: "Maximum 16 numbers allowed",
								},
								'data[UserPersonalInformation][gpan]':
                                {
                                   required: "Please enter guardian PAN Card details",
                                    minlength: "Minimum 10 numbers Allowed",
                                    usermobile: "PAN card contain only numbers & Letters",
                                    maxlength: "Maximum 10 numbers allowed",
								}
                    },
            errorElement: "div",
            errorPlacement: function(error, element) {
                if (element.attr("name") == "data[UserPersonalInformation][caddress]")
                    error.insertAfter(".caddress-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][ccity]")
                    error.insertAfter(".ccity-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][cstate]")
                    error.insertAfter(".cstate-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][ccountry]")
                    error.insertAfter(".ccountry-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][czip]")
                    error.insertAfter(".czip-missing");	
				else if(element.attr("name") == "data[UserPersonalInformation][gname]")
                    error.insertAfter(".gname-missing");	
				else if(element.attr("name") == "data[UserPersonalInformation][grelation]")
                    error.insertAfter(".grelation-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][gaddress]")
                    error.insertAfter(".gaddress-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][gmobile]")
                    error.insertAfter(".gmobile-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][gaadhar]")
                    error.insertAfter(".gaadhar-missing");
				else if(element.attr("name") == "data[UserPersonalInformation][gpan]")
                    error.insertAfter(".gpan-missing");				
			}
  });

  });