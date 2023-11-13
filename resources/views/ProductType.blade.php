@extends('master')
@section('content')
    <section class="pt-50">
        <div class="container">

            <section class="latest-podcast-section section-padding pb-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Gadgets</h4>
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
