@extends('master')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <h1 class="text-white">Buy Tech</h1>

                        <p class="text-white">Hello My Name is Sagar Agravat.</p>

                        <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Start to Buy.</a>
                    </div>

                    <div class="owl-carousel owl-theme">
                        @if(!empty($carousels))
                        @foreach($carousels as $key=>$carousel)
                        @if($key == 0)
                        <div class="owl-carousel-info-wrap item">
                            <a href="{{ URL::to('product/info/' . $carousel->id) }}"
                                class="custom-block-image-wrap">
                            <img src="{{ URL::to('public/images/product/' . $carousel->image)  }}"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h6 class="mb-1">
                                   {{$carousel->title}}
                                </h6>
                            </div>
                            </a>
                        </div>
                        @else
                        <div class="owl-carousel-info-wrap item">
                            <a href="{{ URL::to('product/info/' . $carousel->id) }}"
                                class="custom-block-image-wrap">
                            <img src="{{ URL::to('public/images/product/' . $carousel->image)  }}"
                                class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h6 class="mb-2">
                                   {{$carousel->title}}
                                </h6>
                            </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>



        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center ">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Lastest Gadgets</h4>
                        </div>
                    </div>
                    @if (!empty($data))
                        @foreach ($data as $mobile)
                            <div class="col-lg-3 col-12 ">
                                <div class="custom-block h-100 bg-light">
                                    <div class="">
                                        <div class="custom-block-icon-wrap text-center">
                                            <a href="{{ URL::to('product/info/' . $mobile->id) }}"
                                                class="custom-block-image-wrap">
                                                <img src="{{ URL::to('public/images/product/' . $mobile->image) }}"
                                                    class="custom-block-home mx-auto" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section>


        <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Topics</h4>
                        </div>
                    </div>
                    @if($male)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ URL::to('product/type/' . $male->gender_id) }}" class="custom-block-image-wrap">
                                <img src="{{ URL::to('public/images/product/' . $male->image) }}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="{{ URL::to('product/gender/' . $male->gender_id) }}">
                                    male
                                    </a>
                                </h5>

                                {{-- <p class="badge mb-0">50 Episodes</p> --}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($female)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ URL::to('product/gender/' . $female->gender_id) }}" class="custom-block-image-wrap">
                                <img src="{{ URL::to('public/images/product/' . $female->image) }}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="{{ URL::to('product/type/' . $female->gender_id) }}">
                                        female
                                    </a>
                                </h5>

                                {{-- <p class="badge mb-0">12 Episodes</p> --}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($digital)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ URL::to('product/type/' . $digital->type_id) }}" class="custom-block-image-wrap">
                                <img src="{{ URL::to('public/images/product/' . $digital->image) }}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="{{ URL::to('product/type/' . $digital->type_id) }}">
                                        Digital
                                    </a>
                                </h5>

                                {{-- <p class="badge mb-0">35 Episodes</p> --}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($analog)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="{{ URL::to('product/type/' . $analog->type_id) }}" class="custom-block-image-wrap">
                                <img src="{{ URL::to('public/images/product/' . $analog->image) }}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="{{ URL::to('product/type/' . $analog->type_id) }}">
                                        Analog
                                    </a>
                                </h5>

                                {{-- <p class="badge mb-0">12 Episodes</p> --}}
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>


        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Trending episodes</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="{{ URL::to('public/assets/images/podcast/27376480_7326766.jpg') }}"
                                        class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="{{ URL::to('public/assets/images/profile/woman-posing-black-dress-medium-shot.jpg') }}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>Elsa
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="{{ URL::to('public/assets/images/podcast/27670664_7369753.jpg') }}"
                                        class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="{{ URL::to('public/assets/images/profile/cute-smiling-woman-outdoor-portrait.jpg') }}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Taylor
                                        <img src="{{ URL::to('public/assets/images/verified.png') }}"
                                            class="verified-image img-fluid" alt="">
                                        <strong>Creator</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="{{ URL::to('public/assets/images/podcast/12577967_02.jpg') }}"
                                        class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Daily Talk
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="{{ URL::to('public/assets/images/profile/handsome-asian-man-listening-music-through-headphones.jpg') }}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        William
                                        <img src="{{ URL::to('public/assets/images/verified.png') }}"
                                            class="verified-image img-fluid" alt="">
                                        <strong>Vlogger</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endsection
