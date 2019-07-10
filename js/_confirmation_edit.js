$(document).ready(function() {
    jQuery.validator.addMethod("email", function(value, element) {
        return this.optional(element) || /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
    }, "Enter a valid email");

    jQuery.validator.addMethod("digits", function(value, element) {
        return this.optional(element) || /^\d{10}$/.test(value);
    }, "Enter valid phone number");

    $("form[name='traveller-1']").each(function() {
        $(this).validate({
            rules: {
                travellerName: "required",
                travellerGender: "required",
                travellerDOB: "required",
                travellerPhone: "required",
                travellerCell: "required",
                travellerEmail: {
                    required: true,
                    email: true
                },
                travellerCountry: "required",
                travellerAddress: "required"
            },
            messages: {
                traveller1Name: "Please Enter Name",
                travellerGender: "Please Enter Gender",
                travellerDOB: "Please Enter DOB",
                travellerPhone: "Please Enter Phone",
                travellerCell: "Please Enter Cell",
                travellerEmail: {
                    required: "Please Enter Email"
                },
                travellerCountry: "Please Enter Country",
                travellerAddress: "Please Enter Address"
            },
            highlight: function(element, value) {
                $(element).addClass("error-custom");
                $(element).parent().prev('label').addClass("error-custom");
            },
            unhighlight: function(element) {
                $(element).parent().prev('label').removeClass("error-custom");
                $(element).removeClass("error-custom");
            },

            submitHandler: function(form) {
                event.preventDefault();
                $(form).parent().removeClass("edit").addClass("saved");
            }
        });
    });

    $('form[name="emergencyContact"]').validate({
        rules: {
            EmergencyContactName: "required",
            EmergencyContactEmail: {
                required: true,
                email: true
            },
            EmergencyContactMobile: "required"
        },
        messages: {
            EmergencyContactName: "Please Enter name",
            EmergencyContactEmail: {
                required: "Please Enter Email"
            },
            EmergencyContactMobile: "Please Enter Mobile"
        },
        highlight: function(element, value) {
            $(element).addClass("error-custom");
            $(element).parent().prev('label').addClass("error-custom");
        },
        unhighlight: function(element) {
            $(element).parent().prev('label').removeClass("error-custom");
            $(element).removeClass("error-custom");
        },

        submitHandler: function(form) {
            event.preventDefault();
            $(form).parent().removeClass("edit").addClass("saved");
        }
    })


    $(".editing").click(function() {
        $(this).closest(".traveller").removeClass("saved").addClass("edit");
        $("input").change(function() {
            var enteredVal = $(this).val();
            $(this).siblings(".entered-val").text(enteredVal);
        });
    });


});