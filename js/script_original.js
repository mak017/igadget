var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    }
  }
}
$(document).ready(function () {
  $('#scrollup img').mouseover(function () {
    $(this).animate({
      opacity: 0.65
    }, 100);
  }).mouseout(function () {
    $(this).animate({
      opacity: 1
    }, 100);
  }).click(function () {
    window.scroll(0, 0);
    return false;
  });
  $(window).scroll(function () {
    if ($(document).scrollTop() > 0) {
      $('#scrollup').fadeIn('fast');
    } else {
      $('#scrollup').fadeOut('fast');
    }
  });

  var scrollToTarget = function(e) {
    e.preventDefault();
    var $href = $(this).attr('href');
    $('body, html').stop().animate({
      scrollTop: $($href).offset().top
    }, 1000);
  }
  $('a[href="#chargers"], a[href="#video-section"], a[href="#main-deal"], a[href="#section1"]').on('click', scrollToTarget);

  $('.option').on('click', function() {
    $this = $(this);
    if (!$this.hasClass('selected')) {
      $('.option').removeClass('selected');
      $this.addClass('selected')
    }
  });

  var $slide1 = $('#slide1');
  var $slide2 = $('#slide2');
  var $slide3 = $('#slide3');
  var $slide4 = $('#slide4');
  var $btnBack = $('.btn-back');
  var $btnNext = $('.btn-next');
  var $body = $('body');
  var time = 250;

  $slide1.find($btnBack).on('click', function() {
    window.history.back();
  });

  function fadeSlide(sOut, sIn) {
    sOut.fadeOut(time, function() {
      sIn.fadeIn(time);
    });
  }

  $slide1.find($btnNext).on('click', function() {
    fadeSlide($slide1, $slide2);
    $body.removeClass('q1').addClass('q2');
  });

  $slide2.find($btnBack).on('click', function() {
    fadeSlide($slide2, $slide1);
    $body.removeClass('q2').addClass('q1');
  });

  $slide2.find($btnNext).on('click', function() {
    fadeSlide($slide2, $slide3);
    $body.removeClass('q2').addClass('q3');
  });

  $slide3.find($btnBack).on('click', function() {
    fadeSlide($slide3, $slide2);
    $body.removeClass('q3').addClass('q2');
  });
});