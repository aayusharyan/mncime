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

        <!-- PAGE TITLE BIG GREY LIGHT-->
        <div class="page-title-cont page-title-big page-title-img grey-dark-bg" style="background-image: url(assets/template.png)">
          <div class="relative container align-left">
            <div class="row">
               
              <div class="col-md-8">
                <h1 class="page-title">Author's Guidelines</h1>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">Author's Guidelines</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- CONTAINER -->
        <div class="container p-140-cont">

          <div class="row">
            <div class="col-md-12">
              <h2>Paper Format</h2>
				<div class="col-md-offset-1 hidden-sm hidden-xs visible-lg">
				<object width="100%" height="100%" data="assets/Paper_format.pdf" style="min-height:2050px"></object>
					</div>
				<div class="hidden-md hidden-lg visible-xs visible-sm" style="text-align: center">
					<a href="assets/Paper_format.pdf" download>Paper Formats&nbsp;(Download Here!)</a>
				</div>
            </div>
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