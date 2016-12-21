//                              NOTE 
// 
//to edit this file, you must run Gulp. Because it will compresses the code into new file in compressed folder called script.js. And this file (compressed/script.js) is linked the site.
// 
// 
$(document).ready(function($){

  //Single page product images Slider
  var swiper = new Swiper('.swiper-container');
  
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoplay: 2500,
        loop: true,
        spaceBetween: 30
    });

  // Home page
   var swiperHome = new Swiper('.swiper-container-home', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        autoplayDisableOnInteraction:false,
        autoplay: 2500,
        loop: true,
        effect: 'fade'
    });


	// On scroll up header resizes
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
          $("body").addClass("on-scrolled");
          $(".no-projects-header").removeClass('shadow');
      } else {
          $("body").removeClass("on-scrolled");
          $(".no-projects-header").addClass('shadow');
      }
    });

    //show loader while loading
    $(window).bind("load", function(){
      $('.intro').removeClass('show-loader');
      $('.swiper-slide').removeClass('show-loader');
    });

    //Responsive Menu
    // $('body').append("<span class='hide-body'></span>");
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

    // On click contact, go to contact form

    $("nav ul  li a:contains('ontact')").click(function(){
      $('html, body').animate({
        scrollTop: $(".contact-form").offset().top
      }, 1000);
      $(".responsive-menu").removeClass("show");
      $("body").removeClass("toggle-menu");
      $(".hide-body").removeClass("toggle-hide-body");
      $(".menu-button").removeClass("show");
    });


    // ++++++++++++++++++++
    // Scroll Down
    // ++++++++++++++++++++
    $('.scroll-down-wrapper').hover(function(){
      $(this).toggleClass('animate');
    });//scroll-down hover

    $('.scroll-down-wrapper').click(function(){
      $('html, body').animate({
        scrollTop: $('.section').offset().top
      }, 1000); 
       $(this).addClass('hide');
    });

    $(window).scroll(function(){
      if($(window).scrollTop() > 300){
        $('.scroll-down-wrapper').addClass('hide');
      } else {
        $('.scroll-down-wrapper').removeClass('hide');
      }
    });//window.scroll

    // ++++++++++++++++++++
    // Projects and Project page
    // ++++++++++++++++++++

    $('.project-close-button').click(function(){
      $('.single-project-content').toggleClass('show-this');
      $(this).addClass('hide-this');
      $('.close-button').addClass('rotate');
      $('.swiper-button-white').addClass('show');
    });
    $('.close-button').click(function(){
      $('.single-project-content').removeClass('show-this');
      $('.project-close-button').removeClass('hide-this');
      $('.close-button').removeClass('rotate');
      $('.swiper-button-white').removeClass('show');
    });
});//end of document ready


// form validation
  function validateForm(){
    //Variables
    var flname        = document.forms["contactForm"]["flname"];
    var email         = document.forms["contactForm"]["email"];
    var message       = document.forms["contactForm"]["message"];
    var receiverEmail = document.forms["contactForm"]["receiver-email"];
    var siteUrl       = document.forms["contactForm"]["siteurl"];
    var formUrl       = siteUrl.value + "/mailform.php";

    //Error Variables
    var flname_error = "";
    var email_error = "";
    var message_error = "";
    var totalError = 0;

  if (flname.value == null || flname.value ==""){
    flname_error = "<li>Name is required field</li>";
    $(flname).addClass('error-input');
    totalError += 1;
  }
  $(flname).change(function(){
    if (flname.value == null || flname.value ==""){
        flname_error = "<li>Name is required field</li>";
        $(flname).addClass('error-input');
        totalError += 1;
    } else{
      $(flname).removeClass('error-input');
      flname_error = " ";
    }
  });

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value == null || email.value =="" || !email.value.match(mailformat)){
    email_error = "<li>Email is required field</li>";
    $(email).addClass('error-input');
    totalError += 1;
  }
  $(email).change(function(){
    if (email.value == null || email.value =="" || !email.value.match(mailformat)){
      email_error = "<li>Email is required field</li>";
      $(email).addClass('error-input');
      totalError += 1;
    } else{
      $(email).removeClass('error-input');
    }
  });
  if (message.value == null || message.value ==""){
    message_error = "<li>Message is required field</li>";
    $(message).addClass('error-input');
    totalError += 1;
  }
  $(message).change(function(){
    if (message.value == null || message.value ==""){
        message_error = "<li>Message is required field</li>";
        $(message).addClass('error-input');
        totalError += 1;
    } else{
      $(message).removeClass('error-input');
      message_error = " ";
    }
  });

  var validation_report = document.getElementById('form-validation');
  var error_heading = "<p><b>Please check following errors:</b></p>";
  validation_report.innerHTML = '';

  var success_message = "<p>Thank you for your inquiry <b>" + flname.value + "</b>. One of our staff member will contact you shortly.</p>";

  if (totalError > 0){
    $('.form-validation').show();
    $('.form-validation').addClass('error-input');
    $('.form-validation').removeClass('success');
    $('html, body').animate({
      scrollTop: $('.form-validation').offset().top - 66
    }, 1000);
    
    validation_report.innerHTML += error_heading + flname_error +  email_error + message_error;
    return false;
  }
    
  $.ajax({
    // var formData = $('form').serialize();
    type: "post",
    url: formUrl,
    data: $('form').serialize(),
    success: function(){
      $('.form-validation').show();
      validation_report.innerHTML += success_message;
      $('.form-validation').removeClass('error-input');
      $('.form-validation').addClass('success');
    }
  });
  return false;
  }//end of contactForm

// ++++++++++++++++++++
// Page with links
// ++++++++++++++++++++

function showPageWithLinksCotent(num){
  $('.page-with-links-content').slideUp();
  $('.page-with-links-content-'+num).slideDown();
  $('.page-menu ul li a').removeClass('active');
  $('.page-with-links-title-'+num+' a').addClass('active');
}