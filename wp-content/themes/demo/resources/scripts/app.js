// Import jquery
import $ from 'jquery';
// Import Bootstrap
import '../../node_modules/bootstrap';
import './swiper-bundle';

import domReady from '@roots/sage/client/dom-ready';
// import jquery from '../../node_modules/jquery/';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() >= 100) {
      jQuery('.header').addClass('is-sticky');
    } else {
      jQuery('.header').removeClass('is-sticky');
    }
  });

  // Sticky Header
  jQuery(document).ready(function (jQuery) {
    jQuery(window).scroll(function () {
      if (jQuery(window).scrollTop() >= 100) {
        jQuery('.header').addClass('is-sticky');
      } else {
        jQuery('.header').removeClass('is-sticky');
      }
    });
  });

  // Sidebar
  jQuery(document).ready(function (jQuery) {
    jQuery('.toggle-menu').click(function () {
      jQuery('.sidebar').addClass('active');
      jQuery('.close-sidebar').addClass('active');
      jQuery('body').addClass('menu_open');
    });
    jQuery('.close-sidebar').click(function () {
      jQuery('.sidebar').removeClass('active');
      jQuery('body').removeClass('menu_open');
      jQuery(this).removeClass('active');
    });
    jQuery(document).keyup(function (e) {
      jQuery('.sidebar').removeClass('active');
      jQuery('.close-sidebar').removeClass('active');
      jQuery('body').removeClass('menu_open');
    });
  });

  // Banner Slider
  if (jQuery('.bannerslider-wrapper').length) {
    jQuery(document).ready(function () {
      var heroslider = new Swiper('.bannerslider__loop', {
        draggable: true,
        loop: true,
        autoplay: {
          delay: 1200,
        },
        speed: 1000,
        effect: 'fade',
        grabCursor: true,
      });
    });
  }

  // Animation
  jQuery(document).ready(function () {
    function Te(e, t) {
      var i;
      return function () {
        var n = arguments,
          s = this;
        i ||
          (e.apply(s, n),
          (i = !0),
          setTimeout(function () {
            return (i = !1);
          }, t));
      };
    }

    var e = Array.prototype.slice.call(document.querySelectorAll('.fade-ani'));
    if (!(e.length < 1)) {
      var t = Te(function () {
        for (var i = 0; i < e.length; i++)
          (n = e[i]),
            (s = void 0),
            (r = void 0),
            (o = void 0),
            (a = void 0),
            (s = n.getBoundingClientRect()),
            (r = window.innerHeight || document.documentElement.clientHeight),
            (o = s.bottom < r && s.bottom >= 0.7 * r),
            (a = s.top <= 0 && s.bottom >= r),
            ((s.top >= 0 && s.top <= 0.7 * r) || a || o) &&
              (e[i].classList.add('is-visible'), e.splice(i, 1), (i -= 1));
        var n, s, r, o, a;
        e.length ||
          (window.removeEventListener('scroll', t),
          window.removeEventListener('resize', t));
      }, 60);
      window.addEventListener('load', t, {
        once: !0,
      }),
        window.addEventListener('scroll', t, {
          passive: !0,
        }),
        window.addEventListener('resize', t, {
          passive: !0,
        });
    }
  });

  // Load More Funtionality
  var loading = false;
  var currentPage = 2;
  let page = parseInt(jQuery('#load').data('total-pages'));

  if (currentPage <= page) {
    jQuery('#load').on('click', function (e) {
      e.preventDefault();
      let cat = jQuery(this).data('cat');
      let load = jQuery(this).parent();
      var maxPages = parseInt($('#load').data('total-pages'));
      var ajaxurl = jQuery('#site_url').val();

      if (!loading && currentPage <= maxPages) {
        loading = true;

        $.ajax({
          url: ajaxurl,
          type: 'POST',
          data: {
            action: 'load_more_posts',
            page: currentPage,
            cat: cat,
          },
          beforeSend: function () {
            var html = '<div class="loading">Loading&#8230;</div>';
            jQuery('.load-more').append(html);
          },
          success: function (response) {
            setTimeout(function () {
              jQuery('.loading').fadeOut(100);
            }, 500);

            if (response) {
              $('#blog-posts').append(response);
              currentPage++;
            }

            if (currentPage > maxPages) {
              $('.blog-main .load-more').hide();
            }

            loading = false;
          },
          error: function () {
            loading = false;
          },
        });
      }
    });
  } else {
    $('.blog-main .load-more').hide();
  }

  // cat nav functionality
  jQuery('#cat-nav li a').on('click', function (e) {
    let cat = jQuery(this).data('cat');
    var ajaxurl = jQuery('#site_url').val();
    $.ajax({
      url: ajaxurl,
      type: 'POST',
      data: {
        action: 'cat_nav_posts',
        cat: cat,
      },
      beforeSend: function () {
        var html = '<div class="loading">Loading&#8230;</div>';
        jQuery('.latestgrid__grid').append(html);
      },
      success: function (response) {
        setTimeout(function () {
          jQuery('.loading').fadeOut(100);
        }, 500);

        if (response) {
          $('.latestgrid__grid .row').html(response);
          jQuery('.pg-pagination li:first').addClass('active');
        }
      },
      error: function () {},
    });
  });

  // cat nav dropdow functionality
  jQuery('#cat-dd li a').on('click', function (e) {
    let cat = jQuery(this).data('cat');
    var ajaxurl = jQuery('#site_url').val();
    $.ajax({
      url: ajaxurl,
      type: 'POST',
      data: {
        action: 'cat_nav_posts',
        cat: cat,
      },
      beforeSend: function () {
        var html = '<div class="loading">Loading&#8230;</div>';
        jQuery('.latestgrid__grid').append(html);
      },
      success: function (response) {
        setTimeout(function () {
          jQuery('.loading').fadeOut(100);
        }, 500);

        if (response) {
          $('.latestgrid__grid .row').html(response);
          currentPage++;
          jQuery('.pg-pagination li:first').addClass('active');
        }
      },
      error: function () {},
    });
  });

  // search functionality
  $('#searchInput').keyup(function () {
    // Your keyup event handling logic here
    var inputValue = $(this).val();
    var ajaxurl = jQuery('#site_url').val();
    $.ajax({
      url: ajaxurl,
      type: 'POST',
      data: {
        action: 'cat_nav_posts',
        search: inputValue,
      },
      beforeSend: function () {
        // var html = '<div class="loading">Loading&#8230;</div>';
        // jQuery('.latestgrid__grid').append(html);
      },
      success: function (response) {
        // setTimeout(function () {
        //   jQuery('.loading').fadeOut(100);
        // }, 500);

        if (response) {
          $('.latestgrid__grid .row').html(response);
          currentPage++;
        }
      },
      error: function () {},
    });
  });

  // pagination functionality
  jQuery('.pg-pagination li:first').addClass('active');
  jQuery(document).on('click', '.pg-pagination li a', function (event) {
    var ajaxurl = jQuery('#site_url').val();
    if (jQuery('#cat')) {
      var cat = jQuery('#cat').val();
    }
    if (jQuery('#search')) {
      var search = jQuery('#search').val();
    }
    jQuery(this).parent('li').addClass('active');
    jQuery('.pg-pagination li').removeClass('active');
    jQuery(this).parent('li').addClass('active');
    var $container = $('.latestgrid__grid .row');
    var $pagination = $('.pg-pagination');
    var currentPage = 1;

    var page = $(this).text();
    currentPage = page;

    $.ajax({
      type: 'POST',
      url: ajaxurl,
      data: {
        action: 'numeric_pagination',
        page: page,
        cat: cat,
        search: search,
      },
      beforeSend: function () {
        var html = '<div class="loading">Loading&#8230;</div>';
        jQuery('.latestgrid__grid').append(html);
      },
      success: function (response) {
        setTimeout(function () {
          jQuery('.loading').fadeOut(3000);
        }, 500);

        jQuery('html, body').animate(
          {
            scrollTop: jQuery('.navbar').offset().top,
          },
          2500
        );
        $container.html(response);
        jQuery('.pagination-text .cur_pg').text(page);
        var number = page;
        // Add "active" class to the li element corresponding to the number
        $('.pg-pagination li:eq(' + (number - 1) + ')').addClass('active');
      },
    });
  });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
