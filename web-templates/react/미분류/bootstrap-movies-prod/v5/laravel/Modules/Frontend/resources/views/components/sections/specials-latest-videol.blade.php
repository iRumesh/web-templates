<section class="recommended-block section-top-spacing">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-3 my-4">
                <h5 class="main-title text-capitalize mb-0">{{__('frontendform.specials_latest_videos')}}</h5>
                <a href="{{ route('frontend.view_all') }}" class="text-primary iq-view-all text-decoration-none">{{__('otthome.view_all')}}</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="5" data-tab="2"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/01.webp'),
                                'cardTitle' => __('frontenddetail_page.mortal_nories'),
                                'movieTime' => '2hr : 12mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/02.webp'),
                                'cardTitle' => __('frontenddetail_page.advetre'),
                                'movieTime' => '1hr : 30mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/03.webp'),
                                'cardTitle' => __('frontenddetail_page.net_ailo'),
                                'movieTime' => '2hr : 30mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/04.webp'),
                                'cardTitle' => __('frontenddetail_page.ariivaal'),
                                'movieTime' => '2hr : 45mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/05.webp'),
                                'cardTitle' => __('frontenddetail_page.dramma'),
                                'movieTime' => '1hr : 55mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/06.webp'),
                                'cardTitle' => __('frontenddetail_page.aune'),
                                'movieTime' => '1hr : 25mins',
                            ])

                        </li>
                        <li class="swiper-slide">
                            @include('frontend::components.cards.card-style', [
                                'cardImage' => asset('frontend/images/movies/latest/07.webp'),
                                'cardTitle' => __('frontenddetail_page.everest'),
                                'movieTime' => '1hr : 45mins',
                            ])

                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
