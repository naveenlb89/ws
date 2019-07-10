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
                  <h2>Payment Options</h2>
               </div>
               <div class="accordion-wrapper">
                  <div id="accordion">
                     <div class="card">
                        <div class="card-header" id="payInFull">
                           <button class="btn btn-link" data-toggle="collapse" data-target="#payInFullCollapse" aria-expanded="true" aria-controls="payInFullCollapse">
                           Pay In Full
                           </button>
                        </div>
                        <div id="payInFullCollapse" class="collapse show" aria-labelledby="payInFull" data-parent="#accordion">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-12">
                                    <p>We make paying for your program easy and hazzle free. Pay the full amount today</p>
                                    <div class="price">
                                       <span>Total Price</span>
                                       <span class="dollor-price">$1,945.00</span>
                                    </div>
                                    <div class="add-promo-code promotional-code">
                                       <i class="fa fa-plus" aria-hidden="true"></i><span class="promo-add">Add promotional code</span>
                                    </div>
                                    <div class="promo-code promotional-code">
                                       <div class="promo-block">Promotional Code</div>                            
                                       <div class="promo-block-submit">
                                          <div class="field" id="#">
                                             <div class="promo-submit">
                                                <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                                <span class="promo-num">Save 100</span>
                                             </div>
                                             <button type="button" id="#">APPLY</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="AutoPayDeduction">
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#autoPayDeductCollapse"  aria-expanded="false" aria-controls="autoPayDeductCollapse">
                           Automated Payment Deductions
                           </button>
                        </div>
                        <div id="autoPayDeductCollapse" class="collapse" aria-labelledby="AutoPayDeduction" data-parent="#accordion">
                           <div class="card-body">
                              <p>Avoid missing payments and late fees when you choose Automated Payment Deductions. Monthly payments will be automatically deducted from your checking account or debit card, saving you time and money.</p>
                             
                              <div class="add-promo-code promotional-code">
                                 <i class="fa fa-plus" aria-hidden="true"></i><span class="promo-add">Add promotional code</span> 
                              </div>
                              <div class="promo-code promotional-code">
                                 <div class="promo-block">Promotional Code</div>
                                 <div class="promo-block-submit">
                                    <div class="field" id="#">
                                       <div class="promo-submit">
                                          <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                          <span class="promo-num">Save 100</span>
                                       </div>
                                       <button type="button" id="#">APPLY</button>
                                    </div>
                                 </div>
                              </div>
                              <span class="promo-deposit">
                                 <span class="chooseDepositAmount">Choose a deposit amount</span>
                                 <span class="min-deposit">(Minimum deposit of $49 for each traveler due today)</span>
                              </span>
                              <span class="pay-more">Pay more to lower monthly payments</span>
                              <div class="row">
                                 <div class="col-md-9">
                                    <div class="slidecontainer">
                                       <input type="range" min="1" max="30" step="1" value="10" unit="❤"/>
                                       <!--<input type="range" min="1" max="100" value="20" class="slider" id="myRange">-->
                     
                                    </div>
                                 </div>
                                 <div class="col-md-3 intial-payment">
                                    <p>Intial Payment</p>
                                    <div class="initial-payment-inner">
                                       <span class="dolar-mark"><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                       <span class="promo-num">100</span>  
                                    </div>
                                 </div>
                              </div>
                              <span class="chooseDepositAmount payment-schedule-header">Review your payment schedule</span>
                              <div class="payment-schedule">
                                 <div class="row">
                                    <div class="col-md-9">
                                    <span class="blue-box-text"> Your Intial Payment</span>
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $98.00
                                    </div>
                                    <div class="col-md-9">
                                    <span class="this-amount"> 6 monthly payments of this amount</span> 
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $199.00
                                    </div>
                                    <div class="col-md-9">
                                    <span class="blue-box-text"> One FINAL payment due 08/18/2020</span>
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $338.00
                                    </div>
                                 </div>
                              </div>
                              <span class="other-payment"><a href="#">Show Other Payment Options</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">                                        
                           <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Manual Payment Plan
                           </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <p>Make monthly payments after receiving an electronic invoice sent to the email address below. A $6.00 processing fee will be added to each invoice.</p>
							         <div class="row emails-paper">
								         <div class="col-md-6 radio-button-wrap">
									         <p>How would you like to recieve your invoices?</p>
									         <form action="">
                                       <div class="custom-control custom-radio">
                                          <input type="radio" id="customRadio1" name="emailOrPaper" class="custom-control-input" checked="checked" value="email">
                                          <label class="custom-control-label" for="customRadio1">Email</label>
                                       </div>

										         <div class="custom-control custom-radio">
                                          <input type="radio" id="customRadio2" name="emailOrPaper" class="custom-control-input" value="paper">
                                          <label class="custom-control-label" for="customRadio2">Paper</label>
                                       </div>
                                    </form>
								         </div>
								         <div class="col-md-6 email-text-container">
									         <form action="">
                                       <div class="form-group">
                                          <label>Email <i class="fa fa-info-circle" aria-hidden="true" data-placement="top" data-toggle="tooltip" title="To ensure that you receive current email invoices, please add payments@worldstrides.com to your permitted email sender list."></i></label>
                                          <input type="text" class="form-control form-control-sm" placeholder="Your email@email.com" name="text1">
                                          <span class="thanks-text"><i class="fa fa-leaf" aria-hidden="true"></i> Thanks for saving paper!</span>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="col-md-6 address-text-container">
                                    <form action="">
                                       <div class="row">
                                          <div class="col-12"><label>Billing Address</label></div>
                                          <div class="col-1 paperBillingAddress"><input type="checkbox" ></div>
                                          <div class="col-9 addressDetails">    
                                             <span><strong>Same as primary account</strong></span><br>
                                             <span>123 North Main Street</span><br>
                                             <span>Charlottesville, VA 19302</span>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
							         </div>
							         <div class="add-promo-code promotional-code">
                                 <i class="fa fa-plus" aria-hidden="true"></i><span class="promo-add">Add promotional code</span>
                              </div>
                              <div class="promo-code promotional-code">
                                 <div class="promo-block">Promotional Code</div>                            
                                 <div class="promo-block-submit">
                                    <div class="field" id="#">
                                       <div class="promo-submit">
                                          <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                          <span class="promo-num">Save 100</span>
                                       </div>
                                       <button type="button" id="#">APPLY</button>
                                    </div>
                                 </div>
                              </div>
								      <span class="promo-deposit">
                                 <span class="chooseDepositAmount">Choose a deposit amount</span>
                                 <span class="min-deposit">
                                    <span class="maximum-deposit">(Minimum deposit of $49 for each traveler due today)</span>
                                 </span>
                              </span>
                              <span class="pay-more">Pay more to lower monthly payments</span>
                              <div class="row">
                                 <div class="col-md-9">
                                    <div class="slidecontainer">
									            <input type="range" min="1" max="30" step="1" value="10" unit="❤"/>
                                       <!--<input type="range" min="1" max="100" value="20" class="slider" id="myRange">-->
                                    </div>
                                 </div>
                                 <div class="col-md-3 intial-payment">
                                    <p>Intial Payment</p>
                                    <div class="initial-payment-inner">
                                       <span class="dolar-mark"><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                       <span class="promo-num">100</span>  
                                    </div>
                                 </div>
                              </div>
                              <span class="chooseDepositAmount payment-schedule-header">Review your payment schedule</span>
					               <div class="payment-schedule">
                                 <div class="row">
                                    <div class="col-md-9">
                                      <span class="blue-box-text"> Your Intial Payment</span>
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $98.00
                                    </div>
                                    <div class="col-md-9">
                                       <span class="this-amount"> 6 monthly payments of this amount</span>
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $199.00
                                    </div>
                                    <div class="col-md-9">
                                      <span class="blue-box-text"> One FINAL payment due 08/18/2020</span>
                                    </div>
                                    <div class="col-md-3 text-right">
                                       $338.00
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="button-section">
               <button type="button" class="btn previous">PREVIOUS</button>
               <button type="button" class="btn save-continue" id="savePayment">SAVE & CONTINUE</button>
            </div>
         </div>
         <div class="col-md-3 paymentPricingSummary">
            <div class="pricing-summary-section">
               <h2 class="summary-wrap">
                  Pricing Summary
               </h2>
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
                                 <strong>Remaining Balance</strong>
                              </div>
                              <div class="col-md-6 cost total-balance">
                                 <strong>$1950.00</strong>
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
            <h2>Payment options</h2>
         </div>
      </div>
      
      <div class="row payment-header-container">
         <div class="col-12">
            <div class="payment-tab">
               <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Pay In Full</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Pay In Monthly</a>
                  </li>
               </ul>

               <!-- Tab panes -->
               <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active show" id="profile">
                     <p>
                        <i>We make paying for your program easy and hazzle free. Pay the full amount today.</i>
                     </p>
                     <div class="row total-wrapper-mobile">
                        <div class="col-12">
                           <div class="price-mobile">
                              <span><strong>Total Price</strong></span>
                              <span class="dollor-price-mobile">$1,945.00</span>
                           </div>
            
                           <div class="row promo-container">
                              <div class="col-12">          
                                 <div class="add-promo-code promotional-code" style="">
                                    <i class="fa fa-plus" aria-hidden="true"></i>Add promotional code
                                 </div>
                                 <div class="promo-code promotional-code" style="display: none;">
                                    <div class="promo-block">Promotional Code</div>                            
                                    <div class="promo-block-submit">
                                       <div class="field" id="#">
                                          <div class="promo-submit">
                                             <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                             <span class="promo-num">Save 100</span>
                                          </div>
                                          <button type="button" id="#">APPLY</button>
                                       </div>
                                    </div>
                                 </div>            
                              </div>
                           </div>
			                  <div class="row">
                              <div class="col-12 space-container">
                              
                              </div>
			                  </div>
                           <div class="row pricing-summary-mobile">
                              <div class="col-12 pricing-summary-mobile-inner">
                                 <div id="accordion">
                                    <div class="card">
                                       <div class="card-header" id="headingOne">
                                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <span class="pricing-summary">Pricing Summary</span> <span class="float-right show-more">Show More <i class="fas fa-caret-right"></i></span> <span class="float-right show-less">Show Less <i class="fas fa-caret-down"></i></span>
                                          </button>
                                       </div>
                                       <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                          <div class="card-body">
                                             <div class="summary-details-wrap">
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="traveller-count-wrap">
                                                         <p>Traveler 2- Student</p>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="summary-details-wrap">
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="traveller-count-wrap">
                                                         <p>Traveler 2- Student</p>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                               <p class="foot-note-text">Washington DC #323432</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="price-details-wrap">
                                                         <div class="row">
                                                            <div class="col-8">
                                                               <p>Program Price</p>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                               <p>$848</p>
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
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
		   
                  <div role="tabpanel" class="tab-pane fade" id="buzz">
                     <div class="row">
				            <div class="col-12 pay-in-mothly-container">
							      <span class="automated-mobile-text"><strong>Automated Payment Deductions</strong></span>
                              <p><i>Avoid missing payments and late fees when you choose Automated Payment Deductions. Monthly payments will be automatically deducted from your checking account or debit card, saving you time and money.</i></p>
                              <div class="add-promo-code promotional-code">
                                 <i class="fa fa-plus" aria-hidden="true"></i>Add promotional code
                              </div>
                              <div class="promo-code promotional-code">
                                 <div class="promo-block">Promotional Code</div>									   
                                 <div class="promo-block-submit">
                                    <div class="field" id="#">
                                       <div class="promo-submit">
                                          <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                          <span class="promo-num">Save 100</span>
                                       </div>
                                       <button type="button" id="#">APPLY</button>
                                    </div>
                                 </div>
                              </div>
                              <span class="promo-deposit">
                                 <span class="chooseDepositAmount">Choose a deposit amount</span>
                                 <span class="min-deposit">
                                    <span class="maximum-deposit">(Minimum deposit of $49 for each traveler due today)</span>
                                 </span>
                              </span>
                              <span class="pay-more">Pay more to lower monthly payments</span>
						
						            <div class="initial-payment-inner float-right">
                                 <span class="dolar-mark"><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                 <span class="promo-num">100</span>  
                              </div>
                              <div class="slidecontainer">
                                       <input type="range" min="1" max="30" step="1" value="10" unit="❤"/>   
                                 <!-- <input type="range" min="1" max="100" value="20" class="slider" id="myRange">-->
                              </div>
						
					   
					               <div class="row total-payment-today-mobile">
                                 <div class="col-8">Total Payment today</div>
                                 <div class="col-4">
                                    <strong class="float-right amount">$255.00</strong>
                                 </div>
						            </div>
                              <span class="chooseDepositAmount payment-schedule-header">Review your payment schedule</span>
                              <div class="payment-schedule">
                                 <div class="row">
                                    <div class="col-9">
                                      <span class="blue-box-text"> Your Intial Payment</span>
                                    </div>
                                    <div class="col-3 text-right">
                                       $98.00
                                    </div>
                                    <div class="col-9">
                                      <span> 6 monthly payments of this amount</span>
                                    </div>
                                    <div class="col-3 text-right">
                                       $199.00
                                    </div>
                                    <div class="col-9">
                                      <span class="blue-box-text"> One FINAL payment due 08/18/2020</span>
                                    </div>
                                    <div class="col-3 text-right">
                                       $338.00
                                    </div>
                                 </div>
                              </div>
                              <span class="other-payment"><a href="#">Show Other payment options</a></span>
							  
							         <div class="pay-in-mothly-container">
								         <h2 class="automated-mobile-text">Manual Payment Plan</h2>
								         <span class="due-deposit">$49.00 deposit due today</span>
								         <p>Make monthly payments after receiving an electronic invoice sent to the email address below. A $6.00 processing fee will be added to each invoice.</p>
							         </div>
							  
							         <div class="other-payment-text">How would you like to receive your invoices?</div>
							  
                              <div class="invoice-container">
							            <div class="payment-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link  active" href="#profile1" role="tab" data-toggle="tab" aria-selected="false">Email</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" href="#buzz1" role="tab" data-toggle="tab" aria-selected="true">Paper</a>
                                       </li>           
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane fade in active show" id="profile1">
									               <form action="">
                                             <div class="form-group">
                                                <label>Email </label>
                                                <input type="text" class="form-control form-control-sm" placeholder="Your email@email.com" name="text1">
                                                <span class="thanks-text"><i class="fa fa-leaf" aria-hidden="true"></i> Thanks for saving paper!</span>
                                             </div>
                                          </form>
                                          <div class="add-promo-code promotional-code">
                                             <i class="fa fa-plus" aria-hidden="true"></i>Add promotional code
                                          </div>
	                                       <div class="promo-code promotional-code" style="display: none;">
                                             <div class="promo-block">Promotional Code</div>									   
									                  <div class="promo-block-submit">
									                     <div class="field" id="#">
											                  <div class="promo-submit">
                                                      <span class="tick-mark"><i class="fa fa-check" aria-hidden="true"></i></span>
                                                      <span class="promo-num">Save 100</span>
                                                   </div>
                                                   <button type="button" id="#">APPLY</button>
                                                </div>
                                             </div>
                                          </div>
							                     <span class="promo-deposit">
                                          <span class="chooseDepositAmount">Choose a deposit amount</span>
                                             <span class="min-deposit">
                                                <span class="maximum-deposit">(Minimum deposit of $49 for each traveler due today)</span>
                                             </span>
                                          </span>
							                     <span class="pay-more">Pay more to lower monthly payments</span>
							                     <div class="initial-payment-inner float-right">
                                             <span class="dolar-mark"><i class="fa fa-dollar" aria-hidden="true"></i></span>
                                             <span class="promo-num">100</span>  
                                          </div>
                                          <div class="slidecontainer">
                                             <input type="range" min="1" max="30" step="1" value="10" unit="❤"/>   
                                             <!-- <input type="range" min="1" max="100" value="20" class="slider" id="myRange">-->
                                          </div>				
							                     <div class="row total-payment-today-mobile">
                                             <div class="col-8">Total Payment today</div>
						                           <div class="col-4">
                                                <strong class="float-right amount">$255.00</strong>
                                             </div>
						                        </div>
						                        <span class="chooseDepositAmount payment-schedule-header">Review your payment schedule</span>
						                        <div class="payment-schedule">
                                             <div class="row">
                                                <div class="col-9">
                                                <span class="blue-box-text"> Your Intial Payment</span>
                                                </div>
                                                <div class="col-3 text-right">
                                                   $98.00
                                                </div>
                                                <div class="col-9">
                                                <span> 6 monthly payments of this amount</span>
                                                </div>
                                                <div class="col-3 text-right">
                                                   $199.00
                                                </div>
                                                <div class="col-9">
                                                <span class="blue-box-text"> One FINAL payment due 08/18/2020</span>
                                                </div>
                                                <div class="col-3 text-right">
                                                   $338.00
                                                </div>
                                             </div>
                                          </div>	
								                  <span class="other-payment"><a href="#">Show Automated Payment Plan</a></span>
                                       </div>
		   
                                       <div role="tabpanel" class="tab-pane fade" id="buzz1">					
                                          <span class="billing-address">Billing Address</span>
                                             
                                          <form action="">
                                             <div class="form-group form-check">
                                                <label class="form-check-label">
                                                   <input class="form-check-input" type="checkbox"> Same as primary Account
                                                </label>
                                             </div>
                                             <div class="billing-address-text">
                                                USA<br>
                                                123 North Main Street<br>
                                                Charlottesville, VA 19302<br>
                                             </div>
                                          </form>
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
      </div>
      <div class="row remaining-balance-mobile">
         <div class="col-12">
            <div class="row remaining-balance-wrapper">
               <div class="col-9">
                  Total Price
               </div>
               <div class="col-3 text-right">
                  $1950.00
               </div>
            </div>
            <div class="row remaining-balance-wrapper">
               <div class="col-9">
                  Payment Today
               </div>
               <div class="col-3 text-right">
                  $1950.00
               </div>
            </div>
            <div class="row remaining-balance-wrapper">
               <div class="col-9">
                  <strong>Remaining Balance</strong>
               </div>
               <div class="col-3 text-right">
                  <strong>$1950.00</strong>
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
   function defaultEmailSelection(){
      $(".address-text-container").hide();
      $(".email-text-container").show();
   }
  $(".promotional-code").click(function(){
   $(this).siblings(".promotional-code").show();
    $(this).hide();  
  });
  $(".other-payment").click(function(){
      $("#headingThree").addClass("show");
      $(".other-payment").css("display","none");
  });
  $('input:radio[name=emailOrPaper]').change(function() {
      if (this.value == 'email') {
         defaultEmailSelection();
      }
      else if (this.value == 'paper') {
         $(".address-text-container").show();
         $(".email-text-container").hide();
      }
   });
   defaultEmailSelection();
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
});

</script>

<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>