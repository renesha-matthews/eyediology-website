///////// Hamburger Menu /////////
// CodePen: https://codepen.io/waldyp/pen/aPoVZN
$(document).ready(function(){
    $('#nav-toggle').click(function(){
      if($(this).hasClass('open')){
        $(this).removeClass('open');
        $('nav.mobile').removeClass('mobile--open');
      }else{
        $(this).addClass('open');
        $('nav.mobile').addClass('mobile--open');
      }
    });
  });



  ///////// Let user know that they have successfully scubscribed to newsletter /////////
  var subscribeBtn = document.getElementsByClassName("subscribe");
  var subscribeMessage = document.createElement('p');

  subscribeMessage.id = "subscribe-message";

  subscribeMessage.innerHTML = "Successfull subscribed!";

  subscribeBtn.addEventListener("click", 
    function() {
      document.getElementById("newsletter-signup").appendChild(subscribeMessage);
    }, false
  );
  
 
  ///////// Contact Form /////////
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });

