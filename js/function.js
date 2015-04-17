jQuery(document).ready(function(){

  //Helper Functions

  function scrollY() {
  	return window.pageYOffset || document.documentElement.scrollTop;
  }


  jQuery('.slider').slick({
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	autoplay: true,
  	speed: 900,
  	autoplaySpeed: 3500,
  	arrows: false,
  	dots: true,
  });

  jQuery('.header .btn').hover(function(){
  	jQuery('.subnav').fadeIn();
  },function(){
  	jQuery('.subnav').fadeOut();
  });

});