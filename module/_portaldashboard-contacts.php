<?php include '../inc/_header.php';?>
<?php include '../inc/_dashboard-header.php';?>
    <section class="main-portal-dashboard main-contacts-portal-dashboard">
        <div class="alert payment-due-info-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span><i class="fas fa-bell"></i></span>
            <span class="msgInfo">Your Next payment is due tomorrow, 10/21/2020</span>
            <span class="makePaymentButton">Make A Payment</span>
        </div>
        <div class="alert meeting-schedule-msg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span><i class="fas fa-bell"></i></span>
            <span class="msgInfo">Your Parent Teacher Meeting is Scheduled For This Friday at 7:00 PM at the Foothills Middle School Gym.</span>
            <span class="makePaymentButton">I Got It!</span>
        </div>
		<div class="container-fluid spacing-container">
			<div class="dashboard-container portal-dashboard-contacts-wrapper">
				<div class="row">
					<div class="col-md-3  d-none d-md-block profile-main-wrapper contacts-portal-dashboard-profile">
						<div class="row ">
							<div class="col-md-12">
								<div class="profile-pic-wrapper">
									<div class="profile-background">
										<img class="profile-background-image" src="../assets/images/profilpic-background.png"/>
										<div class="profile-details">
											<div class="profile-pic">
												<img src="../assets/images/jane-doe.jpeg">
											</div>
											<div class="text-center">
												<div class="profile-desc-inner">
													<span class="name">Jane Doe</span>
													<span class="typeOfTraveller">ADULT TRAVELER</span>
													<span class="travelerId">#323543</span>
													<div class="portal-dashboard-contacts-divider"></div>
                                                </div>
                                                <div class="portal-contact-additional-info">
                                                    <span class="contactNumber">+1(434)123-4567</span>
                                                    <span class="travelerId">janed@email.com</span>
                                                </div>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 dashboard-tiles">
						<div class="dashboard-content-wrapper">
							<div class="row">
								<div class="col-md-12 ">
									<div class="dashboard-item-wrap">
										<nav class="navigation-tab d-none d-md-block">
											<div class="nav nav-tabs horizontal-tabs-section" id="nav-tab" role="tablist">
												<a class="nav-item nav-link active" id="nav-active-tab" data-toggle="tab" href="#nav-active" role="tab" aria-controls="nav-home" aria-selected="true">Active</a>
												<a class="nav-item nav-link" id="nav-past-tab" data-toggle="tab" href="#nav-past" role="tab" aria-controls="nav-profile" aria-selected="false">Past</a>
												<a class="nav-item nav-link" id="nav-all-tab" data-toggle="tab" role="tab" aria-controls="nav-contact" aria-selected="false">All</a>
                                                <span class="ml-auto add-new-contact-portal"><i class="fa fa-plus-square" aria-hidden="true"></i>Add New</span>
                                            </div>
										</nav>
										<section class="d-block d-md-none">
											<div class="m-profile-pic-wrap">
												<div class="row d-flex align-items-center">
													<div class="col-4">
														<div class="profile-pic">
															<img src="../assets/images/jane-doe.jpeg">
														</div>
													</div>
													<div class="col-8" >
														<div class="profile-desc-inner">
															<div class="name">Jane Doe</div>
															<div class="typeOfTraveller">ADULT TRAVELER</div>
                                                            <div class="travelerId">#323543</div>
                                                            <div class="portal-contact-additional-info">
                                                                <span class="contactNumber">+1(434)123-4567</span>
                                                                <span class="travelerId">janed@email.com</span>
                                                            </div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section class="mobile-tab d-block d-md-none">
											<div class="row d-flex align-items-center filter-tabs">
												<div class="labelFilter">Filter</div>
												<div class="ml-auto details-list"><span class="details">Active</span><i class="fas fa-caret-down"></i></div>
											</div>
										</section>
									
										<section class=" profile-tab-left d-md-none">
											<ul class="nav nav-tabs flex-column  filter-dropdown-mobile filter-portal-dashboard hide-mobile">
												<li class="nav-item">
													<a class="nav-link active"  href="#nav-active"> 
														<label class="radio-container">Active
															<input type="radio" checked="checked" name="radio">
															<span class="checkmark "></span>
														</label>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link"  href="#nav-past">
														<label class="radio-container">Past
															<input type="radio" name="radio">
															<span class="checkmark"></span>
														</label> 
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link"  href="#nav-all">
														<label class="radio-container">All
															<input type="radio" name="radio">
															<span class="checkmark"></span>
														</label> 
													</a>
												</li>
											</ul>
										</section>

										<div class="tab-content inner-tab" id="nav-tabContent">
											<div class="tab-pane fade show active" id="nav-active" role="tabpanel" aria-labelledby="nav-home-tab">
												<div class="portal-active-wrapper">
													<div class="row">
														<div class="col-md-4">
															<div class="portal-make-payment-wrapper">
																<div class="portal-payment-image-sec">
																	<img src="../assets/images/washington.png">
																	<div class="portal-payment-section-content">
																		<p class="smaller-text">Dec. 10 - Dec. 15, 2019</p>
																		<p>Washington D.C. 2019 <span class="travelerId">#251432</span></p>
																	</div>
																</div>
																
																<div class="payment-section-short-details">
																	<div class="two-traveller-info">
																		<span class="traveler-img"><img src="../assets/images/jane-doe.jpeg"></span>
																		<span class="traveler-img"><img src="../assets/images/Jennie-Doe.jpg"></span>
																		<span>With 2 Travelers</span>
																		<span class="days"><i class="fa fa-clock-o" aria-hidden="true"></i>In 75 Days</span>
																	</div>
																	<div class="make-payment-sec">
																		<div class="row d-flex align-items-center">
																			<div class="col-6 col-md-6">
																				<div class="make-payment-heading">
																					<h6>Make payment</h6>
																				</div>
																			</div>
																			<div class="col-6 col-md-6">
																				<div class="make-payment-btn">
																					<button class="btn">view</button>
																				</div>
																				
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
															
														</div>
														<div class="d-none d-md-block col-md-4">
															<div class="portal-make-payment-wrapper">
																<div class="portal-payment-image-sec">
																	<img src="../assets/images/versailles.jpg">
																	<div class="portal-payment-section-content">
																		<p class="smaller-text">Aug. 10 - Aug. 15, 2019</p>
																		<p>Versailles, France 2019 <span class="travelerId">#4343332</span></p>
																	</div>
																</div>
																
																<div class="payment-section-short-details">
																	<div class="two-traveller-info">
																		<span class="traveler-img"><img src="../assets/images/jane-doe.jpeg"></span>
																		<span class="traveler-img"><img src="../assets/images/Jennie-Doe.jpg"></span>
																		<span>With 2 Travelers</span>
																		<span class="days"><i class="fa fa-clock-o" aria-hidden="true"></i>In 95 Days</span>
																	</div>
																	<div class="make-payment-sec">
																		<div class="row d-flex align-items-center">
																			<div class="col-6 col-md-6">
																				<div class="make-payment-heading">
																					<h6>Make payment</h6>
																				</div>
																			</div>
																			<div class="col-6 col-md-6">
																				<div class="make-payment-btn">
																					<button class="btn">view</button>
																				</div>
																				
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
														<div class="d-none d-md-block col-md-4">
															<div class="portal-make-payment-wrapper register-new-program">
																<div class="portal-payment-image-sec">
																	<img src="../assets/images/lg_WashingtonDC.jpg">
																	<div class="start-reg-text">
																		<h3>Let's Go!</h3>
																		<div class="start-new-adv-text">Start Your New Adventure</div>
																	</div>
																</div>
																
																<div class="payment-section-short-details">
																	<div class="traveller-program-id-info">
																		<div class="form-group">
																			<label>Enter Your Program ID <i class="fa fa-info-circle" aria-hidden="true" data-placement="top" data-toggle="tooltip" title="" data-original-title="To ensure that you receive current email invoices, please add payments@worldstrides.com to your permitted email sender list."></i></label>
																			<input type="text" class="form-control form-control-sm" placeholder="234567" name="text1">
																			
																		</div>
																	</div>
																	<div class="register-new-program-btn">
																		<img src="../assets/images/register-program.png" alt="register program button"/>
																		
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</div>
												<div class="row register-new-button-mobile d-block d-md-none">
													<div class="col-12">
														<img src="../assets/images/register-program.png" />
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="nav-past" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="row  memories-wrap">
													<div class="col-md-12">
														<div class="row d-flex align-items-center past-memories-content">
															<div class="col-md-12">
																<div class="memories-text">
																	<h2>Go Make Memories! </h2>
																	<p>When you return, your program history will show up here</p>
																</div>
																	
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-contact-tab">
										    </div>
										</div>
										
									</div>
								</div>
							</div>
							<!-- </div> -->
						</div>
							
					</div>
				</div>
			</div>
			<div class="dashboardContactsWrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="contactsTabSection">
                            <nav class="navigation-tab">
                                <div class="nav nav-tabs horizontal-tabs-section" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-portal-contacts-tab" data-toggle="tab" href="#nav-portal-dashboard-contacts">My Contacts</a>
                                    <span class="ml-auto add-new-contact-portal"><i class="fa fa-plus-square" aria-hidden="true"></i>Add New</span>
                                </div>
                                
                            </nav>
                            <div class="tab-content inner-tab">
								<div class="tab-pane fade show active" id="nav-portal-dashboard-contacts" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="dashboardTravellerContactsRow">
                                        <div class="row">
                                            <div class="col-12 col-sm-6  col-md-5 col-lg-4 col-xl-3 traveller-column">
                                                <div class="traveller-individual">
                                                    <div class="imageSec">
                                                        <img src="../assets/images/Jennie-Doe.jpg" alt="pic"/>
                                                    </div>
                                                    <div class="eachTravellerDetails">
                                                        <div>
                                                            <span class="travellerName">Jennie Doe</span>
                                                            <span class="travellerBasicInfo travellerId">#234567</span>
                                                            <i class="fas fa-pen"></i>
                                                        </div>
                                                        <div class="travellerBasicInfo travellerType">STUDENT TRAVELER</div>
                                                        <div class="travellerBasicInfo opacity-light">Jenniedoe@email.com</div>
                                                        <div class="travellerBasicInfo opacity-light">871.567.2377</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 traveller-column">
                                                <div class="traveller-individual">
                                                    <div class="imageSec">
                                                        <img src="../assets/images/john-write.png" alt="pic"/>
                                                    </div>
                                                    <div class="eachTravellerDetails">
                                                        <div>
                                                            <span class="travellerName">John Write</span>
                                                            <span class="travellerBasicInfo travellerId"></span>
                                                            <i class="fas fa-pen"></i>
                                                        </div>
                                                        <div class="travellerBasicInfo travellerType">EMERGENCY CONTACT</div>
                                                        <div class="travellerBasicInfo opacity-light">jwrite@email.com</div>
                                                        <div class="travellerBasicInfo opacity-light">871.567.4877</div>
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
	</section>


<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>
 <script>
	$(document).ready(function() {
		
		$(".details,.filter-list").click(function(){
			$(".filter-dropdown-mobile").toggle();
		});
		$(".filter-portal-dashboard .nav-link").click(function(){
			var a = $(this).text();
			$(".details").text(a);
		});

		$(".nav-tabs a").click(function(){
			$(this).tab('show');
			$(".filter-dropdown-mobile").toggle();
		});
		
	})
 </script>