var isShowPanel = false;

function imgOnClick(id){
  isShowPanel = false;
  $('.confirm-adopt-button').css("display", "block");
  $('.confirm-no, .confirm-yes').css("display", "none");
    var xid = "#myModal"+id;
    $(xid).css("display", "block");
}
$( document ).ready(function() {        

    $('.close-1').click(()=>{
        $('.modal').css('display','none');
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).click((event)=>{
        if ($(event.target).is($("[id^='myModal']"))) {
          $('.modal').css('display','none');
        }
    });

    $('#selectPet').change(function(){
      window.location = "/filterPet/" + this.value;
    });
});

// scrolling nav tapi ngga ngefek.
(function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 54)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 54
    });
  
  })(jQuery);
  
  function confirmationPanel()
  {
    if(!isShowPanel){
      isShowPanel = true;
      $('.confirm-adopt-button').css("display", "none");
      $('.confirm-no, .confirm-yes').css("display", "inline-block");
    }
    else{
      isShowPanel = false;
      $('.confirm-adopt-button').css("display", "block");
      $('.confirm-no, .confirm-yes').css("display", "none");
    }
  }

  function confirmAdopt(id){        
    window.location = "/adoptIt/"+ id;
  }//

