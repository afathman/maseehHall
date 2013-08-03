<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Contact</title>
	<!-- <meta name="robots" content="index,follow"> -->
	<meta name="description" content="Get in touch!">
	<meta name="keywords" content=""/>
	<meta name="author" content="Austin Fathman and William Qian">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

	<!-- ### Stylesheets ### -->
	<link rel="stylesheet" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="css/media-queries.css" media="screen" />
	<!-- Fancybox styles -->
	<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />
	<!--  Revolution Slider styles -->
	<link rel="stylesheet" href="js/rs-plugin/css/settings.css" media="screen" />
	<!-- Google fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,800" />
	<!-- ### JavaScripts ### -->
	<script src="js/jquery.min.js"></script>
	<!-- Add HTML5 support for older IE browsers -->
	<!--[if lt IE 9]> 
		<script src="js/html5.min.js"></script>
		<script src="js/selectivizr-and-extra-selectors.min.js"></script>
	<![endif]-->
	<script src="js/modernizr.custom.js"></script>
	<!-- sound manager -->
	<script src="js/jquery.mplayer.min.js"></script>
	<!-- /sound manager -->
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<!-- Sliders -->
	<!-- jQuery Nivo slider -->
	<script src="js/jquery.nivo.slider.pack.js"></script>
	 <!-- jQuery Revolution Slider  -->	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- /Sliders -->
	<script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.touchSwipe-1.2.5.min.js"></script>
	<script src="js/jquery.sharrre-1.3.2.min.js"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<!-- Fancybox -->
	<script src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<!-- /Fancybox -->
	<!-- custom scripts -->
	<script src="js/custom.js"></script>
</head>
<body class="page-contact">
<!--[if lte IE 7]>
   <div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an ten year old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the web... I mean this is MIT. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
   <a href="http://google.com/chrome">Get a legit browser (Google Chrome)</a></p></div>
<![endif]-->
<!-- header -->
<header id="header">
    <div class="container">
    	<!-- logo -->
    	<a href="index.php" id="logo">
    	    <img src="img/logo.png" alt="Logo">
    	</a>
    	<!-- /logo -->
	<!-- nav -->
	<nav id="main-nav">
		<ul>
			<li>
				<a href="index.php">Home</a>
			</li>			<li>
				<a href="about.php">About</a>
                <ul>
                <li> 
                	<a href="about.php">About Maseeh</a>
                </li>
                <li>
                   <a href="staff.php">Staff</a>
                </li>
                <li>
                	<a href="prospective.php">Prospective Students</a>
                </li>
              </ul>
			</li>
			<li>
				<a href="events.php">Events</a>
			</li>
			<li>
				<a href="gallery.php">Gallery</a>
			</li>
<li> <a href="residents.php">Resident Portal</a>
</li>
			<li class="current">
				<a href="contact.php">Contact</a>
			</li>
		</ul>
	</nav>
	<!-- /nav -->
    </div>
</header>
<!-- /header -->
<!-- page header -->
<section id="page-header">
	<div class="container clearfix">
		<hgroup>
			<h1 class="page-title">Contact</h1>
			<h2 class="page-subtitle">Get in touch with us.</h2>
		</hgroup>
		<!-- share it -->
		<div id="share-wrap">
			<div id="share" data-url="contact.php" data-text="Contact" data-title="share"></div>
		</div>
		<!-- /share it -->
		<hr>
	</div>
</section>
<!-- /page header -->
<section id="main-content" class="container clearfix">
	<!-- boxes -->
	<section class="content">
		<!-- left -->
		<article class="col-1-3">
			<h2 class="heading-icon contact">Contact<br><span class="color">let's keep in touch.</span></h2>
			<ul class="details none">
				<li>
					<span>Address</span>
					<div>305 Memorial Dr., Cambridge, MA 02139</div>
				</li>
				<li>
					<span>Email</span>
					<div><a href="#">maseeh@mit.edu</a></div>
				</li>
				<li>
					<span>Tel.</span>
					<div> (617) 324-4935</div>
				</li>
			</ul>
		</article>
		<!-- /left -->
		<!-- right -->
		<article class="col-2-3 last">
			<form action="plugins/contact-form.php" method="post" class="form contact-form">
			
				<p class="input">
					<label for="contact-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="contact-name" required>
				</p>

				<div class="input">
					<label for="contact-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="contact-email" required>
				</div>
				
				<p class="input">
					<label for="contact-subject"><strong>Subject</strong></label>
					<input type="text" name="subject" value="" id="contact-subject">
				</p>

				<p class="textarea">
					<label for="contact-message"><strong>Your Message</strong> (required)</label>
					<textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
				</p>
			
				<div class="hidden">
					<label for="contact-spam-check">Do not fill out this field this is spam check.</label>
					<input name="anty_spam" type="text" value="" id="contact-spam-check" />
				</div>

				<input type="submit" value="Submit Message">
	
				<div class="clear"></div>
			</form>
		</article>
		<!-- /right -->
	</section>
	<!-- /boxes -->
</section>
<!-- Google Maps -->
<section id="gmap">
	<p class="container">Please enable your JavaScript in your browser, to view our location.</p>
</section>
<!-- /Google Maps --><!-- footer-top -->
<section id="footer-top">
	<div class="container clearfix">
		<div class="col-2-3">	<ul class="contact">
				<li class="address">305 Memorial Dr., Cambridge, MA 02139</li>
				<li class="phone">(617) 324-4935</li>
				<li class="email"><a href="mailto:maseeh@mit.com">maseeh@mit.edu</a></li>
			</ul>
		</div>
		<div class="col-1-3 last">
			 <!-- social icons -->
			<div class="social-icons">				<a href="https://twitter.com/Maseeh_Hall" class="social-icon twitter"></a>
				<a href="https://www.facebook.com/groups/106199359471262/" class="social-icon facebook"></a>
				<a href="#" class="social-icon youtube"></a>
			</div>	
<!-- /social icons -->
		</div>
	</div>
</section>
<!-- /footer-top -->
<!-- footer -->
<footer id="footer" class="clearfix">
	<section class="container clearfix">
		<div class="col-1-2">
			
			<!-- footer-nav -->
				<nav id="footer-nav" class="clearfix">
					<ul>
						<li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
						<li><a href="residents.php">Residents</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
		            <!-- /footer-nav --> <div class="copyright">
		            	<img src="img/logoSmall.png" alt=""> Copyright &copy; 2013<script language="JavaScript">
var d=new Date(); 
yr=d.getFullYear();
if (yr!=2013)
document.write("- "+yr);
</script> - Maseeh Hall. All rights reserved.
		            </div>
		</div>
		<div class="col-1-2 last">
			<!-- footer twitter -->
			<div id="footer-twitter">
				<!-- twitter feed -->
				<ul class="tweets">
					<li>Oops, our Twitter feed is unavailable at the moment - <a href="https://twitter.com/Maseeh_Hall">Follow us on Twitter!</a></li>
				</ul>	
				<!-- /twitter feed  -->
			</div>
			<!-- /footer twitter -->
		</div>
		<!-- twitter icon -->
		<a href="https://twitter.com/Maseeh_Hall" class="twitter-button"></a>
	</section>
</footer>
<!-- /footer -->
</body>
</html>