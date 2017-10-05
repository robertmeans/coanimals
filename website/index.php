<?php require('_includes/head.php'); ?>

<body>
<!-- <div id="top-of-page"></div> -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- <img class="logo sm-gone" src="_images/coanimals-logo.png"> -->
<header id="hero">
<?php require('_includes/nav.php'); ?>

  <section id="slogan">
    <h1>Circle of Animals</h1>
    <h2>Providing Options and Guidance</h2>
  </section>
</header>

<section id="about">
  
</section>



<section id="contact">
  <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script>
  <h2>Contact</h2>
  <div id="contact-form">
    <div class="left-side">
      <p>P.O. Box 1266</p>
      <p>Evergreen, CO 80437</p>
      <p>&nbsp;</p>
      <p>Phone: (303) 653-8388</p>
      <p>&nbsp;</p>
      <p>Service area includes Evergreen, Conifer, Indian Hills, Littleton, Ken Caryl, Bailey, Pine and Idaho Springs</p>
      <p>&nbsp;</p>
      <p>Please call or email with any questions. Some questions are complex and require more than can be addressed via e-mail so Dr. Norton may call you to discuss your concern.</p>
      <p>&nbsp;</p>
      <p>Thank you for your inquiries.</p>
    </div>
    <div class="right-side">
    <?php require('_includes/contact-form-processing.php'); ?>

      </div>
  </div>
</section><!-- #contact -->






<script src="js/nav.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>