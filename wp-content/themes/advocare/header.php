<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(' | ', true, 'right'); ?></title>

<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
	$(document).ready(function() {
		$('#main').delay(500).fadeIn(500);
		$('#container').hover(function() {
    $('#img1').slideToggle(500, 'linear');
    $('#img2').slideToggle(500, 'linear');
});
	
});  
</script>
<link rel="stylesheet" type="text/css" href="http://advocarehcs.com/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://advocarehcs.com/css/print.css" media="print" />
<link rel="shortcut icon" type="image/x-icon" href="http://advocarehcs.com/favicon.ico">
</head>
<?Php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84403624-1', 'auto');
  ga('send', 'pageview');

</script>
<!--[if lte IE 7]>
            <p class="browsehappy" style="color:#fff;">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div id="sidebar">
	<div id="logo">
    	<a href="<?php echo get_site_url(); ?>"><img src="http://advocarehcs.com/images/logo.png" alt="Advocare Home Care Services"/></a>
        <div id="phone">406.582.5402</div>
    </div>
    <div id="nav">
    	<ul>
        	<li <?php if ($actual_link == 'http://advocarehcs.com/') {echo 'class="active"';}?>><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li <?php if (strpos($actual_link,'about') !== false) {echo 'class="active"';}?>><a href="about">about</a></li>
            <li <?php if (strpos($actual_link,'services') !== false) {echo 'class="active"';}?>><a href="services">services</a></li>
            <li <?php if (strpos($actual_link,'resources') !== false) {echo 'class="active"';}?>><a href="resources">resources </a></li>
            <li <?php if (strpos($actual_link,'faqs') !== false) {echo 'class="active"';}?>><a href="faqs">FAQs</a></li> 
            <li <?php if (strpos($actual_link,'testimonial') !== false) {echo 'class="active"';}?>><a href="testimonials">testimonials</a></li>
            <li <?php if (strpos($actual_link,'careers') !== false) {echo 'class="active"';}?> <?php if (strpos($actual_link,'job') !== false) {echo 'class="active"';}?>><a href="careers">careers</a></li>
            <li <?php if (strpos($actual_link,'contact') !== false) {echo 'class="active"';}?> <?php if (strpos($actual_link,'contact') == false) {echo 'id="contact"';}?>><a href="contact">contact</a></li>
        </ul>
        <div id="sidebarbottom">
        	<a href="http://facebook.com/advocarehcs" target="_blank" id="fb">
				<img id="img2" src="http://advocarehcs.com/images/facebook-over.jpg" alt="Follow us on Facebook!" />
            </a>
            <a href="https://plus.google.com/109327438467581899835/" target="_blank" id="gp">
				<img id="img2" src="http://advocarehcs.com/images/googleplus.png" alt="Follow us on Google Plus!" />
            </a>
        </div>
    </div>
</div>