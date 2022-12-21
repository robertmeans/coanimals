<?php require('_includes/testing-head.php'); ?>

<body>
<!-- <div id="top-of-page"></div> -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


<header id="hero">
<?php require('_includes/nav.php'); ?>

  <section id="slogan">
    <h1>Circle of Animals, LLC</h1>
    <h2>Providing Options and Guidance</h2>
  </section>
</header>

<section id="about" class="cf lh">
<h2 class="section-header">About</h2>
  <div class="about-left">
    <img class="amy-pic" src="_images/Dr-Amy-Norton.jpg">
    <h3>Dr. Amy Norton</h3>
  </div>
  <div class="about-mid">
     <p>Welcome to the Circle of Animals veterinary practice. We offer both in-home services and in-clinic appointments. Our in-home mobile veterinary service area includes the foothills and the west side of Denver. Dr. Amy Norton has 31 years of veterinary experience working with all types of animals. She specializes in providing options and guiding you through them to help you create the best, individualized plan for you and your pets.</p>
  </div>
  <div class="about-right">
    <h3>Services Include:</h3>
    <ul>
      <li>House calls vs. In-clinic visits</li>
      <li>Chiropractic and Osteopathy</li>
      <li>In-Home Euthanasia</li>
      <li>Hospice</li>
      <li>Homeopathy</li>
      <li>Western Medicine</li>
      <li>Surgery</li>
    </ul>
  </div>
</section>



<section id="contact">
  <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script>
  <h2 class="section-header">Contact</h2>
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

    <form id="contactForm" method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
              <label class="text" for="name"><i class="fa fa-star" aria-hidden="true"></i> First &amp last name</label>
              <input name="name" type="text" id="name" tabindex="10" />
            </li>
            <li>
              <label class="text" for="phone"><i class="fa fa-star" aria-hidden="true"></i> 10-Digit Phone Number</label>
              <input name="phone" type="tel" id="phone" tabindex="20" />
            </li>
            <li>
              <label class="text" for="email"><i class="fa fa-star" aria-hidden="true"></i> Email</label>
              <input name="email" type="email" id="email" tabindex="20" />
            </li>
            <li>
              <label class="text" for="message">Message</label>
              <textarea noresize name="message" id="message" tabindex="30"></textarea>
            </li>
            <li id="errors-go-here"></li>
            <li>
              <input type="submit" id="sendit" name="sendit" class="submit-btn" value="Send">
            </li>     
        </ul> 
    </form>


      </div>
  </div>
</section><!-- #contact -->


<?php require('_includes/footer.php'); ?>

<script src="js/nav.js?<?php echo time(); ?>"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>