<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>
<?php include '../inc/_mobile-step-wizard.php';?> 

<section class="m-congratulation">
    <div class="container top-container">
      <div class="row">
        <div class="col-md-12 c-title">
            Your Registration Was Successful
        </div>
      </div> 

      <div class="row">
        
          <div class="congrats-icon">
            <i class="fa fa-check-circle fa-4x" aria-hidden="true"></i>
          </div>
          <div class="congrats-wrap">
            <div class="congrats-heading">Congratulations!</div>
            <div class="congrats-text">
              You are registered for the [PROGRAM NAME] program.
            </div>
          </div>
        
      </div>
        <hr class="d-none d-md-block">
      <div class="row image-section">
        <div class="col-md-6 col-12 image-div phone-img">
            <img src="../assets/images/WSApp11.png" class="img-fluid left-image d-none d-md-block" alt="Responsive image">
        </div>
        <div class="col-md-6 col-12 image-div img-padding-zero">
          <div class="right-panel-content">
            <div class="right-panel-title">
              <span>What’s Next?</span>
            </div>
            <img src="../assets/images/travelar-img.png" class="img-fluid d-none d-md-block" alt="Responsive image">
              <p class="next-details">
                We are as excited about your upcoming program as you are! Take a few minutes to visit your Customer Portal where you can prepare even further for your adventure!
              </p>

              <img src="../assets/images/WSApp11.png" class="img-fluid left-image d-md-none" alt="Responsive image">

              <div class="text-center visit-btn">
                <button class="btn btn-primary congrats-button">VISIT YOUR CUSTOMER PORTAL</button>
              </div>  
            </div>
          </div>
        </div> 
      
      <!--Accordian start-->

      <div class="row">
        <div class="col-md-12 accordion-div">
          <div id="accordion" class="accordion">
            <div class="card mb-0">
              <div class="card-header collapsed accordion-card" data-toggle="collapse" href="#collapseOne">
                <a class="card-title">
                  <span id="reg-detail">Registration Details</span><span class="float-right">
                      <span id="show-details">Show details <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                      <span id="hide-udetails">Hide details <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </span>
                </a>
              </div>
              <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" >
                
              <!--accordion form-->



              <div class="container m-confirmation-details">
                <div class="row">
                    <div class="col-md-12 fa-Icon">
                        <div class="text-right">
                            <i class="fa fa-envelope" aria-hidden="true"></i><span class="icons">&nbsp;Email</span>&emsp;
                            <i class="fa fa-download" aria-hidden="true"></i><span class="icons">&nbsp;Download</span>&emsp;
                            <i class="fa fa-print" aria-hidden="true"></i><span class="icons">&nbsp;Print</span>
                        </div>
                    </div>
                </div>
    <div class="confirmation">
        <div class="confirmation-block">
            <div class="row confirmation-traveller-details">
                <div class="col-12 col-md-8 traveller-details-left confirmation-p-0">
                    <div class="traveller">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Jane Doe - Traveler 1</h4>
                            </div>
                            <div class="float-right">
                                <button type="button" class="reg-btn">Registered</button>         
                            </div>
                        </div>
                        <div class="row traveller-block m-0">
                            <div class="col-12 col-md-5">
                                <div class="row traveller-details">
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Jane Doe</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Gender</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Female</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">DOB</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>12/21/1971</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Phone</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7890</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Cell</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7898</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>janeD@email.com</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Country</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>USA</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 traveller-address">
                                <div class="row address-row">
                                    <div class="col-10 col-md-9 address-block">
                                        <h5>Washington D.C. #323432</h5>
                                        <p>Rick Williams - Flint Hill Elementary Aug 10-15, 2019</p>
                                    </div>
                                    <div class="col-2 col-md-3 address-price">
                                        <span>$589.00</span>
                                    </div>
                                </div>
                                <div class="row address-row">
                                    <div class="col-9 col-md-9 address-block">
                                        <h5>Full Refund Program</h5>
                                        <p>Cancel For Any Reason</p>
                                    </div>
                                    <div class="col-3 col-md-3 address-price">
                                            <span>$115.00</span>
                                    </div>
                                </div>
                                <div class="row address-row">
                                    <div class="col-10 col-md-9 address-block">
                                        <h5>Adult Double Room</h5>
                                        <p>Adult’s receive double room accommodations</p>
                                    </div>
                                    <div class="col-2 col-md-3 address-price">
                                        <span>$117.00</span>
                                    </div>
                                </div>
                                <div class="row address-row">
                                    <div class="col-10 col-md-9 address-block">
                                        <h5>Promo Code</h5>
                                        <p>Early Traveler Discount</p>
                                    </div>
                                    <div class="col-2 col-md-3 address-price">
                                        <span>$-50.00</span>
                                    </div>
                                </div>
                        <!--total amount-->

                        <div class="row address-row d-md-none">
                                    <div class="col-8 col-md-9 address-block">
                                      <!--  <h5>Promo Code</h5>
                                        <p>Early Traveler Discount</p>-->
                                    </div>
                                    <div class="col-4 col-md-3 address-price">
                                        <span>Total: <b>$916.00</b></span>
                                    </div>
                                </div>

                        <!--end-->
                               </div>
                        </div>
                    </div>
                    <div class="traveller">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Jennie Doe - Traveler 2</h4>
                            </div>
                            <div class="float-right">
                                <button type="button" class="onWait-btn">On Wait List</button>
                            </div>
                        </div>
                        <div class="row traveller-block m-0">
                            <div class="col-md-5">
                                <div class="row traveller-details">
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Jennie Doe</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Gender</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Female</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">DOB</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>12/21/1971</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Phone</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7890</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Cell</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7898</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>janeD@email.com</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Country</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>USA</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 traveller-address">
                                <div class="row address-row">
                                    <div class="col-10 col-md-9 address-block">
                                        <h5>Washington D.C. #323432</h5>
                                        <p>Rick Williams - Flint Hill Elementary Aug 10-15, 2019</p>
                                    </div>
                                    <div class="col-2 col-md-3 address-price">
                                        <span>
                                                $589.00
                                            </span>
                                    </div>
                                </div>
                                <div class="row address-row">
                                    <div class="col-9 col-md-9 address-block">
                                        <h5>Full Refund Program</h5>
                                        <p>Cancel For Any Reason</p>
                                    </div>
                                    <div class="col-3 col-md-3 address-price">
                                            <span>$115.00</span>
                                    </div>
                                </div>
                                <div class="row address-row">
                                    <div class="col-10 col-md-9 address-block">
                                        <h5>Promo Code</h5>
                                        <p>Early Traveler Discount</p>
                                    </div>
                                    <div class="col-2 col-md-3 address-price">
                                        <span>
                                                $-50.00
                                            </span>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="traveller traveller-parent">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Parent or Guardian</h4>
                            </div>
                            <div class="float-right">
                        </div>
                        </div>
                        <div class="row traveller-block m-0">
                            <div class="col-md-5">
                                <div class="row traveller-details">
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Jane Doe</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Gender</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Female</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">DOB</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>12/21/1971</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <label for="">Phone</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7890</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Cell</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7898</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>janeD@email.com</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Country</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>USA</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Address</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>123 North Main Street charlottesville, VA 19031</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 traveller-address">
                                <div class="row relation-row">
                                    <div class="col-9 col-md-9">
                                        <p>Relationship with Traveler 1</p>
                                    </div>
                                    <div class="col-3 col-md-3 parent">
                                        <span>
                                                Parent
                                            </span>
                                    </div>
                                </div>
                                <div class="row relation-row">
                                    <div class="col-9 col-md-9">
                                        <p>Relationship with Traveler 2</p>
                                    </div>
                                    <div class="col-3 col-md-3 parent">
                                        <span>
                                                Parent
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="traveller">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Emergency Contact</h4>
                            </div>
                            <div class="float-right">
                            </div>
                        </div>
                        <div class="row traveller-block m-0">
                            <div class="col-md-5">
                                <div class="row traveller-details">
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Name</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>Jim Write</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Email</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>jwrite@email.com</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                    <div class="col-6 col-md-4 details">
                                        <label for="">Mobile</label>
                                    </div>
                                    <div class="col-6 col-md-8 details">
                                        <label>+1(123) 456-7890</label> <input type="text" placeholder="Jane Doe" class="d-none">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 traveller-address">
                                <div class="row relation-row">
                                    <div class="col-9 col-md-9">
                                        <p>Relationship with Traveler 1</p>
                                    </div>
                                    <div class="col-3 col-md-3 parent">
                                        <span>
                                            Friend
                                        </span>
                                    </div>
                                </div>
                                <div class="row relation-row">
                                    <div class="col-9 col-md-9">
                                        <p>Relationship with Traveler 2</p>
                                    </div>
                                    <div class="col-3 col-md-3 parent">
                                        <span>
                                            Friend
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 traveller-details-right confirmation-p-0 ">
                    <div class="traveller-payment-details">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Payment
                                    <span>Paid by Debit Card</span>
                                </h4>
                            </div>
                        </div>

                        <div class="payment-details">
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Debit Card</div>
                                <div class="float-right card-right">VISA **** **** **** 1234</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Expiration</div>
                                <div class="float-right card-right">11/21/2021</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Account Holders Name</div>
                                <div class="float-right card-right">Jane Doe</div>
                            </div>
                            <div class="row-payment clearfix payment-address">
                                <div class="float-left card-left">Billing Address</div>
                                <div class="float-right card-right">123 North Main Street Charlottesville, VA 22903</div>
                            </div>
                        </div>
                    </div>
                    <div class="traveller-payment-details">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Payment Plan</h4>
                            </div>
                        </div>
                        <div class="payment-plan">
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Plan</div>
                                <div class="float-right card-right">Automated Payment Deductions</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Frequency</div>
                                <div class="float-right card-right">Monthly on the 6th</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">First Payment Due</div>
                                <div class="float-right card-right">Dec. 14th, 2019</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">6 Monthly Payments Of</div>
                                <div class="float-right card-right">$149.00</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Final Payment Due</div>
                                <div class="float-right card-right">Dec. 1st, 2020</div>
                            </div>
                            <div class="row-payment clearfix">
                                <div class="float-left card-left">Final Payment Of</div>
                                <div class="float-right card-right">$129.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-total-price">
                        <div class="total-price-details">
                        <div class="row-total clearfix">
                            <div class="float-left">Total Price</div>
                            <div class="float-right">$1,945.00</div>
                        </div>
                        <div class="row-total clearfix">
                            <div class="float-left">Payment Today</div>
                            <div class="float-right">$249.00</div>
                        </div>
                        <div class="row-total clearfix total-price">
                            <div class="float-left">Remaining Balance</div>
                            <div class="float-right">$1,696.00</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
   
</div>

            <!--form end-->
              </div>
            </div>
          </div>            
        </div>
      </div>

      <!--accordian end-->
      <div class="border reg-details-content" id="hide-details">
        <div class="row">
          <div class="col-md-12 fa-Icon">
            <div class="text-right">
              <i class="fa fa-envelope" aria-hidden="true"></i><span class="icons">Email</span>&emsp;
              <i class="fa fa-download" aria-hidden="true"></i><span class="icons">Download</span>&emsp;
              <i class="fa fa-print" aria-hidden="true"></i><span class="icons">Print</span>
            </div>
          </div>
        </div>

        <!--user-->
        <div class="row bottom-last-space">
          <div class="col-md-8 col-12 left-reg-detail">
            <div class="action-btn"> 
                <i class="fa fa-user faIcon"></i><span class="usr">Jane Doe - Traveler 1</span>
                <button type="button" class="reg-btn">Registered</button>
            </div>
            <div class="action-btn"> 
                <i class="fa fa-user"></i><span class="usr">Jannie Doe - Traveler 2</span>
          
              <button type="button" class="onWait-btn">On Wait List</button>
            </div>
          </div>

          <div class="col-md-4 col-12 right-reg-detail">
            <div class="payment-detail ">
              <div class="payment-row clearfix">
                <div class="float-left">Total Price</div>
                <div class="float-right">$1945.00</div>
              </div>
              <div class="payment-row clearfix">
                <div class="float-left">Payment Today</div>
                <div class="float-right">$249.00</div>
              </div>
              <div class="payment-row clearfix">
                <div class="float-left"><b>Remaining balance</b></div>
                <div class="float-right"><b>$16,96.00</b></div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    
</div>
        <!--button section-->
        
    <div class="container bottom-container">
      <div class="row">
        <div class="col-md-12">
          <div class="bottom-act">
            <button class="btn btn-primary float-right congrats-button">CONTINUE TO CUSTOMER PORTAL</button>
          </div>
        </div>
      </div>
    </div>

</section>
<script>
$(document).ready(function(){
    $("#hide-udetails").show();
    $("#show-details").hide();
    $("#show-details").click(function(){
    $("#hide-udetails").show();
    $("#hide-details").hide(); 
    $("#show-details").hide(); 
  });
  $("#hide-udetails").click(function(){
    $("#hide-udetails").hide();
    $("#show-details").show();
    $("#hide-details").show();  
  });
});
</script>
<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>



