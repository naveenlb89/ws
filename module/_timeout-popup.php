

<?php include '../inc/_header.php';?>
<?php include '../inc/_reg-header.php';?>
    <!-- Connection Time Out -->
	<div class="container">
    <section class="m-modal" style="text-align: center;
    min-height: 100px;
    margin: 50px;">
	
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Timeout
        </button>

        <!-- The Modal -->
        <div class="modal timeout-popup" id="myModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3>Connection Time Out</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h1 class="modal-title">OOPS, Something went very wrong!</h1>
                        <p>
                            We are having technical difficulties with processing your registration.
                        </p>
                        <p>Please check your internet connection and...</p>
                        <p>INSTRUCTIONS HERE OF WHAT TO DO IF WE CAN NOT REACH API</p>
                        <P>Call Sales: (888)778-9134</P>
                        <button class="timeout-btn">
                            TRY AGAIN TO CONNECT
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</div>
	
<?php include '../inc/_reg-footer.php';?>	
<?php include '../inc/_footer.php';?>