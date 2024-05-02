 <!-- Latest Grid Start -->
 <section class="latestgrid-wrapper section_padding fade-ani">
     <div class="latestgrid">
         <div class="container-custom">
             <div class="latestgrid__inner">
                 <div
                     class="latestgrid__toppanel d-flex align-items-center justify-content-between flex-wrap fade-ani-one">
                     <div class="latestgrid__title regular__title">
                         <h2>
                             Latest Updates
                         </h2>
                     </div>
                     <div class="latestgrid__btn">
                         <a href="#" class="btn__link">View All</a>
                     </div>
                 </div>
                 <div class="latestgrid__grid">
                     <div class="row fade-ani-two">
                         @if (!empty($content->post))
                             @foreach ($content->post as $item)
                                 <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                     <div class="latestgrid__item">
                                         <div class="latestgrid__imagemain">
                                             <a href="{{ $item['url'] }}" class="d-block">
                                                 <div class="latestgrid__image">
                                                     <img src="{{ $item['featured_image'] }}"
                                                         alt="{{ $item['featured_image_alt'] }}" width="350"
                                                         height="230">
                                                 </div>
                                             </a>
                                         </div>
                                         <div class="latestgrid__details">
                                             <div class="latestgrid__date">
                                                 <span>
                                                     {{ $item['date'] }}
                                                 </span>
                                             </div>
                                             <div class="latestgrid__title">
                                                 <a href="{{ $item['url'] }}">
                                                     {{ $item['title'] }}
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         @endif

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Latest Grid End -->
