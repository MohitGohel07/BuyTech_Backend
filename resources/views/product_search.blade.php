@if (!empty($datas))
@foreach ($datas as $data)
    <div class="col-lg-6 col-12">
        <div class="custom-block d-md-flex h-100">
            <div class="">
                <div class="custom-block-icon-wrap">
                    <a href="{{ URL::to('product/info/' . $data->id) }}"
                        class="custom-block-image-wrap">
                        <img src="{{ URL::to('public/images/product/' . $data->image) }}"
                            class="custom-block-image-product mx-auto" alt="">
                    </a>
                </div>
                <div class="mt-2 text-center">
                    <a href="{{URL::to('add/cart/'.$data->id)}}" class="btn custom-btn ">
                        Add To Cart
                    </a>
                </div>
            </div>

            <div class="custom-block-info">
                <h5 class="mb-2">
                    <a href="{{ URL::to('product/info/' . $data->id) }}">
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
@endforeach
@endif