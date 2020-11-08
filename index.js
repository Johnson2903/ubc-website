$(document).ready(function(){ 
    //  $('.back-to-top').hide();
    //    $(".navbar").click(function(){
    //     // $('.back-to-top').show('slow');
    //     $(".back-to-top").fadeIn(3000);

    //    })
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
          $('.ubc-nav').css("background-color","white")
         } 
        else {
          $('.ubc-nav').css({"background": "#F0F0F0"});
        //   $(".ubcnav-text").css({"color":"white"});
        }
      });
       
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('.back-to-top').fadeIn('slow');
          // $('').css("border","2px solid white");
             $(".back-to-top").css({"border":"2px solid white"});
        } else {
          $('.back-to-top').fadeOut('slow');
        }
      });
      
});

