$(document).ready(function () {
  $('.home-banner-slider').slick({
    dots: false,
    infinite: true,
    speed: 1500,
    autoplaySpeed: 1500,
    autoplay: true,
    arrows: true,
    loop: true,
  })

  AOS.init({
    duration: 500,
    once: true,
    disable: 'mobile',
  })
  $('header .toggle').click(function () {
    $(this).toggleClass('active')
    $('header nav, body').toggleClass('active')
  })
})

jQuery(document).ready(function ($) {
  $(window).on('scroll', function () {
    var fromTop = $(this).scrollTop()
    $('header').toggleClass('fixed', fromTop > 55)
  })
})
