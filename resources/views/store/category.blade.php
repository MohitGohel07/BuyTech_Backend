@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">category</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::to('store') }}"><i class="uil uil-estate"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">category</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-12">
            <div class="card card-default card-md mb-4">
                <div class="card-header">
                    <h6>category</h6>
                    <a class="btn btn-primary" href="{{ URL::to('store/category/add') }}" role="button">Add New </a>
                </div>
                <div class="card-body">
                    <div class="drag-drop-wrap">
                        <div class="drag-drop table-responsive-lg w-100 mb-30">
                            <table class="table mb-0 table-basic">
                                <thead>
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @if (!empty($data))
                                        @foreach ($data as $value)
                                        @if($value->userId == Auth::user()->id)
                                            <tr class="draggable" draggable="true">
                                                <td>
                                                    {{ $value->brand }}
                                                </td>
                                                <td>
                                                    {{ $value->created_at }}
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="{{ URL::to('store/category/add', $value->id) }}">
                                                            <img class="svg"
                                                                src="{{ URL::to('public/backend/img/svg/edit.svg') }}"
                                                                alt="edit">
                                                        </a>
                                                        <a href="{{ URL::to('store/category/remove', $value->id) }}">
                                                            <img class="svg"
                                                                src="{{ URL::to('public/backend/img/svg/trash-2.svg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card -->
        </div>
    </div>
@endsection
