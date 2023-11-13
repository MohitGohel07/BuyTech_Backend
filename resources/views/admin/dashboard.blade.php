@extends('admin.layouts.master')
@section('content')
    {{-- ====================main content start=========== --}}
 <b>Welcome</b> {{!empty($name)? $name : ''}}
    <div class="row">
        <div class="col-xxl-12 mb-25">
            {{-- <div class="card banner-feature--18 new d-flex bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card-body px-25">
                                <h1 class="banner-feature__heading color-dark">Hey {{ Auth::user()->firstname }}! Welcome to
                                    the Dashboard
                                </h1>
                                <p class="banner-feature__para color-dark">There are many variations
                                    of passages of
                                    Lorem Ipsum available,<br>
                                    ut the majority have suffered passages of Lorem Ipsum available
                                    alteration in
                                    some form
                                </p>
                                <div class="d-flex justify-content-sm-start justify-content-center">
                                    <button class="banner-feature__btn btn btn-primary color-white btn-md radius-xs fs-15"
                                        type="button">Learn More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="banner-feature__shape">
                                <img src="{{ URL::to('public/backend/img/danial.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-xxl-4 col-lg-6 order-xxl-0 order-1">
            <div class="card card-md border-0 mb-4 date-picker__calendar-height">
                <div class="card-header py-0">
                    <h6>Calendar 2023</h6>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="{{ URL::to('public/backend/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                class="svg">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="Today">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-10">
                    <div class="date-picker date-picker--demo5 new">
                        <div class="date-picker__calendar"></div>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
        </div>

    </div>

    <!-- ends: .row -->
    {{-- ========main content end =========== --}}


@stop
