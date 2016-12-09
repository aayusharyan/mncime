<?php


 session_start();
    $_SESSION ["mail"] = "";
    $_SESSION ["phone"] = "";

?>

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
        <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url(assets/thank_you.jpg)">
          <div class="relative container align-left">
            <div class="row">
               
              <div class="col-md-8">
                <h1 class="page-title">Thank you</h1>
                <div class="page-sub-title">
                  We have received your paper.
                </div>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><a href="#">Upload</a><span class="slash-divider">/</span><span class="bread-current">Success</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
 
        <!-- CONTAINER -->
        <div class="container p-100-cont">
            <h4 class="pb-20 pt-20" style="text-align:center">Thank You for Registering, we have received your file, we are going through it and will mail you for further steps.
            </h4>
             
			  
			  
        	
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