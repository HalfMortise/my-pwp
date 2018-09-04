/**
 * jQuery Validate Function
 *
 * This function provides front-end validation for email form.
 * If all tests set up here pass, the form data is AJAX submitted
 * to the mailer.php file.
 **
 * @author HalfMortise <halfmortise@protonmail.com>
 **/
$(document).ready(function(){

	/* begin validate function here */
	$("#pwp-contact-form").validate({

		// setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// rules here define what is good vs. bad input
		// each rule starts with the form input element's 'name' attribute
		rules: {
			contactName: {
				required: true
			},
			contactEmail: {
				email: true,
				required: true
			},
			contactPhone: {
				phone: true,
				required: false
			},
			contactCompany: {
				company: true,
				required: false
			},
			contactMessage: {
				required: true,
				maxlength: 2000
			}
		},

		// error messages to display to the end user when rules above don't pass
		messages: {
			contactName: {
				required: "Name required"
			},
			contactEmail: {
				email: "Email address required",
				required: "Email address required"
			},
			contactMessage: {
				required: "Please enter a message.",
				maxlength: "2000 characters max."
			}
		},

		// AJAX submit the form data to back end if rules pass
		submitHandler: function(form) {
			$("#pwp-contact-form").ajaxSubmit({
				type: "POST",
				url: $("#pwp-contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#error-output-area").css("display", "");

					// write the server's reply to the output area
					$("#error-output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#pwp-contact-form")[0].reset();
					}
				}
			})
		}

	});/* end validate function here */

});/* end document.ready() */