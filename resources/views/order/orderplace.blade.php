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
                                            <th>QTY</th>
                                            <td>{{ $qty }}</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Total</th>
                                            <td>{{ $total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div>
                                <form action="{{URL::to('order/add')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" rows="3"></textarea>
                                      </div>
                                      @error('address')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                      <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="payment"  value="0" checked>
                                        <label class="form-check-label">
                                          Cash On Delivery
                                        </label>
                                      </div>
                                      <button type="submit" class="btn btn-success">Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </section>
@endsection
