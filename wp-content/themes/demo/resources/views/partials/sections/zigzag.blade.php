<!-- Zigzag Start -->
<section class="zigzag-wrapper">
    <div class="zigzag fade-ani">
        <div class="container-custom-xl">
            <div class="zigzag__inner">
                <div class="zigzag__grid d-flex align-items-lg-center flex-lg-row flex-column-reverse">
                    <div class="zigzag__content fade-ani-one">
                        <div class="zigzag__title regular__title">
                            <h2>
                                {{ $content->title }}
                            </h2>
                        </div>
                        <div class="zigzag__contentdesc content content_black">
                            <p>
                                {!! $content->content !!}
                            </p>
                        </div>
                    </div>
                    <div class="zigzag__image fade-ani-one">
                        <div class="zigzag__imageinner">
                            <img src="{{ $content->image }}" alt="zigzag-image" width="627" height="708">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Zigzag End -->
