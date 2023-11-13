@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6> Upload Csv</h6>
        </div>
        <div class="card-body pb-md-50">
            <form method="POST" action="{{URL::to('admin/csv/upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mx-n15">
                    <div class="col-md-4 mb-20 px-15">
                        <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center mb-10">Csv</label>
                        <input type="file" class="form-control ih-medium ip-light radius-xs b-light " id="validationDefault01" name="file">

                        @if (session()->has('empty'))
                        <div class="alert alert-danger m-2 p-2 ">
                            {{ session()->get('empty') }}
                        </div>
                    @endif  
                    @error('file')
                    <div class="alert alert-danger m-0">{{ $message }}</div>
                    @enderror
                      
                        @if (session()->has('success') )
                        <div class="alert alert-success m-2 p-2 ">
                            {{ session()->get('success') }}
                        </div>
                    @endif  
                    </div>
                   

                </div>
            <div class="d-flex">
                <button class="btn d-inline mx-2 btn-primary px-30" type="submit">Import</button><br>
                <a href="{{URL::to('admin/exportdemo')}}" class="btn my-3 btn-primary px-30" >Export Demo</a>
               
            </div>
            
                
            </form>
        </div>
    </div>
        
</div>

@endsection