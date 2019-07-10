<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>    
<?php include '../inc/_mobile-step-wizard.php';?> 
<div class="container-fluid m-step-wizard">
	<section class="option-list">
		<div class="container-fluid">
			<div class="row">
				<div class="options">
					<ul class="list-unstyled">
						<li>
							<span class="sw-completed"><i class="fa fa-check" aria-hidden="true"></i></span>
							<div>Accounts</div>
						</li>
						<li><span class="sw-completed"><i class="fa fa-check" aria-hidden="true"></i></span>
							<div>Options</div>
						</li>
						<li class="option-active"><span>3</span>
							<div>Payment</div>
						</li>
						<li><span>4</span>
							<div>Confirmation</div>
						</li>
					</ul>
					<div class="hr-line"></div>
				</div>
			</div>
		</div>
	</section>
</div>
 <section class="m-payment d-none d-sm-block">
   <div class="container wrap-container">
      <div class="row">
         <div class="col-md-9">
            <div class="payment-option-section">
               <div class="payment-header">
                  <h2 class="addPaymentMethod">Add Payment Method</h2><span class="pull-right secureCheckout"><i class="fas fa-lock"></i>Secure Checkout</span>
               </div>
               <div class="accordion-wrapper">
                  <div id="accordion">

					 <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Debit Card
                              </button>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <section class="debit-card">
                                                <div class="card-details">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <span class="card-image">
                                                                  <img src="../assets/images/credit-Card.png" alt="">
                                                               </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Card Type</label>
                                                                <select class="form-control form-control-sm" id="card">
                                                                    <option>Select One</option>
                                                                    <option>Visa</option>
                                                                    <option>Master</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Card Number</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3 col-6">
                                                                <label for="">Expiration Date</label>
                                                                <input type="text" class="form-control form-control-sm card-payment-dob" name="bday">
                                                            </div>
                                                            <div class="form-group col-md-3 col-6">
                                                                <label for="">CVV Code  <i class="fa fa-question-circle"></i></label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="123">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Cardholder’s First Name</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="As it appears on the card">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Cardholders Last Name</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="As it appears on the card">
                                                            </div>
                                                        </div>
                                                        <div class="form-row billing-account">
                                                            <div class="form-group col-md-12">
                                                                <label class="billing" for="">Billing Address</label>
                                                            </div>
                                                            <div class="form-group col-md-12 primary-account">
                                                                <span>
                                                                    <label class="check-container">
                                                                        <input type="checkbox">
                                                                        <span class="checked-checkmark"></span>
                                                                        Same as primary account
                                                                    </label>
                                                                </span>
                                                            </div>  
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                    <label for="">Country</label>
                                                                    <select class="form-control form-control-sm" id="Contry">
                                                                        <option>Select One</option>
                                                                        <option>US</option>
                                                                        <option>India</option>
                                                                        <option>France</option>
                                                                    </select>
                                                                </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">Address 1</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="123 North Main Street">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="">Address 2 (optional)</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="">City</label>
                                                                <input type="text" class="form-control form-control-sm " placeholder="Charlottesville">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3 col-6">
                                                                <label for="">State</label>
                                                                <select class="form-control form-control-sm" id="Country">
                                                                    <option>Select One</option>
                                                                    <option>AL</option>
                                                                    <option>AK</option>
                                                                    <option>AZ</option>
                                                                    <option>CA</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3 col-6">
                                                                <label for="">Zip</label>
                                                                <input type="text" class="form-control form-control-sm" placeholder="19031">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="form-row">
                                                    <div class="alert alert-primary col-md-12 details" role="alert">
                                                        <h3>What Happens Now? </h3>
                                                        <p>On the next page you can review your final details.</p>
                                                        <p>We will not bill you until you confirm the order on the next page.</p>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
								<div class="card">
                                    <div class="card-header" id="headingFive">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                             Electronic Check
                           </button>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby=" headingFive" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <section class="debit-card">
                                                <div class="card-details">
                                                    <p class="echeck">Help keep costs down for all students! E-Check users are automatically entered into a monthly drawing for a $500 scholarship!</p>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Name of Bank<i class="fa fa-question-circle"></i></label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Bank Routing Number</label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 col-lg-6 col-6">
                                                            <label for="">Checking Account Number</label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-6 col-lg-6 col-6">
                                                            <label for="">Retype Account Number</label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Account Holder's First Name</label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Account Holder’s Last Name</label>
                                                            <input type="text" class="form-control form-control-sm " placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    <p class="echeck">Checking account only: Checks drawn from a savings or credit card account will decline and result in a $35 return fee.</p>
                                                </div>
                                                <div class="form-row">
                                                    <div class="alert alert-primary col-md-12 details" role="alert">
                                                        <h3>What Happens Now? </h3>
                                                        <p>On the next page you can review your final details.</p>
                                                        <p>We will not bill you until you confirm the order on the next page.</p>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                  </div>
               </div>
            </div>
            <div class="button-section">
               <button type="button" class="btn previous">PREVIOUS</button>
               <button type="button" class="btn save-continue">SAVE & CONTINUE</button>
            </div>
         </div>
         <div class="col-md-3 pricing">
            <div class="pricing-summary-section">
                <div class="summary-wrap">
                  Pricing Summary
                </div>
               <div class="summary-details-wrap">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="traveller-count-wrap">
                           <p>Traveler 1- Adult</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="summary-details-wrap">
                    <div class="row">
                     <div class="col-md-12">
                        <div class="traveller-count-wrap">
                           <p>Traveler 1- Adult</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                                 <p class="foot-note-text">Washington DC #323432</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                        <div class="price-details-wrap">
                           <div class="row">
                              <div class="col-md-8">
                                 <p>Program Price</p>
                              </div>
                              <div class="col-md-4 cost">
                                 <p>$848</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
                <div class="remaining-balance-desktop">
                <div class="row">
            <div class="col-md-12">
                <div class="remaining-balance-wrapper">
                <div class="row">
                <div class="col-md-6 price-list">
                    Total Price
                </div>
                <div class="col-md-6 cost">
                    $1950.00
                </div>
                </div>
                </div>
            
            <div class="remaining-balance-wrapper">
               <div class="row">
               <div class="col-md-6 price-list">
                    Payment Today
               </div>
               <div class="col-md-6 cost">
                  $1950.00
               </div>
            </div>
            </div>
            <div class="remaining-balance-wrapper">
               <div class="row">
               <div class="col-md-6 price-list total-list">
                  Remaining Balance
               </div>
               <div class="col-md-6 cost total-balance">
                $1950.00
               </div>
            </div>
            </div>
            
            
         
         </div>
      
      </div>
            </div>
            
      
            </div>
         </div>
      </div>
   </div>
</section>


<section class="m-payment-mobile d-sm-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 payment-header">
                    <h2>Payment Method</h2>
                </div>
            </div>
            <div class="row payment-header-container">
                <div class="col-12 payments-switch">
                    <div class="payment-tab">
                        <div class="tab-switching">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" href="#buzz1" role="tab" data-toggle="tab" aria-selected="false">Electronic Check</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#profile1" role="tab" data-toggle="tab" aria-selected="true">Debit Card</a>
                                </li>

                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content content-tab">
                            <div role="tabpanel" class="tab-pane fade in active show" id="profile1">
                                <section class="debit-card">
                                    <div class="card-details">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span class="card-image">
                                                         <img src="../assets/images/credit-Card.png" alt="">
                                                      </span>
                                                </div>
                                                <div class="form-group col-md-6 d-none">
                                                    <label for="">Billing Address</label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Card Type</label>
                                                    <select class="form-control form-control-sm" id="card">
                                                        <option>Select One</option>
                                                        <option>Visa</option>
                                                        <option>Master</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Card Number</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3 col-6">
                                                    <label for="">Expiration Date</label>
                                                    <input type="text" class="form-control form-control-sm card-payment-dob" name="bday">
                                                </div>
                                                <div class="form-group col-md-3 col-6">
                                                    <label for="" class="circle">CVV Code <i class="fa fa-question-circle"></i></label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="123">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Cardholder’s First Name</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="As it appears on the card">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Cardholders Last Name</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="As it appears on the card">
                                                </div>
                                            </div>
                                            <div class="form-row billing-account">
                                                <div class="form-group col-md-12">
                                                    <label class="billing" for="">Billing Address</label>
                                                </div>
                                                <div class="form-group col-md-12 primary-account">
                                                    <span>
                                                        <label class="check-container">
                                                            <input type="checkbox">
                                                            <span class="checked-checkmark"></span>
                                                            Same as primary account
                                                        </label>
                                                    </span>
                                                </div>  
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Country</label>
                                                    <select class="form-control form-control-sm" id="Contry">
                                                        <option>Select One</option>
                                                        <option>US</option>
                                                        <option>India</option>
                                                        <option>France</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Address 1</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="123 North Main Street">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Address 2 (optional)</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">City</label>
                                                    <input type="text" class="form-control form-control-sm " placeholder="Charlottesville">
                                                </div>
                                                <div class="form-group col-md-3 col-6">
                                                    <label for="">State</label>
                                                    <select class="form-control form-control-sm" id="Country">
                                                        <option>Select One</option>
                                                        <option>AL</option>
                                                        <option>AK</option>
                                                        <option>AZ</option>
                                                        <option>CA</option>
                                                    </select>
                                                    
                                                </div>
                                                <div class="form-group col-md-3 col-6">
                                                    <label for="">Zip</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="19031">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-row alert-block">
                                        <div class="alert alert-primary col-md-12 details" role="alert">
                                            <h3>What Happens Now? </h3>
                                            <p>On the next page you can review your final details.</p>
                                            <p>We will not bill you until you confirm the order on the next page.</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="buzz1">
                                <section class="debit-card">
                                    <div class="card-details">
                                        <p class="echeck"><i>Help keep costs down for all students! E-Check users are automatically entered into a monthly drawing for a $500 scholarship!</i></p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Name of Bank<i class="fa fa-question-circle"></i></label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="circle">Bank Routing Number</label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3 col-6">
                                                <label for="">Checking Account Number</label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                            <div class="form-group col-md-3 col-6">
                                                <label for="">Retype Account Number</label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="">Account Holder's First Name</label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Account Holder’s Last Name</label>
                                                <input type="text" class="form-control form-control-sm " placeholder="">
                                            </div>
                                        </div>
                                        <p class="">Checking account only: Checks drawn from a savings or credit card account will decline and result in a $35 return fee.</p>
                                    </div>
                                    <div class="form-row alert-block">
                                        <div class="alert alert-primary col-md-12 details" role="alert">
                                            <h3>What Happens Now? </h3>
                                            <p>On the next page you can review your final details.</p>
                                            <p>We will not bill you until you confirm the order on the next page.</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<section class="mob-buttons-section">
		<button type="button" class="btn btn-primary mob-back-btn">Back</button>
		<button type="button" class="btn btn-primary mob-next-btn">Next</button>
	</section>
    </section>



<script>
$(document).ready(function(){
  $(".promotional-code").click(function(){
   $(this).siblings(".promotional-code").show();
    $(this).hide();  
  });
});

$( function() {
    $(".card-payment-dob*").datepicker({
      changeMonth: true,
      changeYear: true,
	  showOn: "both", 
	  buttonText: '<i class="fas fa-calendar-alt"></i>'
    });
  } );
</script>
  
<script src="../js/reg-step-1-forms.js"></script>
	
<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>