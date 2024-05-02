  @php
      function isPrime($number)
      {
          if ($number <= 1) {
              return false;
          }

          for ($i = 2; $i <= sqrt($number); $i++) {
              if ($number % $i == 0) {
                  return false;
              }
          }

          return true;
      }
  @endphp
  <!-- Hero Banner Slider Start -->
  <section class="bannerslider-wrapper">
      <div class="bannerslider">
          <div class="bannerslider__inner bannerslider__loop">
              <div class="swiper-wrapper">
                  @php
                      $i = 1;
                      $slider_images = $content->slider_images;
                  @endphp


                  @foreach ($slider_images as $slider_image)
                      <div class="swiper-slide">

                          <div
                              class="bannerslider__slideitem
                              @if (isPrime($i)) bannercontent__right
                               @else
                               bannercontent__left @endif
                               ">

                              <img src="{{ $slider_image['image'] }}" alt="hero-banner-slide" width="1366" height="768">
                              <div class="bannerslider__content">
                                  <div class="bannerslider__content--inner">
                                      <div class="bannerslider__contentgrid">
                                          <div class="bannerslider__content--title">
                                              <h1>
                                                  {{ $slider_image['title'] }}
                                              </h1>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{ $i++ }}
                  @endforeach
              </div>


          </div>

      </div>
  </section>
  <!-- Hero Banner Slider End -->
