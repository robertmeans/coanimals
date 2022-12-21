$(function() {
  var topoffset = 0; //variable for scrolling effects
  var isTouch = 'ontouchstart' in document.documentElement;
  var wheight = $( window ).height(); //get the height of the window

  $('.fullheight').css('height', wheight); //set to window tallness 

  //adjust height of .fullheight elements on window resize
  $( window ).resize(function() {
    var wheight = $( window ).height();
    $('.fullheight').css('height', wheight); //set to window tallness 
  });


  $(window).scroll(function(){
    var windowpos = $(window).scrollTop()+topoffset+150; 
    // added 100 so active-nav would trigger before next div had to get to
    // top:0 but yet still allow the nav to position at top:0 when
    // navigating between divs


    $('nav li a').removeClass('active-nav');

    // if ( windowpos > $('#top-of-page').offset().top) {
    //     $('nav li a').removeClass('active-nav');
    //     $('a[href$="#top-of-page"]').addClass('active-nav');
    // }

    if ( windowpos > $('#about').offset().top) {
        $('nav li a').removeClass('active-nav');
        $('a[href$="#about"]').not('.no-active-nav').addClass('active-nav');
    }
    if ( windowpos > $('#contact').offset().top) {
        $('nav li a').removeClass('active-nav');
        $('a[href$="#contact"]').addClass('active-nav');
    }
  });


}); //function



$(document).ready(function(){
  $(".click").click(function(){
    
    var target = $(this).parent().children(".expand");
    $(target).slideToggle();
  });
});

$('#easy-as div a').click(function(){
    $(this).find('i').toggleClass('fa-minus fa-plus')
});

// stop page from jumping to top when anchor is set to "#"
// currently in use with SEO Strategies and Pricing links.
$('a.no-default').click(function(e)
{
    // Special stuff to do when this link is clicked...

    // Cancel the default action
    e.preventDefault();
});




var btt = $('.back-to-top');

btt.on('click', function(e) {
$('html, body').animate({
    scrollTop: 0
  }, 1500, "easeOutQuart");

  e.preventDefault();
});

$(window).on('scroll', function () {
  var self = $(this),
    height = self.height(),
    top = self.scrollTop();

    if(top > (.2 * height)) {
        if (!btt.is(':visible')) {
          btt.show();
        }
      } else {
          btt.hide();
        }
  }); 


function overlay() {
  el = document.getElementById("overlay");
  el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible"; 
}




$(document).ready(function() {
  $(document).on('click','#sendzoo', function() {

    $.ajax({
      dataType: "JSON",
      url: "testing-contact-form-processing.php",
      type: "POST",
      data: $('#contactForm').serialize(),
      beforeSend: function(xhr) {
        $('#errors-go-here').html('<div><p><img src="_images/loading.gif"></p><p>Transferring... Sit tight - or hang loose for a moment. Even if it looks like nothing is happening, I\'m here in the background trudging along making connections. I mean really, I\'ve seen it take upwards of a minute to process. Please don\'t ask me why. I\'m only text on a screen. I cannot answer questions.</p></div>');
        $('#errors-go-here').addClass('sending-msg');
      },
      success: function(response) {
        // console.log(response);
        if(response) {
          console.log(response);
          if(response['signal'] == 'ok') {
            $('#right-side').html('<div class="success-sent"><p>Your submission was successfully sent!</p><p>We will see it soon and we are quick to reply.</p></div>');
            // $('#pwidgetu21390').addClass('success-sent');
          } else {
            if(response['signal'] == 'fix-email') {
              $('#errors-go-here').html('<div>' + response['msg'] + '</div>');
              $('#errors-go-here').removeClass('sending-msg');
              $('#name').removeClass('invalid-field');
              $('#comments').removeClass('invalid-field');
              $('#errors-go-here').addClass('error-found');
              $('#email').addClass('invalid-field');
            }
            if(response['signal'] == 'fix-required') {
              $('#errors-go-here').html('<div>' + response['msg'] + '</div>');
              $('#errors-go-here').removeClass('sending-msg');
              $('#errors-go-here').addClass('error-found');
              $('#name').addClass('invalid-field');
              $('#email').addClass('invalid-field');
              $('#comments').addClass('invalid-field');
            }
            // $('#errors-go-here').html('<div>' + response['msg'] + '</div>');
          }
        } 
      },
      error: function() {
        $('#errors-go-here').removeClass('sending-msg');
        $('#errors-go-here').addClass('error-found');
        $('#errors-go-here').html('<div>There was an error somehow, somewhere and I don\'t think that worked. Refresh this page and try again or give us a call. If the problem persists this indicates a problem in the matrix and this form is merely gesturing from the void. While we apologize for this inconvenience, the void yawns with indifference.</div>');
      }, 
      complete: function() {

      }
    })
  });
});




$(document).ready(function() {
  $(document).on('click', '#sendit', function() {

    // e.preventDefault();
    // alert('yo!');
    // console.log('foofoo');

    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var message = $('#message').val();

    var data = 'name=' + name + '&email=' + email;
    // console.log(data);

    $.ajax({
      type: "POST",
      url: "testing-contact-form-processing.php",
      data: data,
      success: function() {
        alert("whoot woot!");
      }
    });
  });
});