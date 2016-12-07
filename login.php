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
                <h1 class="page-title">Login to Your Account</h1>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">Login</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
 
        <!-- CONTAINER -->
        <div class="container p-100-cont">
            <h4 class="pb-50 pt-20" style="text-align:center">Please Login <a href="register.php" class="pull-right">Registration form this way &rarr;</a></h4>

			  
			 <div class="row">
			  
			  <input type="text" name="first_name" class="form-inline col-xs-12 col-md-4 col-md-offset-4 mb-30" placeholder="Registered EMail Id" required>
                  </div>
            <div class="row">
                 <input type="text" name="middle_name" class="form-inline col-xs-12 col-md-offset-4 col-md-4 mb-30" placeholder="Registered Mobile Number" required>
            </div>
            <div class="row">
                 <a class="button medium blue col-xs-12 col-md-4 col-md-offset-4 btn-4 btn-4aa-inv" href="#">Access your Account&nbsp;&nbsp;<span aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span></a>
                 
            </div>
             
             
			  
			  
        	
        </div>
        
        
        <?php require_once ("include_footer.php"); ?>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<?php require_once ("include_js.php"); ?>
	
	</body>
</html>		