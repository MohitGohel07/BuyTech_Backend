@extends('master')
@section('content')
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
                        <div class="col-md-6">
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead >
                                        <tr>
                                            <th>Item</th>
                                            <td>Quantity</td>
                                            <td>Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->qty}}</td>
                                                <td>{{$item->total}}</td>
                                               
                                            </tr>
                                        @endforeach
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="{{URL::to('invoice/'.$order_id)}}" class="btn btn-success">Download Order Pdf</a>       
                            <a href="{{URL::to('/')}}" class="btn btn-primary float-end">HOME</a>                     
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </section>
@endsection
