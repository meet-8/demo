  <!-- Imagecontent Start -->
  <section class="imagecontent-wrapper">
      <div class="imagecontent fade-ani">
          <div class="imagecontent__inner">
              <div class="imagecontent__image desktop_image fade-ani-one">
                  <div class="imagecontent__imageinner">
                      <img src="{{ $content->image }}" alt="imagecontent-desktop" width="1366" height="650">
                  </div>
              </div>
              <div class="imagecontent__image mobile_image fade-ani-one">
                  <div class="imagecontent__imageinner">
                      <img src="{{ $content->image }}" alt="imagecontent-desktop" width="440" height="210">
                  </div>
              </div>
              <div class="imagecontent__contentwrapper">
                  <div class="container-custom">
                      <div class="imagecontent__contentbox fade-ani-two">
                          <div class="imagecontent__title regular__title fade-ani-three">
                              <h2>
                                  {{ $content->title }} </h2>
                          </div>
                          <div class="imagecontent__content content content_black fade-ani-four">
                              <p>
                                  {{ $content->content }}
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Imagecontent End -->
