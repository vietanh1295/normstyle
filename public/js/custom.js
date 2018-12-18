$(document).ready(function(){
// $(".navbar").mouseover(function() {
//         if(($(this).hasClass("navbar-dark"))){
//           $(this).removeClass("navbar-dark");
//           $(this).addClass("navbar-light");
//         }
//         // $(this).toggleClass("navbar-dark navbar-light");
//         $(this).toggleClass("navbar-hover");
//         $('.navbar-brand').toggleClass("navbar-brand-hover");
//     });
//     $(".navbar").mouseout(function() {
//         if(($(this).hasClass("navbar-light"))&&($(window).scrollTop() == 0)){
//           $(this).removeClass("navbar-light");
//           $(this).addClass("navbar-dark");
//         }
//         // $(this).toggleClass("navbar-dark navbar-light");
//         $(this).toggleClass("navbar-hover");
//         $('.navbar-brand').toggleClass("navbar-brand-hover");
//     });
//     $(window).scroll(function() {
//       if($(this).scrollTop() > 0){
//         if(($('.navbar').hasClass( "navbar-dark" ))){
//           $('.navbar').removeClass("navbar-dark");
//           $('.navbar').addClass("navbar-light");
//         }
//       }
//       if(($(this).scrollTop() == 0)&&!($('.navbar').is(":hover"))){
//         if(($('.navbar').hasClass( "navbar-light" ))){
//           $('.navbar').removeClass("navbar-light");
//           $('.navbar').addClass("navbar-dark");
//         }
//       }
//         $('.navbar').toggleClass("navbar-scroll", $(this).scrollTop() > 0);
//         $('.navbar-brand').toggleClass("navbar-brand-scroll",$(this).scrollTop()>0);
//     })
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