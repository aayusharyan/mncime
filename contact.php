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
			<!-- Grey BG  --><?php require_once ("include_ie_warning.php"); ?><?php require_once ("include_navbar.php"); ?><!-- PAGE TITLE -->
			<div class="page-title-cont page-title-big grey-light-bg">
				<div class="relative container align-left">
					<div class="row">
						<div class="col-md-8">
							<h1 class="page-title">CONTACT US</h1>
							<div class="page-sub-title"></div>
						</div>
						<div class="col-md-4">
							<div class="breadcrumbs">
								<a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">CONTACT US</span>
							</div>
						</div>
					</div>
				</div>
			</div><!-- GOOGLE MAP & CONTACT FORM -->
			<div class="page-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6" style="padding: 0px; height: 600px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28095.642111985064!2d73.41310303783469!3d18.72926153421526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2c0268c23675ef3!2sSinhgad+Technical+Education+Society!5e0!3m2!1sen!2sin!4v1481316359996" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen style="height: 600px;"></iframe>
								<!--<div data-address="Kusgaon, Lonavala, Maharashtra 410401" id="google-map"></div>-->
						</div>
						<div class="col-md-6">
							<div class="contact-form-cont">
								<!-- TITLE -->
								<div class="mb-40">
									<h2 class="section-title">CONTACT <span class="bold">US</span></h2>
								</div><!-- CONTACT FORM -->
								<div class="">
									<form action="contact_submit.php" id="contact-form" method="post" name="contact-form">
										<div class="row">
											<div class="col-md-12 mb-30">
												<!-- <label>Your name *</label> -->
												<input class="form-control" data-msg-required="Please enter your name." id="name" maxlength="100" name="name" placeholder="NAME" required="" type="text" value="">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 mb-30">
												<!-- <label>Your email address *</label> -->
												<input class="form-control" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." id="email" maxlength="100" name="email" placeholder="EMAIL" required="" type="email" value="">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 mb-40">
												<!-- <label>Message *</label> -->
												<textarea class="form-control" data-msg-required="Please enter your message." id="message" maxlength="5000" name="message" placeholder="MESSAGE" required="" rows="3"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<input class="button medium gray" data-loading-text="Loading..." type="submit" value="SEND MESSAGE">
											</div>
										</div>
									</form>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-danger hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- DIVIDER -->
			<hr class="mt-0 mb-0">
			<!-- CONTACT INFO SECTION 1 -->
			<div class="page-section p-110-cont grey-light-bg" id="contact-link">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="cis-cont">
								<div class="cis-icon"></div>
								<div class="cis-text">
									<h3><span class="bold">Dr. V. V. Shinde</span>&nbsp;&nbsp;<small class="bold">(Organising Secretary)</small></h3>
									<p>Contact No. : (+91-9762051751)<br>
									Email: vvshinde.sit@sinhgad.edu</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="cis-cont">
								<div class="cis-icon"></div>
								<div class="cis-text">
									<h3><span class="bold">Prof. A.G. Kamble</span>&nbsp;&nbsp;<small class="bold">(Convener)</small></h3>
									<p>Contact No. : ( +91- 9422984326)<br>
									E-mail : agkamble.sit@sinhgad.edu</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="cis-cont">
								<div class="cis-icon"></div>
								<div class="cis-text">
									<h3><span class="bold">Prof. L.P.Puranik</span> &nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
									<p>Contact No. : (+91-9822008592)<br>
									E-mail: lppuranik.sit@sinhgad.edu</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-2 col-md-4 col-sm-6">
							<div class="cis-cont">
								<div class="cis-icon"></div>
								<div class="cis-text">
									<h3><span class="bold">Prof. A.P. Ogale</span> &nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
									<p>Contact No. : (+91-7798653811)<br>
									E-mail: apogale.sit@sinhgad.edu</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="cis-cont">
								<div class="cis-icon"></div>
								<div class="cis-text">
									<h3><span class="bold">Prof. S.V. Karankoti</span> &nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
									<p>Contact No. : (+91-8446588182)<br>
									E-mail: svkarankoti.sit@sinhgad.edu</p>
								</div>
							</div>
						</div>
					</div>
					<hr style="border-top: 1px solid #bdbdbd">
					<div class="row">
						<div class="col-md-offset-2 col-md-8 col-sm-12">
							<h3><span class="bold"></span></h3>
							<center>
								<h3>Mailing Address</h3>
							</center>
							<p style="text-align: center"><span class="bold">Convener, NCIME-2017, Mechanical Engineering Department, Sinhgad Institute of Technology, STES Campus,<br>
							Gat No 309/310, Near Mumbai-Pune Expressway, Kusgaon (Bk), Lonavala-410401, Maharashtra State.<br>
							Website: - www.sinhgad.edu Phone : 02114-304360</span></p><span class="bold"></span>
						</div>
					</div>
				</div>
			</div><?php require_once ("include_footer.php"); ?><!-- BACK TO TOP -->
			<p id="back-top"><span class="bold"><a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a></span></p>
		</div><!-- End BG -->
	</div><!-- End wrap --><?php require_once ("include_js.php"); ?><!-- GOOLE MAP -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDzf6Gmc9u7rr2JHijOERAmC_j0gWYtR2c" type="text/javascript">
	</script> 
	<script src="js/gmap3.min.js" type="text/javascript">
	</script>
</body>
</html>