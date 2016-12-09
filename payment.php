<!DOCTYPE html>
<html>
 	
    <?php
        require_once ("include_check_user.php");
    ?>

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
                <h1 class="page-title">Payment Page</h1>
              </div>
               
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><span class="bread-current">Payment</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
 
        <!-- CONTAINER -->
        <div class="container p-100-cont">
            <h4 class="pb-10 pt-20" style="text-align:center">Pay<a href="login.php" class="pull-right">Logout</a></h4>

			  <div class="row mb-30">
            <div class="col-md-12">
              <div class="tabs-3">
                <ul class="nav nav-tabs bootstrap-tabs">
                  <li class="active"><a href="#demand_draft" class="a-inv" data-toggle="tab" aria-expanded="true">DEMAND DRAFT</a></li>
                  <li class=""><a href="#account_transfer" class="a-inv" data-toggle="tab" aria-expanded="false">ACCOUNT TRANSFER</a></li>
                  <li class=""><a href="#online_payment" class="a-inv" data-toggle="tab" aria-expanded="false">ONLINE PAYMENT</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="demand_draft">
                      <h3>DD in favour of <em><strong>‘Principal, Sinhgad Institute of Technology’</strong></em></h3>
                      <p>After sending the DD, please fill in the Details of the same in the form and Preceed.</p>
                      <form action="add_dd.php" method="post">
                        <div class="row mt-30">
                          <div class="col-md-6 col-xs-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter the DD Number." maxlength="100" class="form-control" name="dd_number" id="name" placeholder="DD Number" required aria-required="true">
                          </div>
                            
                            <div class="col-md-5 col-md-offset-1 col-xs-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="number" value="" data-msg-required="Please enter the DD Amount." maxlength="100" class="form-control" name="dd_amount" id="name" placeholder="Amount" required aria-required="true">
                          </div>
                        </div>
                          <div class="row">
                          <div class="col-md-8 col-xs-12 mb-30">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter the Bank Name." maxlength="100" class="form-control" name="dd_bank_name" id="name" placeholder="Bank Name" required aria-required="true">
                          </div>
                            
                            <div class="col-md-3 col-md-offset-1 col-xs-12 mb-30">
                            <button type="success" class="button medium green btn-4 btn-4cc" href="#">Complete Payment&emsp;&emsp;<span aria-hidden="true" class="button-icon-anim icon_lock-open_alt"></span></button>
                          </div>
                        </div>
                      </form>
                      
                  </div>
                  <div class="tab-pane fade" id="account_transfer">
                      <div class="col-xs-12 col-md-6 mb-30">
                      <h3>
                          Account Holder Name: <strong><em>Shri Anand Co-op bank Ltd.</em></strong><br />
                          Bank Name: <strong><em>Cosmos Co. Op. Bank Ltd.</em></strong><br />
                          Current A/C No. : <strong><em>006204301200049</em></strong><br />
                          Branch Name: <strong><em>Chinchwad</em></strong><br />
                          IFSC Code: <strong><em>COSB0000006</em></strong><br />
                          MICR: <strong><em>411164010</em></strong><br />
                      </h3>
                          </div>
                      <div class="col-xs-12 col-md-5 col-md-offset-1" style="border-left: #4b4e53 2px solid;">
                      <form action="add_account_transaction.php" method="post">
                        <div class="row mt-30">
                          <div class="col-xs-12">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter the Transaction ID." maxlength="100" class="form-control" name="account_transaction_id" id="name" placeholder="Transaction ID" required aria-required="true">
                          </div>
                          </div>
                           <div class="row mt-30">
                            <div class="col-xs-12">
                            <!-- <label>Your name *</label> -->
                            <input type="number" value="" data-msg-required="Please enter the Transaction Amount." maxlength="100" class="form-control" name="account_transaction_amount" id="name" placeholder="Amount" required aria-required="true">
                          </div>
                        </div>
                          <div class="row mt-30">
                          <div class="col-xs-12">
                            <!-- <label>Your name *</label> -->
                            <input type="text" value="" data-msg-required="Please enter the Transaction Date." maxlength="100" class="form-control" name="account_transaction_date" id="name" placeholder="Transaction Date" required aria-required="true">
                          </div>
                          </div>
                            <div class="row mt-30">
                            <div class="col-xs-12">
                            <button type="success" class="button medium green btn-4 btn-4cc pull-right" href="#">Complete Payment&emsp;&emsp;<span aria-hidden="true" class="button-icon-anim icon_lock-open_alt"></span></button>
                          </div>
                        </div>
                      </form>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="online_payment">
                    <div class="col-xs-12">
                      <h3 class="text-center">Feature Coming Soon.</h3>
                      </div>
                  </div>
                </div>
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