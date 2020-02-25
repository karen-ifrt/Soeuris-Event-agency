$('.hero-carousel').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

$('#slider').slick({
    dots: false,
    arrows: true,
    nextArrow: '<div class="slick-next"></div>',
    prevArrow: '<div class="slick-prev"></div>',
    infinite: true,
    autoplay: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });