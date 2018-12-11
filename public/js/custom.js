$(document).ready(function(){
// $(window).scroll(function(){
    //     $('nav').toggleClass('scrolled', $(this).scrollTop()>600);
    // });
    // $(".hover").mouseover(function(){
    //     // alert("aa");
    // })
    $(".navbar").mouseover(function() {
        $(this).toggleClass("navbar-dark navbar-light");
    })
    $(".navbar").mouseout(function() {
        $(this).toggleClass("navbar-dark navbar-light");
    })
    $(window).scroll(function() {
        $('nav').toggleClass('navbar-scrolled', $(this).scrollTop() > 0);
        // $(".navbar").toggleClass("navbar-dark navbar-light",$(this).scrollTop()>0);
        // $('.nav-link').css("color", "black");
    })
    $(window).resize(function(){
  if ($(window).width() >= 980){  

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
    // do something here
  } 
});  
});