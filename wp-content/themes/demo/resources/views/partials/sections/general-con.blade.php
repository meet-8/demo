<!-- General Container Start -->
<section class="generalcontent-wrapper section_padding">
    <div class="generalcontent">
        <div class="container-custom">
            <div class="generalcontent__inner">
                <div class="generalcontent__title regular__title">
                    <h2>
                        {{ $content->title }}
                    </h2>
                </div>
                <div class="generalcontent__grid">
                    <div class="generalcontent__content content content_black">
                        {!! $content->description !!}
                        <?php //echo $content->description;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- General Container End -->
