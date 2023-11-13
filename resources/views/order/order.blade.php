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
                        <div class="card">
                            <div class="row">
                                <div class="col-md-5 col-sm-6 m-3">
                                    <button class="btn btn-outline-dark pending active">pending</button>
                                    <button class="btn btn-outline-dark complated ">complated</button>
                                </div>
                     
                        <div class="table-responsive fade show active pending" id="pending">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                                        <tr>
                                            <td><img src="{{ URL::to('public/images/product/' . $item->image) }}"
                                                    alt="image" width="50px"></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                @if ($item->order_status == '0')
                                                    Complate
                                                @elseif($item->order_status == '2')
                                                   Confirmed
                                                   @else
                                                   Pending
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->payment_status == '0')
                                                    success
                                                @else
                                                    Pending
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive fade complated" id="complated">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>QTY</th>
                                    <th>Total</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                </thead>
                                <tbody>
                                    @foreach ($complated as $item)
                                        <input type="hidden" name="id[]" value="{{ $item->id }}">
                                        <tr>
                                            <td><img src="{{ URL::to('public/images/product/' . $item->image) }}"
                                                    alt="image" width="50px"></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>
                                                @if ($item->order_status == '0')
                                                    Complate
                                                @elseif($item->order_status == '2')
                                                   Confirmed
                                                   @else
                                                   Pending
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->payment_status == '0')
                                                    success
                                                @else
                                                    Pending
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

            </section>
        </div>
    </section>

    <script src="{{URL::to('public/assets/js/jquery.min.js')}}"></script>

 <script>
    $( document ).ready(function() {
        $('#complated').addClass('d-none');
    $('.pending').click(function (e) { 
        e.preventDefault();
        $(this).addClass('active');
        $('.complated').removeClass('active');
        $('#complated').removeClass('show','active');
        $('#complated').addClass('d-none');
        $('#pending').addClass('show','active');        
        $('#pending').removeClass('d-none');        
    });
    $('.complated').click(function (e) { 
        e.preventDefault();
        $(this).addClass('active');
        $('.pending').removeClass('active');
        $('#pending').removeClass('show','active');        
        $('#pending').addClass('d-none');        
        $('#complated').addClass('show','active');
        $('#complated').removeClass('d-none');
    });
});
 </script>
@endsection
