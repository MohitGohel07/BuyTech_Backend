@extends('admin.layouts.master')

@section('content')

    <main id="main" class="main">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="card mt-30">
                    <div class="card-body">

                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                            <div class="table-responsive">
                                <div class="adv-table-table__header">
                                    <h4>Create Store Users</h4>
                                    <div class="adv-table-table__button">
                                        <div class="dropdown">
                                            <a class="btn btn-primary dropdown-toggle dm-select" href="#"
                                                role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Export
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">copy</a>
                                                <a class="dropdown-item" href="#">csv</a>
                                                <a class="dropdown-item" href="#">print</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="filter-form-container"></div>
                                <table class="table mb-0 table-borderless adv-table" data-sorting="true"
                                    data-filter-container="#filter-form-container" data-paging-current="1"
                                    data-paging-position="right" data-paging-size="10">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">id</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">email</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Action</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">{{ $user->id }}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable-inline-title">
                                                            <a href="#" class="text-dark fw-500">
                                                                <h6>{{ $user->name }} </h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $user->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                       <a href="{{URL::to('store/accept/'.$user->id)}}"> <span
                                                            class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">accept</span>
                                                       </a>
                                                        </div>

                                                    <div class="userDatatable-content d-inline-block">
                                                        <span
                                                            class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">reject</span>
                                                    </div>

                                                </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
