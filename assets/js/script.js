$(document).ready(function () {
   $('.slider').slick({
      arrows: false,
      dots: true,
      adaptiveHeight: true,
      slidesToShow: 3,
      slidesToScroll: 2,
      speed: 800,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      draggble: true,
      touchThreshold: 10,
      waitForAnimate: true, /*быстрая прокрутка вручную */
      centerMode: false,
      variableWidth: true,

   });
});

$(document).ready(function(){
   $('.header__burger').click(function(event){
      $('.header__burger,.header__menu').toggleClass('active');
   });
});

