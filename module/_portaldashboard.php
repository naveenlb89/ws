<?php include '../inc/_header.php';?>
<?php include '../inc/_dashboard-header.php';?>
	<section class="main-portal-dashboard">
		<div class="container-fluid spacing-container">
			<div class="dashboard-container">
				<div class="row">
					<div class="col-md-3  d-none d-md-block profile-main-wrapper">
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
													<div class="divider"></div>
												</div>
												<div class="icons-wrapper">
													<div class="row profile-icons-wrap">
														<span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
														<span><i class="fa fa-globe" aria-hidden="true"></i></span>
														<span><i class="fa fa-users" aria-hidden="true"></i></span>
														<span><i class="fas fa-credit-card" aria-hidden="true"></i></span>
														<span><i class="fas fa-donate" aria-hidden="true"></i></span>
													</div>
													
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
											</div>
										</nav>
										<section class="d-block d-md-none">
											<div class="m-profile-pic-wrap">
												<div class="row d-flex align-items-center">
													<div class="col-3">
														<div class="profile-pic">
															<img src="../assets/images/jane-doe.jpeg">
														</div>
													</div>
													<div class="col-9" >
														<div class="profile-desc-inner">
															<div class="name">Jane Doe</div>
															<div class="typeOfTraveller">ADULT TRAVELER</div>
															<div class="travelerId">#323543</div>
														</div>
													</div>
												</div>
												<div class="row d-flex align-items-center icons-wrapper">
													<span><i class="fa fa-user-circle" aria-hidden="true"></i></span>
													<span><i class="fa fa-globe" aria-hidden="true"></i></span>
													<span><i class="fa fa-users" aria-hidden="true"></i></span>
													<span><i class="fas fa-credit-card" aria-hidden="true"></i></span>
													<span><i class="fas fa-donate" aria-hidden="true"></i></span>
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
																		<p>Washington D.C. 2019 #251432</p>
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
																		<p>Versailles, France 2019 #4343332</p>
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
						</div>
					</div>
				</div>
			</div>
			<div class="dashboardWrapper">
				<div class="row">
					<div class="col-md-12">
						<div class="individual-profile-wrapper">
							<div class="row">
								<div class="col-md-10">
									<h2>Hi Jane, <br class="d-block d-md-none">Here are some things you can do…</h2>
								</div>
								<div class="col-md-2 d-none d-md-block closePaymentDescWrapper">
									<button class="closePaymentDescBtn">
										Close <i class="fas fa-times"></i>
									</button>
								</div>
							</div>
							<div class="row inner-space-around">
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-credit-card"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Make Individual Payments</h6>
											<p>You can pay for each individual traveler within your customer portal.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-user-plus"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Add New Travelers</h6>
											<p>Add new travelers to an active program.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-globe"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Register for New Programs</h6>
											<p>Start a new program from inside your customer portal. Keep track of all your travels with one convenient location.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-tshirt"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Online store</h6>
											<p>Get your Worldstrides travel gear, swag, and team shirts.</p>
										</div>
									</div>
								</div>
								
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-donate"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Fundraising</h6>
											<p>Help pay for all your programs and adventures by using generous fundraising tools.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-users"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Manage Multiple Travelers</h6>
											<p>Now you can manage and update multiple travelers with account with a single account.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-leaf"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Link to Pogram Upgrades</h6>
											<p>Upgrade your trip experience by selecting program specific add-ons and options.</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-3">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-2 portal-left-icons">
											<i class="fas fa-user-graduate"></i>
										</div>
										<div class="col-10 col-md-9 col-lg-10 portal-right-desc">
											<h6>Academic Credit</h6>
											<p>Access your Academic Credit Portal to signup for courses that are associated with your program.</p>
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
		$(".closePaymentDescBtn").click(function() {
			$(".dashboardWrapper").css('visibility','hidden');
		});
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
		// $(".profile-tab .nav-link").on("click",function(){
		// 	$(".name").text($(this).text());
		// });
	})
 </script>