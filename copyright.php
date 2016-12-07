<!DOCTYPE html>
<html>
<?php require_once ("include_header.php"); ?>
<head>
	<title></title>
</head>
<body>
	<?php require_once ("include_preloader.php"); ?>
	<div class="boxed" id="wrap">
		<div class="grey-bg">
			<!-- Grey BG  -->
			<?php require_once ("include_ie_warning.php"); ?><!-- HEADER 1 NO-TRANSPARENT -->
			<?php require_once ("include_navbar.php"); ?><!-- PAGE TITLE BIG GREY LIGHT-->
			<div class="page-title-cont page-title-big page-title-img grey-dark-bg" style="background-image: url(assets/copyright.jpg)">
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
			</div><!-- CONTAINER -->
			<div class="container p-140-cont">
				<div class="row">
					<div class="col-md-12">
						<h2>Copright Form</h2>
						<div class="col-md-offset-1 hidden-sm hidden-xs visible-lg">
							<object data="assets/Copyright_form.pdf" height="100%" style="min-height:1200px" width="100%">
							</object>
						</div>
						<div class="hidden-md hidden-lg visible-xs visible-sm" style="text-align: center">
							<a href="assets/Copyright_form.pdf">Copyright From&nbsp;(Download Here!)</a>
						</div>
					</div>
				</div>
			</div><?php require_once ("include_footer.php"); ?><!-- BACK TO TOP -->
			<p id="back-top"><a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a></p>
		</div><!-- End BG -->
	</div><!-- End wrap --><?php require_once ("include_js.php"); ?>
</body>
</html>