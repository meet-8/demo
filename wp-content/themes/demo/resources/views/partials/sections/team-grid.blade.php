<!-- Team Grid Start -->
<section class="teamgrid-wrapper">
    <div class="teamgrid fade-ani">
        <div class="teamgrid__inner">
            <div class="teamgrid__image desktop_image fade-ani-one">
                <div class="teamgrid__imageinner">
                    <img src="{{ $content->background_image }}" alt="teamgrid-desktop" width="1366" height="650">
                </div>
            </div>
            <div class="teamgrid__image mobile_image fade-ani-one">
                <div class="teamgrid__imageinner">
                    <img src="{{ $content->background_image }}" alt="teamgrid-desktop" width="440" height="210">
                </div>
            </div>
            <div class="teamgrid__contentwrapper">
                <div class="container-custom">
                    <div class="teamgrid__contentbox fade-ani-two">
                        <div class="teamgrid__title regular__title fade-ani-three">
                            <h2>
                                {{ $content->title }}
                            </h2>
                        </div>
                        <div class="teamgrid__row">
                            @php
                                $teams = $content->team;
                            @endphp

                            @foreach ($teams as $team)
                                <div class="teamitem fade-ani-four">
                                    <div class="d-flex flex-wrap flex-lg-row flex-column align-items-center">
                                        <div class="teamitem__imagewrapper">
                                            <div class="teamitem__image">
                                                <img src="{{ $team['image'] }}" alt="team" width="196"
                                                    height="196">
                                            </div>
                                        </div>
                                        <div class="teamitem__detailswrapper">
                                            <div class="teamitem__details">
                                                <div class="teammember__name">
                                                    <h5>
                                                        {{ $team['name'] }}
                                                    </h5>
                                                </div>
                                                <div class="teammember__post">
                                                    <h6>
                                                        {{ $team['designation'] }}
                                                    </h6>
                                                </div>
                                                <div class="teammember__desc content content_black pt-2">
                                                    <p>
                                                        {{ $team['content'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Grid End -->
