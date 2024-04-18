<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Event</title>
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link rel="stylesheet" href="css/typo.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
	<link href="css/ihover.css" rel="stylesheet">
	<link href="css/widget.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/jquery.sidr.dark.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/color.css" type="text/css" media="all"> -->
</head>
<body>
<div id="wrapper">
	<div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
    </div>
	<header id="kode-header" >
		<strong class="kode-logo">
			<a href="index.html"><img src="images/logo.png" alt=""></a>
		</strong>
		<nav class="kode-nav" id="navigation">
			<ul>
				<li class="active"><a href="index.html">home</a></li>
				
				<li><a href="about-us.html">About us</a></li>
				<li><a href="#">Services</a>
					<ul>
						<li><a href="activations.html">Activation</a></li>
						<li><a href="events.html">Events</a></li>
						<li><a href="exhibitions.html">Exhibitions</a></li>
						<li><a href="retail.html">Retail</a></li>
						<li><a href="rural-activation.html">Rural Activation</a></li>
					</ul>
				</li>
				<li><a href="#">Gallery</a>
					<ul>
						<li><a href="activation-gallery.html">Activation</a></li>
						<li><a href="events-gallery.html">Events</a></li>
						<li><a href="exhibitions-gallery.html">Exhibitions</a></li>
						<li><a href="retail-gallery.html">Retail</a></li>
						<li><a href="rural-activation-gallery.html">Rural Activation</a></li>
					</ul>
				</li>
				<li><a href="contact-us.php">contact us</a></li>
			</ul>
		</nav>
		<div class="col-right">
			<ul class="header-social">
				<li><a href="#" data-toggle="tooltip" title="Facebook" data-placement="bottom"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Twitter" data-placement="bottom"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Linkedin" data-placement="bottom"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Google Plus" data-placement="bottom"><i class="fa fa-google-plus"></i></a></li>
            </ul>
			<a href="#" class="button-member">Become A member</a>
		</div>
	</header>
	<div class="content">
		<!-- Kode-Header End -->
		<div class="sub-header">
			<!-- SUB HEADER -->
		</div>
		<!-- Kode-Slider End -->
		<!--Kode-our-speaker-heading start-->
		<div class="Kode-page-heading">
			<div class="container">
				<!--ROW START-->
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2>Contact Us</h2>
					</div>
					<div class="col-md-6 col-sm-6">
						<ul>
							<li>
								<a href="#"><i class="fa fa-home"></i>Home</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<!--ROW END-->
			</div>
		</div>
		<!--Kode-our-speaker-heading End-->
		<div class="kode-blog-style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
                        <div class="kode-contact-heading">
							<h4>Get in touch</h4>
							<span class="border-left"></span>
							
						</div>
						<div class="kode-contact-area col-md-12">
                             <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }                        
                        	?>				
						</div>
					</div>


					<div class="col-md-4">
                    	<div class="kf_aside_folwer">
                            <ul>
                                <li>
                                    <div class="like_fb">
                                        <img src="images/call.jpg">
                                    </div>
                                    <div class="like_amount">
                                        <p>Phone</p>
                                        <span><a href="tel:(+91) 999 964 5320">(+91) 999 964 5320</a></span>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="like_fb">
                                       	<img src="images/mail.jpg">
                                    </div>                                    
                                    <div class="like_amount">
                                        <p>Email</p>
                                        <span><a href="mailto:pk796395@gmail.com" style="text-transform: none;">gaurav@theampersand.in</a></span>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="like_fb">
                                        <img src="images/location.jpg">
                                    </div>
                                    <div class="like_amount like_amount_1">
                                        <p>Address</p>
                                        <span style="text-transform: none;"> RZ-61K, S/F. Flat No.3. Vashist Park, Pankha Road New Delhi. 110046</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer">
		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-9 col-xs-12 footer_cols_1">
							<h3>Contact Us</h3>
							<ul class="address-nav">
								<li><i class="fa fa-map-marker"></i> RZ-61K, S/F. Flat No.3. Vashist Park, Pankha Road New Delhi. 110046</li>
								<li><i class="fa fa-envelope-o"></i><a href="mailto:Gaurav@theampersand.in">gaurav@theampersand.in</a></li>
								<li><i class="fa fa-phone"></i> <a href="tel:(+91) 999 964 5320">(+91) 999 964 5320</a></li>
							</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.017093381162!2d77.08126061455958!3d28.629249790981515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04beea21f643%3A0xcfddf7600620077f!2sOffice%20No.%20505%20A%2C%201%2C%20Janakpuri%20District%20Center%2C%20Janakpuri%2C%20New%20Delhi%2C%20Delhi%20110058!5e0!3m2!1sen!2sin!4v1601375307901!5m2!1sen!2sin" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Copyright © 2020 Event. and Developed by It Design</p>
					</div>
				</div>
			</div>
			<div class="back-to-top">
				<a href="#"><i class="fa fa-arrow-up"></i></a>
			</div>
		</div>
	</footer>
</div>
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-filterable.js"></script>
<script src="js/waypoints-min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/jquery.downCount.js"></script>
<script src="js/ie.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/custom.js"></script> -->
</body>
</html>