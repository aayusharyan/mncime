<?php
$page_link_array = explode ('/', $_SERVER['REQUEST_URI']);
$page_link = $page_link_array [(count ($page_link_array) - 1)];
?>


    <header id="nav" class="header header-1 no-transparent mobile-no-transparent">

        <div class="header-wrapper">
            <div class="container-m-30 clearfix">
                <div class="logo-row">

                    <!-- LOGO -->
                    <div class="logo-container-2">
                        <div class="logo-2">
                            <a href="index.html" class="clearfix">
                                <img src="assets/logo.png" class="logo-img" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="menu-btn-respons-container">
                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
								<span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
							</button>
                    </div>
                </div>
            </div>

            <!-- MAIN MENU CONTAINER -->
            <div class="main-menu-container">

                <div class="container-m-30 clearfix">

                    <!-- MAIN MENU -->
                    <div id="main-menu">
                        <div class="navbar navbar-default" role="navigation">

                            <!-- MAIN MENU LIST -->
                            <nav class="collapse collapsing navbar-collapse right-1024">
                                <ul class="nav navbar-nav">

                                    <!-- MENU ITEM -->
                                    <li class="<?= ($page_link == "index.php")?"current":""; ?>">
                                        <a href="index.php">
                                            <div class="main-menu-title">HOME</div>
                                        </a>
                                    </li>

                                    <!-- MENU ITEM -->
                                    <li class="parent <?= (($page_link == "conference_theme.php") || ($page_link == "schedule.php") || ($page_link == "imp_dates.php") || ($page_link == "benifits_conference.php") || ($page_link == "advisory_committee.php") || ($page_link == "review_committee.php") || ($page_link == "about_SIT.php"))?"current":""; ?>">
                                        <a href="#">
                                            <div class="main-menu-title">ABOUT</div>
                                        </a>
                                        <ul class="sub">
                                            <li class="parent <?= (($page_link == "conference_theme.php") || ($page_link == "schedule.php") || ($page_link == "imp_dates.php") || ($page_link == "benifits_conference.php") || ($page_link == "advisory_committee.php") || ($page_link == "review_committee.php"))?"current":""; ?>">
                                                <a href="#">ABOUT CONFERENCE</a>
                                                <ul class="sub">
                                                    <li><a href="conference_theme.php">CONFERENCE THEME</a></li>
                                                    <li><a href="schedule.php">SCHEDULE</a></li>
                                                    <li><a href="imp_dates.php">IMPORTANT DATES</a></li>
                                                    <li><a href="benefits_conference.php">BENEFITS OF CONFERENCE</a></li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <a href="#">EDITORIAL BOARD &amp; SPEAKERS</a>
                                                <ul class="sub">
                                                    <li><a href="advisory_committee.php">Advisory Committee</a></li>
                                                    <li><a href="review_committee.php">Review Committee</a></li>
                                                    <li><a href="#">Keynote Speakers</a></li>
                                                </ul>
                                            </li>
                                            <li class="parent">
                                                <a href="#">Organising &emsp;Committee</a>
                                                <ul class="sub">
                                                    <li><a href="#">Chief Patron</a></li>
                                                    <li><a href="#">Patron</a></li>
                                                    <li><a href="#">Organising Secretary</a></li>
                                                    <li><a href="#">Convenor</a></li>
                                                    <li><a href="#">Coordinators</a></li>
                                                    <li><a href="#">Committee Members</a></li>
                                                </ul>
                                            </li>
                                            <li class="<?= ($page_link == "about_SIT.php")?"current":""; ?>">
                                                <a href="about_SIT.php">About SIT</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="parent <?= (($page_link == "paper_sub_guide.php") || ($page_link == "listeners_guide.php") || ($page_link == "publication_ethics.php") || ($page_link == "paper_selection_process.php") || ($page_link == "copyright.php"))?"current":""; ?>">
                                        <a href="#">
                                            <div class="main-menu-title">JOURNALS</div>
                                        </a>
                                        <ul class="sub">
                                            <li class="parent">
                                                <a href="#">Journals &amp;&emsp;&emsp;&emsp;Publishing Bodies</a>
                                                <ul class="sub">
                                                    <li><a href="#">Scopus Indexed Journals</a></li>
                                                    <li><a href="#">Web of Science Indexed Journals</a></li>
                                                    <li><a href="#">Thomson Reuters Indexed Journals</a></li>
                                                    <li><a href="#">Google Indexed Journals</a></li>
                                                </ul>
                                            </li>
                                            <li class="parent <?= (($page_link == "paper_sub_guide.php") || ($page_link == "lieteners_guide.php") || ($page_link == "publication_ethics.php") || ($page_link == "paper_selection_process.php") || ($page_link == "copyright.php"))?"current":""; ?>">
                                                <a href="#">Author's Guidelines</a>
                                                <ul class="sub">
                                                    <li><a href="paper_sub_guide.php">Paper Submission Guidelines</a></li>
                                                    <li><a href="listeners_guide.php">Guidelines for Listeners/Attendee</a></li>
                                                    <li><a href="paper_selection_process.php">Paper Selection Process</a></li>
                                                    <li><a href="publication_ethics.php">Publication Ethics</a></li>
                                                    <li><a href="#">Paper Formats</a></li>
                                                    <li><a href="copyright.php">Copyright Form</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="parent <?= (($page_link == "registration_details.php") || ($page_link == "accomodation.php") || ($page_link == "transportation.php"))?"current":""; ?>">
                                        <a href="#">
                                            <div class="main-menu-title">REGISTRATION</div>
                                        </a>
                                        <ul class="sub">
                                            <li class="">
                                                <a href="registration_details.php">Registration Details</a>
                                            </li>
                                            <li class="">
                                                <a href="accomodation.php">Accomodation</a>
                                            </li>
                                            <li class="">
                                                <a href="transportation.php">Transportation</a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="parent">
                                        <a href="#">
                                            <div class="main-menu-title">PAST CONFERENCES</div>
                                        </a>
                                        <ul class="sub">
                                            <li><a href="#">1 &nbsp;<sup>st</sup>&nbsp;NCIME - 2012</a></li>
                                            <li><a href="#">2 &nbsp;<sup>nd</sup>&nbsp;NCIME - 2013</a></li>
                                            <li><a href="#">3 &nbsp;<sup>rd</sup>&nbsp;NCIME - 2015</a></li>
                                            <li><a href="#">4 &nbsp;<sup>th</sup>&nbsp;NCIME - 2016</a></li>
                                        </ul>
                                    </li>


                                    <!-- MENU ITEM -->
                                    <li id="menu-contact-info-big" class="parent megamenu hidden-sm hidden-xs visible-lg <?= ($page_link == "contact.php")?"current":""; ?>">
                                        <a href="contact.php">
                                            <div class="main-menu-title">CONTACT US</div>
                                        </a>
                                        <ul class="sub col-md-offset-3 col-md-9" style="width: 100%;">

                                            <li class="clearfix">
                                                <div class="menu-sub-container">
                                                    <div class="col-md-4 menu-contact-info">
                                                        <ul class="contact-list">
                                                            <li class="contact-loc clearfix">
                                                                <div class="loc-icon-container">
                                                                    <span aria-hidden="true" class="icon_pin_alt main-menu-contact-icon"></span>
                                                                </div>
                                                                <div class="menu-contact-text-container">Sinhgad Institute of Technology, Lonavala</div>
                                                            </li>
                                                            <li class="contact-phone clearfix">
                                                                <div class="loc-icon-container">
                                                                    <span aria-hidden="true" class="icon_phone main-menu-contact-icon"></span>
                                                                </div>
                                                                <div class="menu-contact-text-container">02114-304360</div>
                                                            </li>
                                                            <li class="contact-mail clearfix">
                                                                <div class="loc-icon-container">
                                                                    <span aria-hidden="true" class="icon_mail_alt main-menu-contact-icon"></span>
                                                                </div>
                                                                <div class="menu-contact-text-container">
                                                                    <a class="a-mail" href="mailto:vvshinde.sit@sinhgad.edu">vvshinde.sit@sinhgad.edu</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-8 menu-map-container hide-max-960 ">
                                                        <!-- Google Maps -->
                                                        <div class="google-map-container">
                                                            <img src="images/map-line.png" alt="alt">
                                                        </div>
                                                        <!-- Google Maps / End -->
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="hidden-md hidden-lg visible-xs visible-sm <?= ($page_link == "contact.php")?"current":""; ?>">
                                        <a href="contact.php">
                                            <div class="main-menu-title">CONTACT US</div>
                                        </a>
                                    </li>
                                </ul>

                            </nav>

                        </div>
                    </div>
                    <!-- END main-menu -->

                </div>
                <!-- END container-m-30 -->

            </div>
            <!-- END main-menu-container -->


        </div>
        <!-- END header-wrapper -->

    </header>
