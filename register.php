<!DOCTYPE html>
<html>
 	

    <?php require_once ("include_header.php"); ?>
    <body>
	<?php require_once ("include_preloader.php"); ?>

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
<?php require_once ("include_ie_warning.php"); ?>				
				<!-- HEADER 1 NO-TRANSPARENT -->
				<?php require_once ("include_navbar.php"); ?>  
        <!-- PAGE TITLE BIG IMG -->
        <div class="page-title-cont page-title-big page-title-img grey-dark-bg" style="background-image: url(assets/schedule.jpg)">
          <div class="relative container align-left">
            <div class="row">
               
              <div class="col-md-8">
                <h1 class="page-title">Register For the Event</h1>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">Signup</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
 
        <!-- CONTAINER -->
        <div class="container p-100-cont">
            <h4 class="pb-50 pt-20" style="text-align:center">Enter your details Below <a href="login.php" class="pull-right">Already Registered?</a></h4>

			  <form action="register_user.php" method="POST">
			 <div class="row">
			  <select class="form-inline col-xs-12 col-md-1 mb-30" name="title">
				  <option value="Dr.">Dr.</option>
				  <option value="Prof.">Prof.</option>
				  <option value="Mr.">Mr.</option>
				  <option value="Ms.">Ms.</option>
				  <option value="Mrs.">Mrs.</option>
			  </select>
			  <input type="text" name="first_name" class="form-inline col-xs-12 col-md-offset-1 col-md-3 mb-30" placeholder="First Name" required>
                 <input type="text" name="middle_name" class="form-inline col-xs-12 col-md-offset-1 col-md-2 mb-30" placeholder="Middle Name">
                 <input type="text" name="last_name" class="form-inline col-xs-12 col-md-offset-1 col-md-3 mb-30" placeholder="Last Name">
              </div>
              <div class="row">
                <select class="form-inline col-xs-12 col-md-2 mb-30" name="designation">
				  <option value="Professor">Professor</option>
				  <option value="Asociate Professor">Associate Professor</option>
				  <option value="Assistant Professor">Assistant Professor</option>
				  <option value="Lecturer">Lecturer</option>
				  <option value="Research Scholar">Research Scholar</option>
				  <option value="P. G. Student">P. G. Student</option>
				  <option value="U. G. Student">U. G. Student</option>
			  </select>
                  <input type="text" name="department" class="form-inline col-xs-12 col-md-offset-1 col-md-3 mb-30" placeholder="Department">
                  <input type="text" name="institute" class="form-inline col-xs-12 col-md-offset-1 col-md-5 mb-30" placeholder="Institute/Organisation">
              </div>
            <div class="row">
            
                    <div class="col-md-4 col-xs-12 mb-30">
                            <textarea maxlength="5000" data-msg-required="Please enter your Correspondence Address." rows="3" class="form-control" name="address" id="message" placeholder="Correspondence Address" required="" aria-required="true"></textarea>
                          </div>
                <input type="number" name="number" class="form-inline col-xs-12 col-md-offset-1 col-md-3 mb-30" placeholder="Mobile Number">
                <input type="mail" name="mail" class="form-inline col-xs-12 col-md-3 col-md-offset-1 mb-30" placeholder="EMail Id">
            
            </div>
            <div class="row">
                
                <select name="accomodation" class="form-inline col-xs-12 col-md-3 mb-30">
				  <option value="Yes">Acomodation Required</option>
				  <option value="No">Accomidation Not Required</option>
			  </select>
                <select name="tour" class="form-inline col-xs-12 col-md-3 col-md-offset-1 mb-30">
				  <option value="Yes">Interested in Lonavala Tour</option>
				  <option value="No">Not Interested in Lonavala Tour</option>
			  </select>
                <select name="importance" onchange="change_payment (this);" class="form-inline col-xs-12 col-md-4 col-md-offset-1 mb-30">
				  <option value="Listener/Attendee">I am a Listener/Attendee</option>
				  <option value="Paper Presentor">I will be Presenting Paper</option>
			  </select>
            
            </div>
                  <div id="payment"><button class="submit button small blue thin btn-5 btn-5bb pull-right mb-30 mt-20" href="#"><span aria-hidden="true" class="button-icon-anim icon_cart"></span><span class="button-text-anim">Proceed to Payment</span></button></div>
                  <div id="upload" style="display: none;"><button class="submit button small blue thin btn-5 btn-5bb pull-right mb-30 mt-20" href="#"><span aria-hidden="true" class="button-icon-anim fa fa-long-arrow-right"></span><span class="button-text-anim">Proceed to File Upload</span></button></div>
            </form> 
        	
        </div>
        
        
        <?php require_once ("include_footer.php"); ?>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<?php require_once ("include_js.php"); ?>
        
        <script>
            function change_payment (element) {
                var value = element.value;
                if (value == "Paper Presentor") {
                    $("#payment").fadeOut (500, function () {
                        $("#upload").fadeIn (500);
                    });
                } else if (value == "Listener/Attendee") {
                    $("#upload").fadeOut (500, function () {
                        $("#payment").fadeIn (500);
                    });
                } else {
                    window.location.reload();
                }
            }
        </script>
	
	</body>
</html>		