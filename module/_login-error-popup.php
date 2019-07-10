
<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>
<div class="container">
    <section class="m-modal" style="text-align: center;
    min-height: 100px;
    margin: 50px;">
	
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Login Error
        </button>
		
	


        <!-- The Modal -->
        <div class="modal acount-popup" id="myModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title">It look like your account already exists</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="address-exit"><span><i class="fa fa-exclamation-triangle"></i></span>An account using your Name and Email Address exists in our database.</p>
                        <p>Would you like to continue your registration using your account information? If yes, enter your password below to continue registering using your account.</p>
                        <div class="col-md-12 account-form">
                            <form>
                                <p>Email Address or Username</p>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <p>Password</p>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-lock-open"></i></span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                                <span class="forgot-credentials">Forgot your Password?</span>
                            </form>
                        </div>
                        <div class="row no-account">
                            <div class="col-md-7">
                                <p class="create-account"><a href="#">NO, CREATE A NEW ACCOUNT</a></p>
                            </div>
                            <div class="col-md-5">
                                <button class="have-btn">CONTINUE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>	
<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>