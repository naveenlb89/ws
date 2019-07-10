
$(document).ready(function(){
	var travelerCount = 1;
	function updateclassname(){
			var i=1;
			$(".traveler-form-block").each(function(){
				$(this).find("h2 span").text("Traveler "+ i);
				$(this).addClass("m-reg-form-block traveler-form-block traveler-"+ i++ ); 
		});
	}
	function removeforms(){
		$(".parent-form , .responsible-party-form, .emergency-contact-form").addClass("hide");
	}
	//add phone
	$(document).on("click", ".add-phone", function(){
		var phoneDetails = $(this).parents(".phone-details").clone();
		$(this).parents(".phone-details").parent().append(phoneDetails);
	});
	//add traveler
	$(document).on("click",".add-traveller-btn", function(){
		travelerCount++;
		var clonedForm = $(this).closest(".traveler-form-block").clone() ;
		if(clonedForm.find(".remove-traveler-btn").hasClass("hide")){
			clonedForm.find(".remove-traveler-btn").removeClass("hide");
		}
		clonedForm.find(':input').val('');
		clonedForm.find('.ui-datepicker-trigger').remove();
		clonedForm.find('.dob').removeClass("hasDatepicker").removeAttr('id').datepicker({
		  changeMonth: true,
		  changeYear: true,
		  showOn: "both", 
		  buttonText: '<i class="fas fa-calendar-alt"></i>'
		});
		$(clonedForm).find("h2 span").text("Traveler "+ travelerCount);
		clonedForm.removeClass().addClass("m-reg-form-block traveler-form-block traveler-"+ travelerCount).appendTo(".travelers-forms");
		$(this).closest(".add-traveller-block").addClass("hide");
		//updateclassname();
	});
	
	//remove traveller
	$(document).on("click",".remove-traveler-btn", function(){
		$(this).closest(".traveler-form-block").remove();
		travelerCount--;
		$(".traveler-"+travelerCount).find(".add-traveller-block").removeClass("hide");
		//updateclassname();
	});
	
	//emergency contact functionality
	$(".emergency-contact-checkbox").click(function(){
		if($(this).is(":checked")){
			$(".emergency-contact-form").addClass("hide");
		}
		else{
			$(".emergency-contact-form").removeClass("hide");
		}
	});
			
	//on traveling as input change
	$(document).on("change","select.travelingAs", function(){
	  removeforms();	
	  var travelingAs = $(this).children("option:selected").val();
	  var travelerBlock = $(this).parents(".traveler-form-block");
	  if (travelingAs == "Student"){
		travelerBlock.find(".pl-code , .form-check, .co-code").addClass("hide");
		travelerBlock.find(".current-grade").removeClass("hide");
		$(".parent-form").removeClass("hide");
		$(".emergency-contact-form").removeClass("hide");
		travelerBlock.find(".primary-acc-formcheck").addClass("hide");
	  }
	  else{
		  travelerBlock.find(".form-check-input").prop('checked', false);
		  travelerBlock.find(".acc-credentials").addClass("hide");
		  travelerBlock.find(".address-details").addClass("hide");
		  $(".responsible-party-form").removeClass("hide");
		  $(".emergency-contact-form").removeClass("hide");
		  travelerBlock.find(".primary-acc-formcheck").removeClass("hide");
		  if(travelingAs == "Chaperone"){
			  travelerBlock.find(".pl-code , .current-grade").addClass("hide");
			  travelerBlock.find(".co-code").removeClass("hide");
		  }
		  else if(travelingAs == "Program Leader"){
			  travelerBlock.find(".co-code, .current-grade").addClass("hide");
			  travelerBlock.find(".pl-code").removeClass("hide");
			  
		  }
		  else if(travelingAs == "Adult"){
			  travelerBlock.find(".co-code, .current-grade, .pl-code").addClass("hide");
			  
		  }
		  
		  //primary account holder functionality
		   $('.primary-acc-holder').click(function(){
			   var accountBlock = $(this).parents(".traveler-form-block").find(".acc-credentials");
			   var addressDetails = $(this).parents(".traveler-form-block").find(".address-details");
				if($(this).is(":checked")){
					accountBlock.removeClass("hide");
					addressDetails.removeClass("hide");
					removeforms();
					$(".emergency-contact-form").removeClass("hide");
				}
				else{
				   accountBlock.addClass("hide");
				   addressDetails.addClass("hide");
				   removeforms();
				   $(".responsible-party-form").removeClass("hide");
				}
			});
			
	  }
  });
  
  
  
});
	