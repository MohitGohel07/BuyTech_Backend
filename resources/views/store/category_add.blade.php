@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>@if(!empty($data)) Update @else Add @endif Products</h6>
        </div>
        <div class="card-body pb-md-50">
            <form method="POST" action="{{URL::to('store/category/add')}}" enctype="multipart/form-data">
                @csrf

                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Brand Title</label>
                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{!empty($data->brand) ? $data->brand : '' }}" name="brand" placeholder="brand Title" required>
                    </div>
                </div>

                @if(!empty($data))
                <input type="hidden" name="id" value="{{$data->id}}">
                @endif
                <button class="btn btn-primary px-30" type="submit">Submit Form</button>
            </form>
        </div>
    </div>
        <!-- ends: .card -->
</div>

@endsection
