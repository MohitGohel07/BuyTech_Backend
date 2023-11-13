@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>@if(!empty($data)) Update @else Add @endif Products</h6>
        </div>
        <div class="card-body pb-md-50">
            <form method="POST" action="{{URL::to('admin/Products/add')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Category</label>
                        <select class="form-control ih-medium ip-light radius-xs b-light" name="category_id">
                            @foreach($categories as $category)
                                @if(!empty($data->category_id) && $data->category_id == $category->id)
                                    <option value="{{$category->id}}" selected>
                                        {{$category->brand}}
                                    </option>
                                @else
                                    <option value="{{$category->id}}">
                                        {{$category->brand}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                @if(empty($data))
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Image</label>
                        <input type="file" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" name="image" required>
                    </div>
                </div>
                @else
                <img src="{{URL::to('public/images/product', $data->image)}}" height="200px">
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Image</label>
                        <input type="file" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" name="image">
                    </div>
                </div>
                @endif
                {{-- <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Gender</label>
                        <select class="form-control ih-medium ip-light radius-xs b-light" name="gender_id">
                            @foreach($genders as $gender)
                                @if(!empty($data->gender_id) && $data->gender_id == $gender->id)
                                    <option value="{{$gender->id}}" selected>
                                        {{$gender->title}}
                                    </option>
                                @else
                                    <option value="{{$gender->id}}">
                                        {{$gender->title}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">type</label>
                        <select class="form-control ih-medium ip-light radius-xs b-light" name="type_id">
                            @foreach($types as $type)
                                @if(!empty($data->type_id) && $data->type_id == $type->id)
                                    <option value="{{$type->id}}" selected>
                                        {{$type->title}}
                                    </option>
                                @else
                                    <option value="{{$type->id}}">
                                        {{$type->title}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div> --}}

                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Model Name</label>
                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{!empty($data->model_name) ? $data->model_name : '' }}" name="model_name" placeholder="model_name" required>
                    </div>
                </div>
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Title</label>
                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{!empty($data->title) ? $data->title : '' }}" name="title" placeholder="Title" required>
                    </div>
                </div>
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Description</label>
                        {{-- <input type="text" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{!empty($data->title) ? $data->title : '' }}" name="title" placeholder="Title" required> --}}
                        <textarea class="form-control ip-light radius-xs b-light" rows="5" id="validationDefault01" name="description">{{!empty($data->description) ? $data->description : '' }}</textarea>
                    </div>
                </div>
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Price</label>
                        <input type="number" min="0" class="form-control ih-medium ip-light radius-xs b-light" id="validationDefault01" value="{{!empty($data->price) ? $data->price : '0' }}"  name="price" placeholder="price" required>
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