var products = {
  chargers: {
    lunaStandart: {
      title: 'Luna Standart',
      price: 499,
      discount: '-20%',
      regularPrice: 770,
      img: {
        white: '/phones/standart_white_clear.jpg',
        black: '/phones/standart_black_clear.jpg'
      }
    },
    lunaFantasy: {
      title: 'Luna Fantasy',
      price: 699,
      discount: '-20%',
      regularPrice: 870,
      img: {
        white: '/phones/fantasy_white_clear-min.jpg',
        black: '/phones/fantasy_black_clear-min.jpg'
      }
    },
  },
  powerbanks: {
    lunaPowerbank: {
      title: 'Беспроводной повербанк',
      price: 999,
      discount: '-20%',
      img: '/phones/powerbank_clear.png'
    }
  },
  autochargers: {
    lunaAutocharger: {
      title: 'Автомобильная зарядка',
      price: 799,
      img: {
        white: '/phones/autocharger_white_clear.png',
        black: '/phones/autocharger_black_clear.png'
      }
    }
  },
  combos: {
    standartWPowerbank: {
      price: 1199,
      discount: '-15%',
      regularPrice: 1499,
    },
    fantasyWPowerbank: {
      price: 1499,
      discount: '-15%',
      regularPrice: 1699,
    },
    standartWAutocharger: {
      price: 1099,
      discount: '-15%',
      regularPrice: 1299,
    },
    fantasyWAutocharger: {
      price: 1299,
      discount: '-15%',
      regularPrice: 1499,
    },
    standartWPowerbankAutocharger: {
      price: 1850,
      discount: '-20%',
      regularPrice: 2300,
    },
    fantasyWPowerbankAutocharger: {
      price: 2000,
      discount: '-20%',
      regularPrice: 2500,
    },
  }
}

var standart = products.chargers.lunaStandart;
var fantasy = products.chargers.lunaFantasy;
var auto = products.autochargers.lunaAutocharger;
var pb = products.powerbanks.lunaPowerbank;
var combo = products.combos;

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

  var scrollToTarget = function (e) {
    e.preventDefault();
    var $href = $(this).attr('href');
    $('body, html').stop().animate({
      scrollTop: $($href).offset().top
    }, 1000);
  }
  $('a[href="#chargers"], a[href="#video-section"], a[href="#main-deal"], a[href="#section1"]').on('click', scrollToTarget);

  $('.option').on('click', function (e) {
    $this = $(this);
    if ($this.closest('.slide5').length === 0 && !$this.hasClass('selected')) {
      $this.parent().find($('.option')).removeClass('selected');
      $this.addClass('selected')
    }
  });

  var $slides = $('.slide');
  var $btnBack = $('.btn-back');
  var $btnNext = $('.btn-next');
  var $body = $('body');
  var time = 250;
  var itemTemplate = function (img, name) {
    var html = '<div class="item"><img src="' + img + '" alt="" class="img-responsive"><span>' + name + '</span></div>';
    return html
  }

  function appender(product, color) {
    var item;
    if (typeof color !== 'undefined') {
      item = itemTemplate(product.img[color], product.title)
    } else {
      item = itemTemplate(product.img, product.title)
    }
    $('.slide .images').append(item);
  }

  function costAdjust(type, isCombo = true) {
    if (isCombo) {
      $('.slide .regular-cost').text(combo[type].regularPrice + ' грн');
      $('.slide .discount-cost').text(combo[type].price + ' грн');
    } else {
      $('.slide .regular-cost').text(type.regularPrice + ' грн');
      $('.slide .discount-cost').text(type.price + ' грн');
    }
  }

  $slides.eq(0).find($btnBack).on('click', function () {
    window.history.back();
  });

  function fadeSlide(sOut, sIn) {
    sOut.fadeOut(time, function () {
      sIn.fadeIn(time);
    });
  }

  $slides.each(function (i) {
    $this = $(this);
    $next = $this.find($btnNext);

    $next.tooltip({
      title: "Прежде чем продолжить, выберите вариант ответа",
      trigger: "manual"
    }, 'hide');
    $next.on('click', function () {
      if ($slides.eq(i).has('.option.selected').length > 0) {
        fadeSlide($slides.eq(i), $slides.eq(i + 1));
        $body.removeClass('q' + (i + 1));
        $(this).tooltip("hide");

        $('body, html').stop().animate({
          scrollTop: 0
        }, 100);

        if (i !== $slides.length - 2) {
          $body.addClass('q' + (i + 2));
        } else {
          $body.addClass('q-result');

          var headerText = '<span>Спасибо, что прошли опрос!</span>';
          $('.q-result .header-text').html(headerText);
          
          var surveyTimer = $('.slide .timer');

          surveyTimer.countdown({
            until: '+10m',
            format: 'MS',
            description: ':',
            padZeroes: true
          })

          var $selected = $('.option.selected');
          var charger;
          var powerbank;
          var autocharger;
          var textToSend;
          $selected.each(function (i) {
            var $option = $(this).attr('data-option');

            if ($option === 'often') {
              charger = 'fantasy';
            } else if ($option === 'moderately' || $option === 'rarely') {
              charger = 'standart';
            }
            if ($option === 'more1h' || $option === 'less1h') {
              autocharger = 'autocharger';
            }
            if ($option === 'inmotion' || $option === 'differently') {
              powerbank = 'powerbank';
            }
            if ($option === 'white') {
              charger += 'white';
              if (autocharger) {
                autocharger += 'white';
              }
            } else if ($option === 'black') {
              charger += 'black';
              if (autocharger) {
                autocharger += 'black';
              }
            }
          })

          if (charger.indexOf('standart') >= 0) {
            if (charger.indexOf('white') >= 0) {
              appender(standart, 'white');
            } else {
              appender(standart, 'black');
            }
          } else {
            if (charger.indexOf('white') >= 0) {
              appender(fantasy, 'white');
            } else {
              appender(fantasy, 'black');
            }
          }

          if (autocharger && powerbank) {
            appender(pb);
            textToSend = (charger + ' + ' + autocharger + ' + ' + powerbank).toUpperCase();
            if (autocharger.indexOf('white') >= 0) {
              appender(auto, 'white');
            } else {
              appender(auto, 'black');
            }
            if (charger.indexOf('standart') >= 0) {
              costAdjust('standartWPowerbankAutocharger');
            } else {
              costAdjust('fantasyWPowerbankAutocharger');
            }
          } else if (autocharger) {
            textToSend = (charger + ' + ' + autocharger).toUpperCase();
            if (autocharger.indexOf('white') >= 0) {
              appender(auto, 'white');
            } else {
              appender(auto, 'black');
            }
            if (charger.indexOf('standart') >= 0) {
              costAdjust('standartWAutocharger');
            } else {
              costAdjust('fantasyWAutocharger');
            }
          } else if (powerbank) {
            appender(pb);
            textToSend = (charger + ' + ' + powerbank).toUpperCase();
            if (charger.indexOf('standart') >= 0) {
              costAdjust('standartWPowerbank');
            } else {
              costAdjust('fantasyWPowerbank');
            }
          } else {
            textToSend = charger.toUpperCase();
            if (charger.indexOf('standart') >= 0) {
              costAdjust(standart, false);
            } else {
              costAdjust(fantasy, false);
            }
          }
          $('.q-result input[name="head"]').val(textToSend);
        }
      } else {
        $(this).tooltip("show");
      }
    })
    $this.find($btnBack).on('click', function () {
      $body.removeClass('q' + (i + 1)).addClass('q' + i);
      if (i !== 0) {
        fadeSlide($slides.eq(i), $slides.eq(i - 1));
      }
    })
  });
});