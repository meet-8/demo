@if ($content->image)
    <!-- Breadcrumb Banner Start -->
    <section class="breadcrumbbanner-wrapper">
        <div class="breadcrumbbanner">
            <div class="breadcrumbbanner__inner">
                <div class="breadcrumbbanner__slideitem bannercontent__left">
                    <img src="{{ $content->image }}" alt="hero-banner-slide" width="1366" height="768">
                    <div class="breadcrumbbanner__content">
                        <div class="breadcrumbbanner__content--inner">
                            <div class="breadcrumbbanner__contentgrid">
                                <div class="breadcrumbbanner__content--title">
                                    <h1>
                                        {{ $content->title }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Banner End -->
@endif
