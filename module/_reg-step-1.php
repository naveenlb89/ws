<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>
<?php include '../inc/_mobile-step-wizard.php';?> 
	<div class="container-fluid m-step-wizard">
	<section class="option-list">
		<div class="container-fluid">
			<div class="row">
				<div class="options">
					<ul class="list-unstyled">
						<li class="option-active">
							<span>1</span>
							<div>Accounts</div>
						</li>
						<li><span>2</span>
							<div>Options</div>
						</li>
						<li><span>3</span>
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
	<div class="m-mobile-travellers-header ">
		<div class="form-head">
			<h2>Traveler 1</h2>
		</div>
	</div>
	
	
	<!-- step wizard -->
	
	<div class="container reg-account-container">
	<section class="m-trip-short-details">
		<div class="m-trip-short-details-wrapper">
			<div class="row short-details-row">
				<div class="col-lg-3 trip-img-block col-md-12">
				<img src="../assets/images/ws.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-9 col-md-12">				
					<h2>Christian Discoveries: Philadelphia, New York, Washington D.C.</h2>  
				<div class="short-details-content">
					<div class="row">
						<div class="col-md-4">
							<p><strong class="float-left">Program ID:</strong> <span class="float-right">123456</span></p>
							<p><strong class="float-left">Dates:</strong> <span class="float-right">Oct. 11th - 15th 2020</span></p>
							<p><strong class="float-left">Teacher:</strong> <span class="float-right">Wendy Write</span></p>
							<p><strong class="float-left">School:</strong> <span class="float-right">Fort Bend Elementary</span></p>
							<p class="badge badge-secondary float-left">Not My Program?</p>
						</div>
						<div class="col-md-8">
							<div class="trip-intro">
								<h3>Eight Iconic Cities from Venice to Florence to Capri to Rome</h3>
								<p> Venice, the capital of northern Italy’s Veneto region, is built on more than 100 small islands in a lagoon in the Adriatic Sea. It has no roads, just canals – including the Grand Canal thoroughfare – lined with Renaissance and Gothic palaces. The central square, Piazza San Marco, contains St. Mark’s Basilica, which is tiled with Byzantine mosaics, and the Campanile bell tower offering views of the city’s red roofs.</p>
							</div>
						</div>
					</div>	
				</div>
				</div>
			</div>
		</div>
	</section>
	<form id="travellerForm">
	<div class="travelers-forms">
		<section class="m-reg-form-block traveler-form-block traveler-1">
			<div class="row">
			<div class="form-head">
				<!--<a data-toggle="collapse" href="#traveller1-form" role="button" aria-expanded="true" aria-controls="traveller1-form">Traveller 1</a>  -->
				<h2><span>Traveler 1 </span> 
					
				</h2>
			</div>	
			<div class="col-md-12">
			
			<div class="traveller-form-wrapper collapse show" id="traveller1-form">
				<div class="form-row">
					<div class="alert alert-primary" role="alert"><i class="fas fa-exclamation-triangle"></i>
					Enter traveler’s full legal name as it would appear on a passport or government issued ID.
					</div>
				</div>
				<div class="form-row">
					
					<div class="form-group col-md-3">
						<label for="">Traveling as <i class="fa fa-info-circle" aria-hidden="true"></i></label>
						<select class="form-control form-control-lg travelingAs" id="travellingas" name="tavellingAs">
						<option value="">Select One</option>
						<option value="student">Student</option>
						<option value="adult">Adult</option>
						<option value="chaperone">Chaperone</option>
						<option value="programleader">Program Leader</option>
						</select>
					</div>
					<div class="form-group col-md-3 current-grade hide">
						<label for="">Current Grade/Year in school <i class="fa fa-info-circle" aria-hidden="true"></i></label>
						<select class="form-control form-control-lg" aria-invalid="false">
						<option>Grade 11</option>
						<option>Grade 10</option>
						<option>Grade 9</option>
						</select>
					</div>
					<div class="form-group col-md-3 co-code hide">
						<label for="">Chaperone Code</label>
						<input type="text" class="form-control form-control-lg " placeholder="" name="firstnameTraveller">
					</div>
					<div class="form-group col-md-3 pl-code hide">
						<label for="">Program Leader Code</label>
						<input type="text" class="form-control form-control-lg " placeholder="" name="firstnameTraveller">
					</div>
					
				
					
					<div class="form-group col-md-3">
						<label for="">Country</label>
						<select class="form-control form-control-lg" id="" name="country" aria-invalid="false">
								<option>US</option>
								<option>France</option>
								<option>UK</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Traveler 1 First Name</label>
						<input type="text" class="form-control form-control-lg " placeholder="" name="firstnameTraveller">
					</div>
					<div class="form-group col-md-3">
						<label for="">Middle Name (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
					<div class="form-group col-md-3">
						<label for="">Traveler 1 Last Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameTraveller">
					</div>
					
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="form-row">
					<div class="form-group col-md-3">
							<label for="inputEmail4">Traveler 1 Email Address (optional)</label>
							<input type="email" class="form-control form-control-lg" placeholder="" id="travelerEmailAddress">
					</div>
					<div class="form-group col-md-3">
						<label>Retype Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailTraveler">
					</div>
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Gender</label>
								<select class="form-control form-control-lg" id="gender" name="gender" aria-invalid="false">
								<option>Female</option>
								<option>Male</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6 date-field">
								<label for="">Date of Birth</label>
								<input type="text" class="form-control form-control-lg dob" name="bday" >
							</div>
						</div>
					</div>
				</div> 
				<div class="form-row address-details hide">
					<div class="form-group col-md-6">
						<label>Traveler 1 Address</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
					<div class="form-group col-md-6">
						<label>Address 2 (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
				</div>
				<div class="form-row address-details hide">
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>City</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="cityGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label>State</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
								<option>VA</option>
								<option>Florida</option>
								<option>Texas</option>
								<option>New York</option>
								</select>
							</div>
							
							<div class="form-group col-md-3 col-6">
								<label>Zip</label>
								<input type="numeric" class="form-control form-control-lg" placeholder="" name="zipResponsible">
							</div>
							
						</div>
					</div>
					<div class="form-group col-md-6">
						<div class="form-row phone-details">
							<div class="form-group col-md-3 col-6">
								<label for="">Country Code</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
									<option>US(+1)</option>
									<option>France(+33)</option>
									<option>UK(+44)</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Phone</label>
								<input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Type</label>
								<select class="form-control form-control-lg" id="">
								<option>Mobile</option>
								<option>Home</option>
								<option>Work</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-6">
								<p class="add-phone"><i class="fa fa-plus"></i> Add phone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="acc-credentials hide">
					<h3>ACCOUNT USERNAME &amp; PASSWORD</h3>
					<div class="acc-credentials-form-wrapper">
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="">Username or Email Address <i class="fa fa-info-circle" aria-hidden="true"></i></label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="usernameResponsible">
							</div>
							<div class="form-group col-md-3">
								<div class="form-row">
									<div class="form-group col-md-6 col-6">
										<label>Password</label>
										<input type="Password" class="form-control form-control-lg" placeholder="" name="passwordResponsible">
									</div>
									<div class="form-group col-md-6 col-6">
										<label>Retype Password</label>
										<input type="Password" class="form-control form-control-lg" placeholder="" name="retypePasswordResponsible">
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="add-traveller-block">
						<div class="form-row">
							<div class="form-group col-md-5">
								<div class="form-check primary-acc-formcheck hide">
								  <input class="form-check-input primary-acc-holder" type="checkbox" value="" id="">
								  <label class="form-check-label" for="">
									This is the primary account holder
								  </label>
								</div>
							</div>
							<div class="form-group col-md-7 remove-add-btns" style="text-align: right;">
							<span class="remove-traveler-btn hide">Remove Traveler</span>
							<span class="add-traveller-btn ">
								<img src="../assets/images/add-traveler-btn.png" class="img-fluid" alt="">
							</span>
							</div>
						</div>
			</div>
			</div>
			</div>
			
		</section>
		
	</div>	
		<section class="m-reg-form-block responsible-party-form hide">
		<div class="row">
			<div class="form-head">
				<h2>Responsible Party <small>(Must be 18 years or older, example: Self, Parent, or Guardian) </small></h2>
			</div>
			<div class="col-md-12">
			
			
			<div class="gaurdian-form-wrapper">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Relationship to Traveler 1</label>
						<select class="form-control form-control-lg" id="" aria-invalid="false">
							<option>Select One</option>	
							<option>Aunt/Uncle</option>
							<option>Father</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Other</option>
							<option>Parent</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Son</option>
							<option>Daughter</option>
							<option>Spouse</option>	
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Country</label>
						<select class="form-control form-control-lg" id="" aria-invalid="false">
								<option>US</option>
								<option>France</option>
								<option>UK</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Responsible Party First Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="firstnameGaurdian">
					</div>
					<div class="form-group col-md-3">
						<label>Middle Name (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="middlenameGaurdian">
					</div>
					<div class="form-group col-md-3">
						<label>Responsible Party Last Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameResponsible">
					</div>
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Responsible Party Address</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="addressResponsible">
					</div>
					<div class="form-group col-md-6">
						<label>Address 2 (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>City</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="cityGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label>State</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
								<option>VA</option>
								<option>Florida</option>
								<option>Texas</option>
								<option>New York</option>
								</select>
							</div>
							
							<div class="form-group col-md-3 col-6">
								<label>Zip</label>
								<input type="numeric" class="form-control form-control-lg" placeholder="" name="zipResponsible">
							</div>
							
						</div>
					</div>
					<div class="form-group col-md-3">
						<label>Responsible Party Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="emailResponsible">
					</div>
					<div class="form-group col-md-3">
						<label>Retype Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailResponsible">
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label for="">Country Code</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
									<option>US(+1)</option>
									<option>France(+33)</option>
									<option>UK(+44)</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Phone</label>
								<input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Type</label>
								<select class="form-control form-control-lg" id="">
								<option>Mobile</option>
								<option>Home</option>
								<option>Work</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-6">
								<p class="add-phone"><i class="fa fa-plus"></i> Add phone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="acc-credentials">
				<h3>ACCOUNT USERNAME & PASSWORD</h3>
				<div class="acc-credentials-form-wrapper">
					
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="">Username or Email Address <i class="fa fa-info-circle" aria-hidden="true"></i></label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="usernameGaurdian">
							</div>
							<div class="form-group col-md-3">
								<div class="form-row">
									<div class="form-group col-md-6 col-6">
										<label>Password</label>
										<input type="password" class="form-control form-control-lg" placeholder="" name="passwordGaurdian">
									</div>
									<div class="form-group col-md-6 col-6">
										<label>Retype Password</label>
										<input type="Password" class="form-control form-control-lg" placeholder="" name="retypePasswordGaurdian">
									</div>
								</div>
							</div>
							
							
						</div>
					
				</div>
				<div class="form-check emergency-disclaimer">
							  <input class="form-check-input emergency-contact-checkbox" type="checkbox" value="" id="">
							  <label class="form-check-label" for="">
								This account can serve as the emergency contact for all travelers on this program
							  </label>
							</div>
				
			</div>
			</div>
			</div>
		</section>

		<section class="m-reg-form-block parent-form hide">
		<div class="row">
			<div class="form-head">
				<h2>Parent or Guardian</h2>
			</div>
			<div class="col-md-12">
			
			
			<div class="gaurdian-form-wrapper">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Relationship to Traveler 1</label>
						<select class="form-control form-control-lg" id="" aria-invalid="false">
							<option>Select One</option>	
							<option>Aunt/Uncle</option>
							<option>Father</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Other</option>
							<option>Parent</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Son</option>
							<option>Daughter</option>
							<option>Spouse</option>	
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Country</label>
						<select class="form-control form-control-lg" id="" aria-invalid="false">
								<option>US</option>
								<option>France</option>
								<option>UK</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Parent or Guardian First Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="firstnameGaurdian">
					</div>
					<div class="form-group col-md-3">
						<label>Middle Name (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="middlenameGaurdian">
					</div>
					<div class="form-group col-md-3">
						<label>Parent or Guardian Last Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameGaurdian">
					</div>
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Parent or Guardian Address</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="addressGaurdian">
					</div>
					<div class="form-group col-md-6">
						<label>Address 2 (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>City</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="cityGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label>State</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
								<option>VA</option>
								<option>Florida</option>
								<option>Texas</option>
								<option>New York</option>
								</select>
							</div>
							
							<div class="form-group col-md-3 col-6">
								<label>Zip</label>
								<input type="numeric" class="form-control form-control-lg" placeholder="" name="zipResponsible">
							</div>
							
						</div>
					</div>
					<div class="form-group col-md-3">
						<label>Parent or Guardian Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="emailGaurdian">
					</div>
					<div class="form-group col-md-3">
						<label>Retype Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailGaurdian">
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label for="">Country Code</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
									<option>US(+1)</option>
									<option>France(+33)</option>
									<option>UK(+44)</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Phone</label>
								<input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Type</label>
								<select class="form-control form-control-lg" id="">
								<option>Mobile</option>
								<option>Home</option>
								<option>Work</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-6">
								<p class="add-phone"><i class="fa fa-plus"></i> Add phone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="acc-credentials">
				<h3>ACCOUNT USERNAME & PASSWORD</h3>
				<div class="acc-credentials-form-wrapper">
					
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="">Username or Email Address <i class="fa fa-info-circle" aria-hidden="true"></i></label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="usernameGaurdian">
							</div>
							<div class="form-group col-md-3">
								<div class="form-row">
									<div class="form-group col-md-6 col-6">
										<label>Password</label>
										<input type="password" class="form-control form-control-lg" placeholder="" name="passwordGaurdian">
									</div>
									<div class="form-group col-md-6 col-6">
										<label>Retype Password</label>
										<input type="Password" class="form-control form-control-lg" placeholder="" name="retypePasswordGaurdian">
									</div>
								</div>
							</div>
							
							
						</div>
					
				</div>
				<div class="form-check emergency-disclaimer">
							  <input class="form-check-input emergency-contact-checkbox" type="checkbox" value="" id="">
							  <label class="form-check-label" for="">
								This account can serve as the emergency contact for all travelers on this program
							  </label>
							</div>
				
			</div>
			</div>
			</div>
		</section>
		
		
		<section class="m-reg-form-block emergency-contact-form hide">
			<div class="row">
			<div class="form-head">
				<h2>Emergency Contact</h2>
			</div>
			<div class="col-md-12">
			
			<div class="emergency-form-wrapper">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Relationship to Traveler 1</label>
						<select class="form-control form-control-lg" id="">
							<option>Select One</option>	
							<option>Aunt/Uncle</option>
							<option>Father</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Other</option>
							<option>Parent</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Son</option>
							<option>Daughter</option>
							<option>Spouse</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Emergency Contact First Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="firstnameEmergencyContact" value="">
					</div>
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label>Middle Name (optional)</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="middlenameGaurdian">
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Emergency Contact Last Name</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameEmergencyContact" value="">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
							<div class="form-group col-md-3">
								<label>Emergency Contact Email Address</label>
								<input type="email" class="form-control form-control-lg" placeholder="" name="emailEmergencyContact" value="">
							</div>
							<div class="form-group col-md-3">
								<label>Retype Email Address</label>
								<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailEmergencyContact" value="" aria-invalid="false">
							</div>
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label for="">Country Code</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
									<option>US(+1)</option>
									<option>France(+33)</option>
									<option>UK(+44)</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Phone</label>
								<input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Type</label>
								<select class="form-control form-control-lg" id="">
								<option>Mobile</option>
								<option>Home</option>
								<option>Work</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-6">
								<p class="add-phone"><i class="fa fa-plus"></i> Add phone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
		</section>
		
		<section class="m-reg-form-block traveler-form-block new-layout hide">
			<div class="row">
			<div class="form-head">
				<!--<a data-toggle="collapse" href="#traveller1-form" role="button" aria-expanded="true" aria-controls="traveller1-form">Traveller 1</a>  -->
				<h2><span>Traveler 1 </span> 
					<span class="traveler-dropdown"><select class="form-control form-control-sm" id="" name="" >
						<option>Jane Doe</option>
						<option>Jennie Doe</option>
						<option>John Doe</option>
						<option>New Traveler</option>    
						</select>
					</span>
				</h2>
			</div>	
			<div class="col-md-12">
			
			<div class="traveller-form-wrapper collapse show" id="traveller1-form">
				<div class="form-row">
					<div class="alert alert-primary" role="alert"><i class="fas fa-exclamation-triangle"></i>
					Enter traveler’s full legal name as it would appear on a passport or government issued ID.
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Traveling as <i class="fa fa-info-circle" aria-hidden="true"></i></label>
						<select class="form-control form-control-lg" id="travellingas" name="tavellingAs">
						<option>Student</option>
						<option>Adult</option>
						<option>Chaperone</option>
						<option>Program Leader</option>
						</select>
					</div>
				
					<div class="form-group col-md-3">
						<label for="">Current Grade/Year in school <i class="fa fa-info-circle" aria-hidden="true"></i></label>
						<select class="form-control form-control-lg" id="travellingas" name="tavellingAs">
						<option>Grade 11</option>
						<option>Grade 10</option>
						<option>Grade 9</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label for="">Country</label>
						<select class="form-control form-control-lg" id="" name="country" aria-invalid="false">
								<option>US</option>
								<option>France</option>
								<option>UK</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Traveler 1 First Name</label>
						<input type="text" class="form-control form-control-lg " placeholder="" name="firstnameTraveller">
					</div>
					<div class="form-group col-md-3">
						<label for="">Middle Name (optional)</label>
						<input type="text" class="form-control form-control-lg" placeholder="">
					</div>
					<div class="form-group col-md-3">
						<label for="">Traveler 1 Last Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameTraveller">
					</div>
					
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div> 
				<div class="form-row">
					<div class="form-group col-md-3">
							<label for="inputEmail4">Traveler 1 Email Address (optional)</label>
							<input type="email" class="form-control form-control-lg" placeholder="">
					</div>
					<div class="form-group col-md-3">
						<label>Retype Email Address</label>
						<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailGaurdian">
					</div>
					<div class="form-group col-md-3">
						<div class="form-row">
							<div class="form-group col-md-6 col-6">
								<label for="">Gender</label>
								<select class="form-control form-control-lg" id="gender" name="gender" aria-invalid="false">
								<option>Female</option>
								<option>Male</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label for="">Date of Birth</label>
								<input type="date" class="form-control form-control-lg" name="bday">
							</div>
						</div>
					</div>
				</div> 
			</div>
			<hr>
			<div class="form-row">
					<div class="col-md-12">
						<h3>Primary Account</h3>
					</div>	
			</div>
			<div class="primary-acc-form-wrapper">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="">Primary Account </label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="primaryaccount">
					</div>
					<div class="form-group col-md-3">
						<label for="">Relationship</label>
							<select class="form-control form-control-lg" id="">
							<option>Select One</option>	
							<option>Aunt/Uncle</option>
							<option>Father</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Other</option>
							<option>Parent</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Son</option>
							<option>Daughter</option>
							<option>Spouse</option>
							</select>
					</div>
				</div> 
			</div>
			<hr>
			<div class="form-row">
					<div class="col-md-12"><h3>Emergency Contact</h3></div>
			</div>
			<div class="emergency-form-wrapper">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Relationship to Traveler 1</label>
						<select class="form-control form-control-lg" id="">
							<option>Select One</option>	
							<option>Aunt/Uncle</option>
							<option>Father</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Other</option>
							<option>Parent</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Son</option>
							<option>Daughter</option>
							<option>Spouse</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Emergency Contact First Name</label>
						<input type="text" class="form-control form-control-lg" placeholder="" name="firstnameEmergencyContact" value="">
					</div>
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label>Middle Name (optional)</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="middlenameGaurdian">
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Emergency Contact Last Name</label>
								<input type="text" class="form-control form-control-lg" placeholder="" name="lastnameEmergencyContact" value="">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Suffix (optional)</label>
								<select class="form-control form-control-lg" id="Suffix" aria-invalid="false">
								<option></option>
								<option>Jr.</option>
								<option>Sr.</option>
								<option>I</option>
								<option>II</option>
								<option>III</option>
								<option>IV</option>
								<option>V</option>
								<option>VI</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
							<div class="form-group col-md-3">
								<label>Emergency Contact Email Address</label>
								<input type="email" class="form-control form-control-lg" placeholder="" name="emailEmergencyContact" value="">
							</div>
							<div class="form-group col-md-3">
								<label>Retype Email Address</label>
								<input type="email" class="form-control form-control-lg" placeholder="" name="retypeEmailEmergencyContact" value="" aria-invalid="false">
							</div>
					<div class="form-group col-md-6">
						<div class="form-row">
							<div class="form-group col-md-3 col-6">
								<label for="">Country Code</label>
								<select class="form-control form-control-lg" id="" aria-invalid="false">
									<option>US(+1)</option>
									<option>France(+33)</option>
									<option>UK(+44)</option>
								</select>
							</div>
							<div class="form-group col-md-6 col-6">
								<label>Phone</label>
								<input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="">Type</label>
								<select class="form-control form-control-lg" id="">
								<option>Mobile</option>
								<option>Home</option>
								<option>Work</option>
								</select>
							</div>
							<div class="form-group col-md-3 col-6">
								<p class="add-phone"><i class="fa fa-plus"></i> Add phone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			</div>
			</div>
			
		</section>
		
		
		
		<div class="row">
			<div class="col-md-12">
		<div class="form-row">
			<div class="form-group col-md-12">
				<button type="submit" class="btn btn-primary  form-submit-btn float-right">SAVE & CONTINUE</button>
			</div>
		</div>
		</div>
		</div>
		
	</form>
</div>
<script>
  $( function() {
    $(".dob*").datepicker({
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