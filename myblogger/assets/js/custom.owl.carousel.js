$(document).ready(function(){
    $('.latest-post-slider').owlCarousel({
        loop:true,
        nav:false,
        items:1,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 10000,
        slideTransition: 'linear',
    })
  });