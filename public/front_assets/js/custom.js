// //<![CDATA[
// $(document).ready(function(){
//     $(window).load(function() { // makes sure the whole site is loaded
//       $('.loader-container').fadeOut(); // will first fade out the loading animation
//       $('#loader-circle').delay(20).fadeOut('slow'); // will fade out the white DIV that covers the website.
//       $('body').delay(20).css({'overflow':'visible'});
//     })
//     });
  
//   //]]>
  
  
   

jQuery('.arHamberger').click(function () {
    jQuery(this).toggleClass('clicked');        
    jQuery('.arHeaderWrp').toggleClass('show_nav');   
    
    if(!$(this).hasClass("clicked")){
        $(".arHeaderWrp").removeClass('show_nav');
    }
});

  
//   $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
//     if (!$(this).next().hasClass('show')) {
//         $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
//     }
//     var $subMenu = $(this).next(".dropdown-menu");
//     $subMenu.toggleClass('show');
//     $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
//         $('.dropdown-submenu .show').removeClass("show");
//     });
//     return false;
// });



// //scroll to top botton

// $(document).ready(function(){
  
//   //Check to see if the window is top if not then display button
//   $(window).scroll(function(){
//     if ($(this).scrollTop() > 100) {
//       $('.scrollToTop').fadeIn();
//     } else {
//       $('.scrollToTop').fadeOut();
//     }
//   });
  
//   //Click event to scroll to top
//   $('.scrollToTop').click(function(){
//     $('html, body').animate({scrollTop : 0},800);
//     return false;
//   });
  
// });

// $(".menu-item-has-children").each(function(){
//   $(this).append("<span>+</span>");
// });
// $(".menu-item-has-children span").on("click", function(){
//   $(this).siblings("ul").slideToggle().toggleClass("showinMedia");
// });

// $(`.customNav [data-toggle="dropdown"]`).on("click", function(){
//   var url= $(this).attr("href");
//   window.location = url;
// });



// $(".click_to_visitnext a").on("click", function(e){
//   // Make sure this.hash has a value before overriding default behavior
//   if (this.hash !== "") {
//     // Prevent default anchor click behavior
//     event.preventDefault();

//     // Store hash
//     var hash = this.hash;

//     // Using jQuery's animate() method to add smooth page scroll
//     // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//     $('html, body').animate({
//       scrollTop: $(hash).offset().top
//     }, 800, function(){
 
//       // Add hash (#) to URL when done scrolling (default click behavior)
//       // window.location.hash = hash;
//     });
//   } // End if
// });


// $("#customModal").on('show.bs.modal', function (event) {
//   $(this).find("iframe")[0].src += "?autoplay=1"
// })

// var header = $(".bottomHeader");
// $(window).on("scroll", function(){
//   let scrTop = $(this).scrollTop();
//   if (scrTop > 100) {
//     header.addClass("sticky");
//     $("body").css({
//       "margin-top": header.height()+"px",      
//     })
//   } else {
//     header.removeClass("sticky");
//     $("body").css({
//       "margin-top": "0px",      
//     })
//   }
// });

