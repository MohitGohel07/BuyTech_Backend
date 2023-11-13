@extends('master')
@section('content')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <section class="pt-50 ">
        <div class="container">
            <section class="latest-podcast-section section-padding pb-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center g-3">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Cart</h4>
                            </div>
                        </div>
                        <div class="me-auto col-md-12">
                            @if($data == '[]')
                            <a href="{{ URL::to('shopping') }}" class="btn btn-success">Shop Now</a>
                            @else
                            <a href="{{ URL::to('orderplace') }}" class="btn btn-success">Buy Now</a>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    @if(!empty($data))
                                    @foreach ($data as $item)
                                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                                        <tr>
                                            <td><img src="{{ URL::to('public/images/product/' . $item->image) }}"
                                                    alt="image" width="50px"></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td data-th="Quantity">
                                                <div style="width:150px">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-text p-1"> <a
                                                                class="btn btn-danger minusqty" data-id={{ $item->id }}
                                                                data-price={{ $item->price }} data-qty={{ $item->qty }}>
                                                                <span class="fa-solid fa-minus"></span></a>
                                                        </div>
                                                        <input type="number" data-id={{ $item->id }}
                                                            data-price={{ $item->price }} value="{{ $item->qty }}"
                                                            name="qty[]" min="1"
                                                            class="form-control quantity update-qty " />
                                                        <div class="input-group-text p-1"> <a
                                                                class="btn btn-success plusqty" data-id={{ $item->id }}
                                                                data-price={{ $item->price }}
                                                                data-qty={{ $item->qty }}>
                                                                <span class="fa-solid fa-plus"></span></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td class="total">{{ $item->total }}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 text-end me-auto">
                            <div>
                                @foreach ($data as $item)
                                    <b> {{ $item->title }}</b>: {{ $item->qty }} *
                                    {{ $item->price * $item->qty }}<br />
                                @endforeach
                                <hr>
                            </div>

                            <b>Total</b>: {{ $sum }}
                        </div>
                        <div class="me-auto col-md-12">
                            @if($data == '[]')
                            <a href="{{ URL::to('shopping') }}" class="btn btn-success">Shop Now</a>
                            @else
                            <a href="{{ URL::to('orderplace') }}" class="btn btn-success">Buy Now</a>
                            @endif
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>
@endsection
