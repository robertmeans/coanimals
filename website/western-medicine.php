<?php require('_includes/head.php'); ?>

<body>
<!-- <div id="top-of-page"></div> -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- <img class="logo sm-gone" src="_images/coanimals-logo.png"> -->
<header id="hero-alt">
<?php require('_includes/nav.php'); ?>
<img class="head-img" src="_images/dog-resting-amongst-mountains-alt.jpg" alt="Dog resting amongst mountains">
<img class="head-img-mobile" src="_images/dog-resting-amongst-mountains-alt_mobile.jpg" alt="Dog resting amongst mountains">
</header>

<section id="western-medicine" class="cf">
  <h1 class="alt-h1">Western Medicine</h1>
	<div class="western-left">
		<h3>Wellness Examination</h3>
		<ul>
			<li>Diagnostic Testing</li>
			<li>Bloodwork</li>
			<li>Urinalysis</li>
			<li>Fecals</li>
			<li>Vaccinations</li>
			<li>Behavior Counseling</li>
		</ul>
	</div>
	<div class="western-right">
		<h3>Surgery</h3>
		<ul class="mobile-pad">
			<li>Spays</li>
			<li>Neuters</li>
			<li>Abdominal Surgery</li>
			<li>Wound Repair</li>
			<li>Dentistry</li>
		</ul>
	</div>
</section>




<?php require('_includes/footer.php'); ?>

<script src="js/nav.js?<?php echo time(); ?>"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>