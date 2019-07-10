<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>


<div class="body">
        
            <div class="container">
                <div class="row body-bock">
                    <div class="left-image col-md-3 col-lg-3">
                        <img class="img-fluid" src="../assets/images/background.jpg" alt="JST_9833"></div>
                    <div class="col-sm-12 col-md-9 col-lg-9 welcome-body">
                        <div class="body-header">
                            <h1>
                                Welcome! Let's Get Started <span>Registering for your Program.</span>
                            </h1>
                          
                        </div>
                        <div class="row have-account">
                            <div class="col-sm-12 col-md-6 col-lg-6  order-3 order-sm-3 order-md-1 order-lg-1 ">
                                <h3>Don’t Have an Account?</h3>
                                <button class="btn-white d-md-none">REGISTER WITH A NEW ACCOUNT</button>
                                <p class="reg-txt">Register for your trip in 4 easy steps. By creating an account you can also:</p>
                                <ul>
                                    <li>Manage Multiple Travelers</li>
                                    <li>View Previous Program Activity</li>
                                    <li>Manage Your Payments & Notifications</li>
                                    <li>Track Your Life Learning</li>
                                </ul>
                               
                                <button class="btn-white d-none d-md-block">REGISTER WITH A NEW ACCOUNT</button>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 login order-1 order-sm-1 order-md-2 order-lg-2">
                                <h3>Add this Program to Your Existing Account?</h3>
                                <form>
                                    <p>Username or Email Address</p>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <p>Password</p>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <span class="btn-show-pass">
                                           <i class="far fa-eye-slash"></i>
                                        </span>

                                        
                                    </div>
                                    <div class="custom-checkbox">
                                          <input type="checkbox" id="chk">
                                         <label for="chk">Remember me on this device</label>
                                    </div>
                                  
                                </form>
                                <span class="forgot-credentialsMobile">Forgot your login credentials?</span>
                                <button class="btn-blue">LOGIN AND REGISTER</button>
                                <span class="forgot-credentials">Forgot your login credentials?</span>
                            </div>
                           
                            <div class="wordwrapper order-2 order-sm-2 order-md-3 order-lg-3 ">
                                <div class="word">OR</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal block code -->

<div class="container modal-block">
<!-- Modal -->
<div class="modal" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header m-header">
            <h3 class="modal-title " id="exampleModalLabel">Request Information</h3>
            <button type="button" class="close btn-cancl" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="cancl"><i class="fa fa-times cancl-icon" aria-hidden="true"></i></span>
            </button>
        </div>
        <p class="m-header-text">
            Interests in a WorldStrides Program? Complete the form below to learn more about starting
            a travel program in your school. Or, give us a call at<span> 888-788-8989</span>.
        </p>
        <div class="modal-body m-body">
        <form>
            <label>My Role is</label>
            <select class="form-control form-control-sm">
                <option>Select One</option>
                <option>Select Two</option>
                <option>Select There</option>
                <option>Select Four</option>
                <option>Select Five</option>
            </select>
           
            <div class="form-row">
            <div class="form-group col-md-12">
                                        <label class="m-radio-text">I have a program scheduled:</label>
                                        <label class="radio-container">Yes
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
</div>
</div>

          
            <div class="form-row">
                <div class="form-group form-border col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group form-border col-md-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-border col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group form-border col-md-6">
                    <label>Phone</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-border col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group form-border col-md-6">
                    <label>State</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group form-border col-md-6">
                    <label>School</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group form-border col-md-6"></div>
                
                <div class="form-group form-border col-md-12">
                    <label for="exampleFormControlTextarea1">Comments or Interests?</label>
                    <input type="text" class="form-control">
               
                </div>
            </div>
            <div class="form-row m-submit-btn">
                <button type="button" class="btn btn-primary submit-button col-md-12">SUBMIT</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
 

</div>
<script>
$( document ).ready(function() {
    console.log( "ready!" );
    $("#loginModal").modal('show');
});
</script>
 <?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>