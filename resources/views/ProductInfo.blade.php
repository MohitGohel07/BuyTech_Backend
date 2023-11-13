@extends('master')
@section('content')
    <section class="pt-50">
        <div class="container">
            <section class="latest-podcast-section section-padding pb-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center g-3">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Lastest Gadgets</h4>
                            </div>
                        </div>
                        @if (session()->has('cart'))
                            <div class="alert alert-success m-2 p-2 text-center ">
                                {{ session()->get('cart') }}
                            </div>
                        @endif
                        @if (!empty($data))
                            <div class="col-lg-12 col-12">
                                <div class="custom-block d-md-flex h-100">
                                    <div class="">
                                        <div class="custom-block-icon-wrap  text-center">
                                            <a href="{{ URL::to('#') }}" class="custom-block-image-wrap">
                                                <img src="{{ URL::to('public/images/product/' . $data->image) }}"
                                                    class="custom-block-image-product-info mx-auto" alt="">
                                            </a>
                                        </div>

                                        <div class="mt-2 text-center">
                                            <a href="{{ URL::to('add/cart/' . $data->id) }}" class="btn custom-btn ">
                                                Add To Cart
                                            </a>
                                        </div>
                                    </div>

                                    <div class="custom-block-info">
                                        <h5 class="mb-2">
                                            <a href="#">
                                                {{ $data->title }}
                                            </a>
                                        </h5>

                                        <p class="mb-0"> {{ $data->description }}</p>

                                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                            <a href="#" class="bi bi-currency-rupee me-1">
                                                <span>{{ $data->price }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </section>

            <section class="latest-podcast-section section-padding pb-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Lastest Gadgets</h4>
                            </div>
                        </div>
                        @if (!empty($datas))
                            @foreach ($datas as $data)
                                <div class="col-lg-3 col-12 ">
                                    <a href="{{ URL::to('product/info/' . $data->id) }}" class="custom-block-image-wrap">
                                        <div class="custom-block h-100 bg-light">
                                            <div class="">
                                                <div class="custom-block-icon-wrap text-center">

                                                    <img src="{{ URL::to('public/images/product/' . $data->image) }}"
                                                        class="custom-block-home mx-auto" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </section>
        </div>

    </section>
@endsection
