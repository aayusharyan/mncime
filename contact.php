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

        <!-- FOOTER 2 -->
        <footer class="page-section pt-80 pb-50">
          <div class="container">
            <div class="row">
            
              <div class="col-md-3 col-sm-3 widget">
                <div class="logo-footer-cont">
                  <a href="index.html">
                    <img class="logo-footer" src="images/logo-footer.png" alt="logo">
                  </a>
                </div>
                <div class="footer-2-text-cont">
                  <address>
                    555 California str, Suite 100<br>
                    San&nbsp;Francisco, CA 94107
                  </address>
                </div>
                <div class="footer-2-text-cont">
                  1-800-312-2121<br>
                  1-800-310-1010
                </div>
                <div class="footer-2-text-cont">
                  <a class="a-text" href="mailto:info@haswell.com">info@haswell.com</a>
                </div>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>NAVIGATE</h4>
                <ul class="links-list bold a-text-cont">
                  <li><a href="index.html">HOME</a></li>
                  <li><a href="grid-system.html">GRID SYSTEM</a></li>
                  <li><a href="services.html">SERVICES</a></li>
                  <li><a href="index-portfolio.html">PORTFOLIO</a></li>
                  <li><a href="index-blog.html">BLOG</a></li>
                  <li><a href="index-shop.html">SHOP</a></li>
                  <li><a href="intro.html">PAGES</a></li>
                </ul>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>ABOUT US</h4>
                <ul class="links-list a-text-cont" >
                  <li><a href="about-us.html">COMPANY</a></li>
                  <li><a href="services.html">WHAT WE DO</a></li>
                  <li><a href="https://help.market.envato.com/hc/en-us">HELP CENTER</a></li>
                  <li><a href="http://themeforest.net/legal/market">TERMS OF SERVICE</a></li>
                  <li><a href="contact.html">CONTACT</a></li>
                </ul>
              </div>
              
              <div class="col-md-3 col-sm-3 widget">
                <h4>RECENT POSTS</h4>
                <div id="post-list-footer">

                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="blog-single-sidebar-right.html">New trends in web design</a></h3>
                  </div>
                  <div class="post-prev-info">
                    Jule 10
                  </div>
                   
                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="blog-single-sidebar-right.html">The sound of life</a></h3>
                  </div>
                  <div class="post-prev-info">
                    October 10
                  </div>
                   
                  <div class="post-prev-title">
                    <h3><a class="a-text"  href="blog-single-sidebar-right.html">Time for minimalism</a></h3>
                  </div>
                  <div class="post-prev-info">
                     September 21
                  </div>

                </div>                  
              </div>
            </div>    
            
            <div class="footer-2-copy-cont clearfix">
              <!-- Social Links -->
              <div class="footer-2-soc-a right">
                <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
              </div>
              
              <!-- Copyright -->
              <div class="left">
                <a class="footer-2-copy" href="http://themeforest.net/user/abcgomel/portfolio?ref=abcgomel" target="_blank">&copy; HASWELL 2016</a>
              </div>
              

            </div>
                    
          </div>
        </footer>
        
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			

        <?php require_once ("include_js.php"); ?>
        
	</body>

</html>		