// Hamburger Menu
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