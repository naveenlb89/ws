$(document).ready(function() {

    jQuery.validator.addMethod("email", function(value, element) {
        return this.optional(element) || /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
    }, "Enter a valid email");

    jQuery.validator.addMethod("digits", function(value, element) {
        return this.optional(element) || /^\d{10}$/.test(value);
    }, "Enter valid phone number");

    $("#travellerForm").validate({
        rules: {
            tavellingAs: "required",
            firstnameTraveller: "required",
            gender: "required",
            country: "required",
            bday: "required",
            lastnameTraveller: "required",
            primaryaccount: "required",
            firstnameEmergencyTraveller: "required",
            lastnameEmergencyTraveller: "required",
            emailEmergencyTraveller: {
                required: true,
                email: true
            },
            phoneEmergencyTraveller: {
                required: true,
                digits: true
            },
            firstnameGaurdian: "required",
            emailGaurdian: {
                required: true,
                email: true
            },
            lastnameGaurdian: "required",
            retypeEmailGaurdian: {
                required: true,
                email: true
            },
            addressGaurdian: "required",
            phoneGaurdian: {
                required: true,
                digits: true
            },
            cityGaurdian: "required",
            zipGaurdian: "required",
            usernameGaurdian: "required",
            passwordGaurdian: "required",
            retypePasswordGaurdian: "required",
            firstnameResponsible: "required",
            emailResponsible: {
                required: true,
                email: true
            },
            lastnameResponsible: "required",
            retypeEmailResponsible: {
                required: true,
                email: true
            },
            addressResponsible: "required",
            phoneResponsible: {
                required: true,
                digits: true
            },
            cityResponsible: "required",
            zipResponsible: "required",
            usernameResponsible: "required",
            passwordResponsible: "required",
            retypePasswordResponsible: "required",
            firstnameEmergencyContact: "required",
            emailEmergencyContact: {
                required: true,
                email: true
            },
            phoneEmergencyContact: {
                required: true,
                digits: true
            },
            lastnameEmergencyContact: "required",
            retypeEmailEmergencyContact: {
                required: true,
                email: true
            },
            retypeEmailTraveler: {
                equalTo: "#travelerEmailAddress"
            }
        },
        messages: {
            tavellingAs: "Please Select Travelling as",
            firstnameTraveller: "Please Enter First Name",
            gender: "Please Select Gender",
            country: "Please Select Country",
            bday: "Please Enter Date of Birth",
            lastnameTraveller: "Please Enter Last Name",
            primaryaccount: "Please Enter Primary Account",
            firstnameEmergencyTraveller: "Please Enter Emergency Contact First Name",
            lastnameEmergencyTraveller: "Please Enter Emergency Contact Last Name",
            emailEmergencyTraveller: {
                required: "Please Enter Emergency Contact Email Address"
            },
            phoneEmergencyTraveller: {
                required: "Please Enter Phone"
            },
            firstnameGaurdian: "Please Enter Parent or Guardian First Name",
            emailGaurdian: {
                required: "Please Enter Parent or Guardian Email Address"
            },
            lastnameGaurdian: "Please Enter Parent or Guardian Last Name",
            retypeEmailGaurdian: {
                required: "Please Enter Retype Email Address",
            },
            addressGaurdian: "Please Enter Parent or Guardian Address",
            phoneGaurdian: {
                required: "Please Enter Phone"
            },
            cityGaurdian: "Please Enter city",
            zipGaurdian: "Please Enter zip",
            usernameGaurdian: "Please Enter Username",
            passwordGaurdian: "Please Enter Password",
            retypePasswordGaurdian: "Please Enter Retype password",
            firstnameResponsible: "Please Enter Responsible Party First Name",
            emailResponsible: {
                required: "Please Enter Responsible Party Email Address"
            },
            lastnameResponsible: "Please Enter Responsible Party Last Name",
            retypeEmailResponsible: {
                required: "Please Enter Retype Email Address"
            },
            addressResponsible: "Please Enter Responsible Party Address",
            phoneResponsible: {
                required: "Please Enter Phone"
            },
            cityResponsible: "Please Enter city",
            zipResponsible: "Please Enter zip",
            usernameResponsible: "Please Enter Username",
            passwordResponsible: "Please Enter Password",
            retypePasswordResponsible: "Please Enter Retype password",
            firstnameEmergencyContact: "Please Enter Emergency Contact First Name",
            emailEmergencyContact: {
                required: "Please Enter Emergency Contact Email Address"
            },
            phoneEmergencyContact: {
                required: "Please Enter Phone"
            },
            lastnameEmergencyContact: "Please Enter Emergency Contact Last Name",
            retypeEmailEmergencyContact: {
                required: "Please Enter Emergency Contact Retype Email Address"
            },
            retypeEmailTraveler: "Both Emails doesn't match",


        },
        highlight: function(element, value) {
            $(element).addClass("error-custom");
            $(element).prev('label').addClass("error-custom");
        },
        unhighlight: function(element) {
            $(element).prev('label').removeClass("error-custom");
            $(element).removeClass("error-custom");
        },

        submitHandler: function(form) {
            alert("sss");
            event.preventDefault();
            //form.submit();
        }
    });
});