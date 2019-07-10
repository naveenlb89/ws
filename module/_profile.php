<?php include '../inc/_header.php';?>
<?php include '../inc/_dashboard-header.php';?>
<section class="m-customer-profile">
    <div class="container-fluid profile-container">
        <div class="row">
            <div class="col-12 col-md-12 profile-list">
                <div class="profile-name"> 
                    <i class="fas fa-arrow-left"></i> 
                    <span class="name d-md-none">Jane Doe | #323543</span>
                    <span class="desk-name d-none d-md-inline-block">Jane Doe | #323543</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 profile-item">
                <ul class="nav nav-tabs profile-tab horizontal-tabs-section">
                    <li class="nav-item">
                        <a class="nav-link active"  href="#profile">
                            <span class="d-none d-md-block">Profile</span>
                            <span class="d-md-none"><i class="fas fa-user-circle"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#programs">
                            <span class="d-none d-md-block">Programs</span>
                            <span class="d-md-none"><i class="fas fa-globe"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#contacts">
                            <span class="d-none d-md-block">My Contacts</span>
                            <span class="d-md-none"><i class="fas fa-users"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#Payment">
                            <span class="d-none d-md-block">Payment</span>
                            <span class="d-md-none"><i class="fas fa-credit-card"></i></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#fundraising">
                            <span class="d-none d-md-block">Fundraising</span>
                            <span class="d-md-none"><i class="fas fa-donate"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="tab-content col-md-12">
                <div id="profile" class="tab-pane profile-pane active">
                    <div class="row">
                        <div class="col-md-2 profile-left">
                            <section class="profile-details">
                                <div class="profile-image">
                                    <div class="image">
                                        <img src="../assets/images/jane-doe1.png"  class="rounded-circle" alt="jane-doe">
                                    </div>
                                    <span class="edit-profile">Edit Profile Photo</span>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-10 profile-right">
                            <section class="m-reg-form-block profile-block">
                                <form action="#">
                                    <div class="profile-head d-none d-md-block clearfix">
                                        <h2 class="float-left">My Profile</h2>
                                    </div>
                                    <div class="gaurdian-form-wrapper">
                                        <div class="form-row">
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>First Name <i class="fa fa-info-circle" aria-hidden="true"></i></label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="Jane" name="firstname">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email Address</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="" name="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Country</label>
                                                        <select class="form-control form-control-lg" id="">
                                                            <option>USA</option>
                                                            <option>France</option>
                                                            <option>UK</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Gender</label>
                                                        <select class="form-control form-control-lg" id="">
                                                            <option>Female</option>
                                                            <option>Male</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row ma-b">  
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Middle Name (optional)</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="" name="lastnameGaurdian">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-8 col-6 ma-b">
                                                                <label>Phone</label>
                                                                <input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phoneGaurdian">
                                                            </div>
                                                            <div class="form-group col-md-4 col-6 ma-b">
                                                                <label for="">Type</label>
                                                                <select class="form-control form-control-lg" id="">
                                                                <option>Mobile</option>
                                                                <option>Home</option>
                                                                <option>Work</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>   
                                            <div class="col-md-5">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Responsible Party Address</label>
                                                        <input type="text   " class="form-control form-control-lg" placeholder="123 North Main Street" name="retypeEmailGaurdian">
                                                    </div>
                                                    <div class="form-group col-md-3 col-6">
                                                        <label for="">Date of Birth</label>
                                                        <input type="date" class="form-control form-control-lg" name="bday">								
                                                    </div> 
                                                </div>
                                            </div>         
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="Doe" name="lastnameGaurdian">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <span class="add-phone"><i class="fa fa-plus"></i> Add phone</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Address 2 (optional)</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="" name="cityGaurdian">
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 col-6">
                                                        <label for="">Suffix (optional)</label>
                                                        <select class="form-control form-control-lg" id="" aria-invalid="false">
                                                        <option>Select One</option>
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
                                            <div class="col-md-5">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>City</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="Charlottesville" name="cityGaurdian">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-7"></div> 
                                            <div class="form-group col-md-5">
                                                <div class="form-row">
                                                    <div class="col-md-8">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6 col-6">
                                                                <label>State</label>
                                                                <select class="form-control form-control-lg" id="">
                                                                <option>VA</option>
                                                                <option>Florida</option>
                                                                <option>Texas</option>
                                                                <option>New York</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-6">
                                                                <label>Zip</label>
                                                                <input type="numeric" class="form-control form-control-lg" placeholder="19031" name="zipGaurdian">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-credentials">
                                        <h3>ACCOUNT INFORMATION</h3>
                                        <div class="acc-credentials-form-wrapper">
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="">Customer Account Number</label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="#323543" name="usernameGaurdian">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="">Username or Email Address <i class="fa fa-info-circle" aria-hidden="true"></i></label>
                                                    <input type="text" class="form-control form-control-lg" placeholder="defaultEmail@email.com" name="usernameGaurdian">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-row">
                                                        <div class="form-group col-6 col-md-6">
                                                            <label for="">Password</label>
                                                            <input type="password" class="form-control form-control-lg"  placeholder="************" name="usernameGaurdian">
                                                        </div>
                                                        <div class="form-group col-1 col-md-6">
                                                            <span class="pen"><i class="fa fa-pen" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 save">
                                            <button>SAVE</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="programs" class="tab-pane profile-pane">
                    <div class="row">
                        <div class="col-md-2 profile-left">
                            <section class="mobile-tab d-md-none">
                                <div class="row">
                                    <div class="col-5">
                                        <span class="filter-list">FILTER</span>
                                    </div>
                                    <div class="col-7">
                                        <div class="details-list"><span class="details">Active</span><i class="fas fa-caret-down"></i></div>
                                    </div>
                                </div>
                            </section>
                            <section class=" profile-tab-left">
                                <ul class="nav nav-tabs flex-column d-md-block vertical-tabs-section hide-mobile filter-dropdown-mobile">
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="#Active">
                                            <label class="radio-container">Active
                                                <input type="radio" checked="checked" name="radio" class="d-md-none">
                                                <span class="checkmark d-md-none"></span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link "  href="#Past">
                                            <label class="radio-container">Past
                                                <input type="radio" checked="checked" name="radio" class="d-md-none">
                                                <span class="checkmark d-md-none"></span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="#All">
                                            <label class="radio-container">All
                                                <input type="radio" checked="checked" name="radio" class="d-md-none">
                                                <span class="checkmark d-md-none"></span>
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-10 profile-right">
                            <div class="tab-content">
                                <div id="Active" class="tab-pane active">
                                    <section class="profile-tab-content active-tab-content">
                                        <div class="profile-head d-none d-md-block clearfix">
                                            <h2 class="float-left">Active Programs</h2>
                                        </div>
                                        <div class="profile-body">
                                            <div class="portal-active-wrapper profile-wrapper">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="portal-make-payment-wrapper profile-section">
                                                            <div class="portal-payment-image-sec">
                                                                <img src="../assets/images/washington.png">
                                                                <div class="portal-payment-section-content">
                                                                    <p class="smaller-text">Dec. 10 - Dec. 15, 2019</p>
                                                                    <p>Washington D.C. 2019 
                                                                        <span class="travelerId">#251432</span>
                                                                    </p>
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
                                                                    <div class="row">
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
                                                    <div class="col-md-4 d-none d-md-block">
                                                        <div class="portal-make-payment-wrapper profile-section">
                                                            <div class="portal-payment-image-sec">
                                                                <img src="../assets/images/versailles.jpg">
                                                                <div class="portal-payment-section-content">
                                                                    <p class="smaller-text">Aug. 10 - Aug. 15, 2019</p>
                                                                    <p>Versailles, France 2019 
                                                                        <span class="travelerId">#4343332</span>
                                                                    </p>
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
                                                                    <div class="row">
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
                                                    <div class="col-md-4 d-none d-md-block">
                                                        <div class="portal-make-payment-wrapper register-new-program profile-section">
                                                            <div class="portal-payment-image-sec">
                                                                <img src="../assets/images/washington.png">
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
                                                                    <div class="new-program">
                                                                        <button>REGISTER NEW PROGRAM<span>+</span></button>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row program-button d-md-none">
                                                    <div class="col-md-12 add-program">
                                                        <button>ADD PROGRAM <span>+</span></button>
                                                    </div>
                                                </div>
						                    </div>  
                                        </div>
                                    </section>
                                </div>
                                <div id="Past" class="tab-pane">
                                    <section class="profile-tab-content">
                                        <div class="profile-head d-none d-md-block clearfix">
                                            <h2 class="float-left">Past Programs</h2>
                                        </div> 
                                        <div class="profile-body">
                                            <div class="past-history">
                                                <p class="memories">Go Make Memories!</p>
                                                <p class="history">When you return, your program history will show up here</p>
                                            </div>
                                        </div> 
                                    <section>
                                </div>
                                <div id="All" class="tab-pane">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contacts" class="tab-pane profile-pane">
                    <div class="row">
                        <div class="col-md-2 profile-left">
                            <section class="mobile-tab d-md-none">
                                <div class="row">
                                    <div class="col-5">
                                        <span class="filter-list">FILTER</span>
                                    </div>
                                    <div class="col-7">
                                        <div class="details-list"><span class="details">Travellers & Contacts</span><i class="fas fa-caret-down"></i></div>
                                    </div>
                                </div>
                            </section>
                            <section class=" profile-tab-left">
                                <ul class="nav nav-tabs flex-column d-md-block vertical-tabs-section hide-mobile filter-dropdown-mobile">
                                    <li class="nav-item">
                                        <a class="nav-link active"  href="#Travelers"> 
                                            <label class="radio-container">Travelers & Contacts
                                                <input type="radio" checked="checked" name="radio" class="d-md-none">
                                                <span class="checkmark d-md-none"></span>
                                            </label>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  href="#Staff">
                                            <label class="radio-container">Staff
                                                <input type="radio" name="radio" class="d-md-none">
                                                <span class="checkmark d-md-none"></span>
                                          </label> 
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <section class="profile-filter-left d-none d-md-block">
                                <ul class="nav nav-tabs flex-column vertical-tabs-filter">
                                    <p>FILTER BY</p>
                                    <li class="nav-item"><a class="nav-link"  href="#">All Programs</a></li>
                                    <li class="nav-item"><a class="nav-link active"  href="#">Washington D.C. 2019</a></li>
                                    <li class="nav-item"><a class="nav-link"  href="#">Versailles, France 2019</a></li>
                                </ul>
                            </section>  
                        </div>
                        <div class="col-md-10 profile-right">
                            <div class="tab-content">
                                <div id="Travelers" class="tab-pane active">
                                    <section class="profile-tab-content">
                                        <div class="profile-head d-none d-md-block clearfix">
                                            <h2 class="float-left">Travelers & Contacts on My Account</h2>
                                        </div> 
                                        <div class="profile-body">
                                            <div class="travellerContactsRow">
                                                <div class="row">
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/Jennie-doe.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">Jennie Doe</span>
                                                                    <span class="travellerId"></span>
                                                                    <i class="fas fa-pen"></i>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">STUDENT TRAVELER</div>
                                                                <div class="travellerBasicInfo opacity-light">Jenniedoe@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.2377</div>
                                                                <div class="travellerStatus registeredStatus"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/John-Doe.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">John Doe</span>
                                                                    <span class="travellerId"></span>
                                                                    <i class="fas fa-pen"></i>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">STUDENT TRAVELER</div>
                                                                <div class="travellerBasicInfo opacity-light">jdoe@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.4877</div>
                                                                <div class="travellerStatus waitinglistStatus"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/Anne-James.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">Anne James</span>
                                                                    <i class="fas fa-pen"></i>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">EMERGENCY CONTACT</div>
                                                                <div class="travellerBasicInfo opacity-light">aJames@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.3435</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    <section>
                                </div>
                                <div id="Staff" class="tab-pane">
                                    <section class="profile-tab-content">
                                        <div class="profile-head d-none d-md-block clearfix">
                                            <h2 class="float-left">Staff Members for My Programs</h2>
                                        </div> 
                                        <div class="profile-body">
                                            <div class="travellerContactsRow">
                                                <div class="row">
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/Anne-James.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">Wendy Write</span>
                                                                    <span class="travellerId"></span>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">TEACHER</div>
                                                                <div class="travellerBasicInfo opacity-light">wwrite@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.2333</div>
                                                                <div class="travellerStatus registeredStatus"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/Jennie-doe.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">Brian Edwards</span>
                                                                    <span class="travellerId"></span>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">COURSE LEADER</div>
                                                                <div class="travellerBasicInfo opacity-light">bedwards@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.4543</div>
                                                                <div class="travellerStatus waitinglistStatus"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 traveller-column">
                                                        <div class="traveller-individual">
                                                            <div class="imageSec">
                                                                <img src="../assets/images/John-Doe.png" alt="pic"/>
                                                            </div>
                                                            <div class="eachTravellerDetails">
                                                                <div>
                                                                    <span class="travellerName">Carl Bradford</span>
                                                                </div>
                                                                <div class="travellerBasicInfo travellerType">CHAPERONE</div>
                                                                <div class="travellerBasicInfo opacity-light">cbradford@email.com</div>
                                                                <div class="travellerBasicInfo opacity-light">871.567.4877</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    <section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Payment" class="tab-pane profile-pane">
                    <h1>Payment</h1>
                </div>
                <div id="fundraising" class="tab-pane fundraising-pane">
                    <div class="row fund-row">
                        <div class="">
                            <div class="col-md-12 fundraising-block">
                                <section class="profile-tab-content">
                                    <div class="profile-head d-none d-md-block clearfix">
                                        <h2 class="float-left">Fundraising</h2>
                                    </div>
                                    <div class="fund-block">
                                        <div>
                                            <p class="d-none d-md-block">WorldStrides is committed to giving every student the opportunity to travel with us to amazing destinations. We offer several fundraising and financial assistance tools to help students make their trip a reality. Our most successful fundraising tool, the Gift of Education, helps thousands of students each year raise over a million dollars for their trips. Best of all, 100% of all money raised by students goes directly toward offsetting their trip price! It’s fun, easy and the perfect way to ensure that you get to experience the trip of a lifetime.</p>
                                        </div>
                                        <div class="fund-column">
                                        <div class="row">
                                                <div class="col-md-4">
                                                    <div class="social-media">
                                                        <div class="image">
                                                            <img src="../assets/images/fundraising1.png" alt="fundraising1">
                                                        </div>
                                                        <div class="ecard-text">Send an E-Card</div>
                                                        <p class="text">Our most successful fundraising tool! Raise money for your trip by sending an e-card to friends and family.</p>
                                                        <button>SEND AN E-CARD</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="social-media">
                                                        <div class="image">
                                                            <img src="../assets/images/fundraising2.jpg" alt="fundraising2">
                                                        </div>
                                                        <div class="ecard-text">Share on Facebook</div>
                                                        <p class="text">Want to spread the word and raise funds using Facebook? Share with your Facebook friends!</p>
                                                        <button>POST ON FACEBOOK</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="social-media active">
                                                        <div class="image">
                                                            <img src="../assets/images/fundraising3.png" alt="fundraising3">
                                                        </div>
                                                        <div class="ecard-text">Mail a Letter</div>
                                                        <p class="text">Everyone likes to get mail! Create customized letters that you can print and send to family and friends via mail.</p>
                                                        <button>MAIL A LETTER</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="easy-way">Here are three really easy ways to get your WorldStrides fundraising started. Check out the rest of the site for fundraising ideas and tips, grant opportunities, and scholarships. If you’re traveling on one of our Perspectives high school international tours, read about our customizable personal fundraising pages.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
        $(".filter-dropdown-mobile").show();
    });
    $(".profile-tab .nav-link").on("click",function(){
        var tabName = $(this).attr('href') == '#profile' ? 'Jane Doe' : $(this).text();
        $(".name").text(tabName);
    });

    $(".details,.filter-list").click(function(){
        $(".filter-dropdown-mobile").toggle();
    });
    $(".m-customer-profile .vertical-tabs-section .nav-link").click(function(){
        var a = $(this).text();
        $(this).closest('.profile-pane').find(".details").text(a);
    });

   $("body").on('click',function(e){
       if($(e.target).is(".details,.filter-list"))
       return;
    $(".filter-dropdown-mobile").hide();    
   }); 
});
</script>
<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>