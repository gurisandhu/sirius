//                              NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js.
// 
// 
$(document).ready(function($){
	// On scroll up header resizes
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
          $("body").addClass("on-scrolled");
      } else {
          $("body").removeClass("on-scrolled");
      }
    });

    //Responsive Menu
    $('body').append("<span class='hide-body'></span>");
    $(".menu-button").click(function(){
    	$(".responsive-menu").toggleClass("show");
    	$("body").toggleClass("toggle-menu");
    	$(".hide-body").toggleClass("toggle-hide-body");
    	$(this).toggleClass("show");
    });
    $(".hide-body").click(function(){
    	$(".responsive-menu").removeClass("show");
    	$("body").removeClass("toggle-menu");
    	$(this).removeClass("toggle-hide-body");
    	$(".menu-button").removeClass("show");
    });
    $(".responsive-menu .menu-item-has-children").append("<span class='has-details'><i class='fa fa-caret-down'></i></span>");
    $(".responsive-menu .sub-menu").slideUp();

    $(".responsive-menu .has-details").click(function(){
    	$(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle();
    	$(this).toggleClass("show");
    });
});//end of document ready