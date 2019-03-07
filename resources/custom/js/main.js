
(function ($) {


//svg text loader animation
  var user_agent = detect.parse(navigator.userAgent),
    user_browser = user_agent.browser.family.toLowerCase(),
    $loader = $('.loader'),
    $loader_progress = $loader.find('.st2'),
    loader_count = 0,
    loader_timer;

  if ($loader_progress.length > 0)
    loader_timer = setInterval(update_loader_count, 10);

  var $body = $('body'),
    $to_top = $('.to-top');

  $body.addClass(user_browser);

  function update_loader_count() {
    loader_count += 0.08;
    // loader_count += 0.05;

    $loader_progress.css('transform', 'translateX(' + loader_count + '%)');

    if (loader_count >= 100) {
      clearTimeout(loader_timer);

      $loader.fadeOut(500, function () {
        $loader.remove();
        page_loaded();
      });
    }
  }

  function page_loaded() {
    $body.addClass('loaded');
  }

  //svg text loader animation ends

  function mediaSize() {
      /* Set the matchMedia */
    if (window.matchMedia('(min-width: 992px)').matches) {

      // Icon animations

      var $parallaxContainer = $(".parallax-container2"); //our container
      var $parallaxItems = $parallaxContainer.find(".parallax2");  //elements
      var fixer = -0.0004;		//experiment with the value


      var orientation = 'portrait-primary';

      if (typeof screen.orientation !== 'undefined') {
        orientation = screen.orientation.type || screen.mozOrientation.type || screen.msOrientation.type;
      }

      if ((window.innerWidth > 991 && orientation === 'portrait-primary') || (window.innerWidth > 1100 && orientation === 'landscape-primary'))
        parallax();

      if ($loader_progress.length > 0)
        setTimeout(function () {
          clearTimeout(loader_timer);
          loader_timer = setInterval(update_loader_count, 1);
        }, 3000);
      else
        setTimeout(function () {
          $loader.fadeOut(400, function () {
            $loader.remove();

            page_loaded();
          });
        }, 1000);

      function parallax() {
        $('.parallax').each(function () {
          var $this = $(this),
            $parent = $this.parents('.parallax-container'),
            $target = ($parent.length === 0 ? $(window) : $parent),
            depth = parseFloat($this.data('depth')),
            axis = $this.data('axis'),
            trans_dur = parseInt($this.css('transition-duration')) * 1000,
            pause = false;

          depth = (typeof depth !== 'undefined' && depth > 0 && depth <= 1 ? depth : 0.5);

          if (!$this.hasClass('no-parallax-move') && user_browser !== 'firefox') {
            var circle = get_circle(window.innerWidth / 2 * depth / 10, 33, 0, 0),
              iter = 0,
              speed = Math.floor((Math.random() * (trans_dur * 0.6)) + (trans_dur * 0.5));

            setInterval(function () {
              if (!pause) {
                $this.css('transform', 'translate(' + circle[iter].x + 'px, ' + circle[iter].y + 'px)');

                iter++;

                if (iter === circle.length)
                  iter = 0;
              }
            }, speed);
          }

          if ($this.hasClass('mouse-move')) {
            $parent.hover(function () {
              $parent.addClass('hover');
              pause = true;
            }, function () {
              $parent.removeClass('hover');
              pause = false;
            });

            $target.on('mousemove', function (e) {
              var mouseX = e.pageX,
                mouseY = e.pageY,
                percentX = 0,
                percentY = 0;

              if (typeof depth === 'undefined') {
                percentX = (mouseX - window.innerWidth / 2) * depth / 10;
                percentY = (mouseY - window.innerHeight / 2) * depth / 10;
              } else {
                switch (axis) {
                  case 'x':
                    percentX = (mouseX - window.innerWidth / 2) * depth / 10;
                    break;
                  case 'y':
                    percentY = (mouseY - window.innerHeight / 2) * depth / 15;
                    break;
                  default:
                    percentX = (mouseX - window.innerWidth / 2) * depth / 10;
                    percentY = (mouseY - window.innerHeight / 2) * depth / 15;
                }
              }

              $this.css({
                'transform': 'translate(' + percentX + 'px, ' + percentY + 'px)'
              });
            });
          }
        });
      }

      function get_circle(radius, steps, centerX, centerY) {
        var circle = [];

        for (var i = 0; i < steps; i++)
          circle[i] = {
            x: (centerX + radius * Math.cos(2 * Math.PI * i / steps)),
            y: (centerY + radius * Math.sin(2 * Math.PI * i / steps))
          };

        return circle;
      }

      // Icon animations ends

    } else {

    }
  };

    /* Call the function */
  mediaSize();
    /* Attach the function to the resize event listener */
  window.addEventListener('resize', mediaSize, false);


  // Animation js start
  var animate = $(".animate");

// animate one tween 1
  var mySplitText = new SplitText(animate, {type: "lines"}),
    line1 = mySplitText.lines; //an array of all the divs that wrap each character

  var tl = new TimelineMax()
    .staggerFrom(line1, 1.5, {
      y: 360,
      ease: Expo.easeOut
    }, 0.1, "+=0.5");

  // .set(animate, {className: "+=underline"}, "-=1.5");

  var controller = new ScrollMagic.Controller();

// build scene
  var scene = new ScrollMagic.Scene({
    triggerElement: ".trigger",
    reverse: false
  })
    .setTween(animate, {perspective: 400})
    .setTween(tl)
    .addTo(controller);


})(jQuery);