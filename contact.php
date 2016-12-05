<!DOCTYPE html>

<html>
 	

    <?php require_once ("include_header.php"); ?>
    <body>
	<?php require_once ("include_preloader.php"); ?>

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<?php require_once ("include_ie_warning.php"); ?>
				
				<?php require_once ("include_navbar.php"); ?>
				
        <!-- PAGE TITLE -->
        <div class="page-title-cont page-title-big grey-light-bg">
          <div class="relative container align-left">
            <div class="row">
               
              <div class="col-md-8">
                <h1 class="page-title">CONTACT US</h1>
                <div class="page-sub-title">
                </div>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">CONTACT US</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
          <!-- GOOGLE MAP & CONTACT FORM -->
          <div class="page-section">
            <div class="container-fluid">
              <div class="row">
              
                <div class="col-md-6">
                  <div class="row">
                    <div data-address="410401" id="google-map"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="contact-form-cont">
                    <!-- TITLE -->
                    <div class="mb-40">
                      <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                    </div>
                                  
                    <!-- CONTACT FORM -->
                    <div class="">
                      <form id="contact-form" action="http://abcgomel.ru/haswell-1.8.1-demo/php/contact-form.php" method="POST">
                      
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="NAME" required>
                          </div>
                        </div>
                        
                        <div class="row">    
                          <div class="col-md-12 mb-30">
                            <!-- <label>Your email address *</label> -->
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="EMAIL" required>
                            </div>
                        </div>
                    
                        <div class="row">
                          <div class="col-md-12 mb-40">
                            <!-- <label>Message *</label> -->
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-12 ">
                            <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
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
          </div>
          
          <!-- DIVIDER -->
          <hr class="mt-0 mb-0">          
          
          <!-- CONTACT INFO SECTION 1 -->
          <div id="contact-link" class="page-section p-110-cont grey-light-bg">
            <div class="container">
              <div class="row">
              
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">Dr. V. V. Shinde</span>&nbsp;&nbsp;<small class="bold">(Organising Secretary)</small></h3>
                      <p>Contact No. : (+91-9762051751)<br/>Email: vvshinde.sit@sinhgad.edu</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">Prof. A.G. Kamble</span>&nbsp;&nbsp;<small class="bold">(Convener)</small></h3>
                      <p>Contact No. : ( +91- 9422984326)<br/>E-mail : agkamble.sit@sinhgad.edu</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">Prof. L.P.Puranik </span>&nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
						<p>Contact No. : (+91-9822008592)<br/>E-mail: lppuranik.sit@sinhgad.edu</p>
                    </div>
                  </div>
                </div>
                
              </div>
				<div class="row">
              
                <div class="col-md-offset-2 col-md-4 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">Prof. A.P. Ogale </span>&nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
                      <p>Contact No.  : (+91-7798653811)<br/>E-mail: apogale.sit@sinhgad.edu</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="cis-cont">
                    <div class="cis-icon">
                    </div>
                    <div class="cis-text">
                      <h3><span class="bold">Prof. S.V. Karankoti </span>&nbsp;&nbsp;<small class="bold">(Coordinator)</small></h3>
                      <p>Contact No.  : (+91-8446588182)<br/>E-mail: svkarankoti.sit@sinhgad.edu</p>
                    </div>
                  </div>
                </div>
					
                
                
              </div>
				<hr style="border-top: 1px solid #bdbdbd">
				
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-sm-12">
						<h3><span class="bold"><center>Mailing Address</center></span></h3>
						<p style="text-align: center"> Convener, NCIME-2017, Mechanical Engineering Department, Sinhgad Institute of Technology, STES Campus,<br/>Gat No 309/310, Near Mumbai-Pune Expressway, Kusgaon (Bk), Lonavala-410401, Maharashtra State.
							<br/>Website: - www.sinhgad.edu Phone : 02114-304360 </p>
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