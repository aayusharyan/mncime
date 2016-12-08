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
                <h1 class="page-title">Upload your Paper</h1>
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
            <h4 class="pb-50 pt-20" style="text-align:center">Upload your Paper <a href="login.php" class="pull-right">Logout</a></h4>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <input class="col-xs-12 col-md-4 col-md-offset-4 mb-30" type="file" name="fileToUpload" id="fileToUpload" placeholder="Upload your Paper">
                 
            </div>
            <div class="row mb-50">
                 <button type="submit" class="button medium blue col-xs-12 col-md-2 col-md-offset-5 btn-4 btn-4aa-inv mt-30" href="#">Upload the File&nbsp;&nbsp;<span aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span></button>
                 
            </div>
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
	
	</body>
</html>		