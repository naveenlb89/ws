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
						<li><span class="sw-completed"><i class="fa fa-check" aria-hidden="true"></i></span>
							<div>Payment</div>
						</li>
						<li class="option-active"><span>4</span>
							<div>Confirmation</div>
						</li>
					</ul>
					<div class="hr-line"></div>
				</div>
			</div>
		</div>
	</section>
</div>
<section class="container m-confirmation-details">
    <div class="confirmation">
        <h1>Confirm Registration Details</h1>
        <div class="confirmation-block">
            <div class="row">
                <div class="col-12 col-md-12 confirmation-alert">
                    <div class="alert alert-primary confirmation-primary">
                        <div class="row">
                            <div class="col-12 col-md-9">
                                <h6>Registration Alert!</h6>
                                <p> BY ORDERING NOW you will NOT be placed on a waiting list. Jennie Doe will be on a waiting list.
                                </p>
                            </div>
                            <div class="d-none d-md-block col-md-3">
                                <button class="btn-confirm">SUBMIT REGISTRATION</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 confirmation-alert info-alert d-md-none">
                        <div class="alert alert-info confirmation-info">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h6>Info Alert!</h6>
                                    <p> Because you have multiple travelers on this program you will see credit card transactions per traveler on your credit card statement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row confirmation-traveller-details">
                <div class="col-12 col-md-8 traveller-details-left confirmation-p-0">
                    <div class="traveller edit">
                        <form name="traveller-1"  action="" class="form-horizontal">
                            <div class="traveller-header clearfix">
                                <div class="float-left">
                                    <h4>Traveler 1 - Adult</h4>
                                </div>
                                <div class="float-right">
                                    <span class="saving"><button type="submit"><i class="fa fa-save"></i> Save</button></span>
                                    <span class="editing"><i class="fa fa-edit"></i> Edit</span>
                                </div>
                            </div>
                            <div class="row traveller-block m-0">
                                <div class="col-12 col-md-5">
                                    <div class="traveller-details">
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Name</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="Jane Doe" placeholder="" name="travellerName">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Gender</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="Female" placeholder="" name="travellerGender">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">DOB</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value="12/21/1971" placeholder="" name="travellerDOB">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Phone</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"   value="+1(123) 456-7890" placeholder="" name="travellerPhone">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Cell</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="+1(123) 456-7898" placeholder="" name="travellerCell">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Email</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="janeD@email.com" placeholder="" name="travellerEmail">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Country</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="USA" placeholder="" name="travellerCountry">
                                            </div>
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
                                            <h5>Cancel For Any Reason</h5>
                                            <p>We recommend you add this option</p>
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
                                    <div class="row address-row totals">
                                        <div class="col-12 col-md-12">
                                            <span>Total: <label class="total">$916.00</label></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="traveller edit">
                        <form name="traveller-1"  action="" class="form-horizontal">
                            <div class="traveller-header clearfix">
                                <div class="float-left">
                                    <h4>Traveler 2 - Student</h4>
                                </div>
                                <div class="float-right">
                                    <span class="saving"><button type="submit"><i class="fa fa-save"></i> Save</button></span>
                                    <span class="editing"><i class="fa fa-edit"></i> Edit</span>
                                </div>
                            </div>
                            <div class="row traveller-block m-0">
                                <div class="col-md-5">
                                    <div class="traveller-details">
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Name</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="Jennie Doe" placeholder="" name="travellerName">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Gender</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="Female" placeholder="" name="travellerGender">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">DOB</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value="4/21/2000" placeholder="" name="travellerDOB">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Phone</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"   value="+1(123) 456-7891" placeholder="" name="travellerPhone">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Cell</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="+1(123) 456-7898" placeholder="" name="travellerCell">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Email</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="jennieD@email.com" placeholder="" name="travellerEmail">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Country</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="USA" placeholder="" name="travellerCountry">
                                            </div>
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
                                            <h5>Cancel For Any Reason</h5>
                                            <p>We recommend you add this option</p>
                                        </div>
                                        <div class="col-3 col-md-3 address-price">
                                            <span>$115.00</span>
                                        </div>
                                    </div>
                                    <div class="row address-row d-md-none">
                                        <div class="col-10 col-md-9 address-block">
                                            <h5>Student Double Room</h5>
                                            <p>Student’s receive double room accommodations</p>
                                        </div>
                                        <div class="col-2 col-md-3 address-price">
                                            <span>
                                                $117.00
                                                </span>
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
                                    <div class="row address-row totals">
                                        <div class="col-md-12">
                                            <span>Total: <label class="total ">$916.00</label></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="traveller traveller-parent edit">
                        <form name="traveller-1-adult" action="">
                            <div class="traveller-header clearfix">
                                <div class="float-left ">
                                    <h4>Parent or Guardian</h4>
                                </div>
                                <div class="float-right">
                                    <span class="saving"><button type="submit"><i class="fa fa-save"></i> Save</button></span>
                                    <span class="editing"><i class="fa fa-edit"></i> Edit</span>
                                </div>
                            </div>
                            <div class="row traveller-block m-0">
                                <div class="col-md-5 ">
                                    <div class="traveller-details">
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Name</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value ="Jim Doe" placeholder="" name="travellerName">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Gender</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="Female" placeholder="" name="travellerGender">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">DOB</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value="12/21/1971" placeholder="" name="travellerDOB">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Phone</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"   value="+1(123) 456-7890" placeholder="" name="travellerPhone">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label  class="col-6 col-md-4 col-form-label">Cell</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="+1(123) 456-7890" placeholder="" name="travellerCell">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Email</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="janeD@email.com" placeholder="" name="travellerEmail">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Country</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="USA" placeholder="" name="travellerCountry">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Address</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control"  value="123 North Main Street" placeholder="" name="travellerAddress">
                                            </div>
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
                        </form>
                    </div>
                    <div class="traveller edit">
                        <form name="emergencyContact" action="">
                            <div class="traveller-header clearfix">
                                <div class="float-left ">
                                    <h4>Emergency Contact</h4>
                                </div>
                                <div class="float-right ">
                                    <span class="saving"><button type="submit"><i class="fa fa-save"></i> Save</button></span>
                                    <span class="editing"><i class="fa fa-edit"></i> Edit</span>
                                </div>
                            </div>
                            <div class="row traveller-block m-0">
                                <div class="col-md-5 ">
                                    <div class="traveller-details">

                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Name</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value ="Jim Write" placeholder="" name="EmergencyContactName">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Email</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value ="jwrite@email.com" placeholder="" name="EmergencyContactEmail">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-6 col-md-4 col-form-label">Mobile</label>
                                            <div class="col-6 col-md-8 ">
                                                <input type="text" class="form-control" value ="+1(123) 456-7890" placeholder="" name="EmergencyContactMobile">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 traveller-address">
                                    <div class="row relation-row ">
                                        <div class="col-9 col-md-9">
                                            <p>Relationship with Traveler 1</p>
                                        </div>
                                        <div class="col-3 col-md-3 parent">
                                            <span>Friend</span>
                                        </div>
                                    </div>
                                    <div class="row relation-row ">
                                        <div class="col-9 col-md-9">
                                            <p>Relationship with Traveler 2</p>
                                        </div>
                                        <div class="col-3 col-md-3 parent">
                                            <span>Friend</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-4 traveller-details-right confirmation-p-0">
                    <div class="traveller-payment-details">
                        <div class="traveller-header clearfix">
                            <div class="float-left">
                                <h4>Payment
                                    <span>Paid by Debit Card</span>
                                </h4>
                            </div>
                            <div class="float-right">
                                <span class="saving"><i class="fa fa-save"></i> Save</span>
                                <span class="editing"><i class="fa fa-edit"></i> Edit</span>
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
                            <div class="float-right">
                                <span class="saving"><i class="fa fa-save"></i> Save</span>
                                <span class="editing"><i class="fa fa-edit"></i> Edit</span>
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
                    <div class="col-md-12 confirmation-alert info-alert d-none d-md-block">
                        <div class="alert alert-info confirmation-info">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h6>Info Alert!</h6>
                                    <p> Because you have multiple travelers on this program you will see credit card transactions per traveler on your credit card statement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="confirmation-btn clearfix">
        <button class="prev-btn d-md-none float-left">BACK</button>
        <button class="prev-btn d-none d-md-block float-left">PREVIOUS</button>
        <button class="confirm-btn d-md-none float-right">CONFIRM</button>
        <button class="confirm-btn d-none d-md-block float-right">SUBMIT REGISTRATION</button>
    </div>
</section>
<?php include '../inc/_reg-footer.php';?>
<?php include '../inc/_footer.php';?>
