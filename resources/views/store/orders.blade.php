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
                                    <h4>Orders</h4>
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
                                                <span class="userDatatable-title">user</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Image</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Price</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">QTY</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Total</span>
                                            </th>

                                            <th>
                                                <span class="userDatatable-title">Order Status</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($data))
                                        @foreach ($data as $order)
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">{{ $order->id }}</div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">{{ $order->user_id }}</div>
                                                </td>
                                                <td>
                                                    <img src="{{URL::to('public/images/product', $order->image)}}" height="68">
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $order->model_name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $order->price }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $order->quantity }}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $order->payment_methods}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="userDatatable-content" href="{{ URL::to('store/orders/accept',$order->id) }}">
                                                        @if ($order->order_status == 'Pending')
                                                            <button  class="btn btn-outline-primary rounded-pill userDatatable-content-status w-100 pe-none" href="{{ URL::to('order/accept/',$order->id) }}">Pending</button>
                                                        @else
                                                        <button class="btn btn-success rounded-pill userDatatable-content-status w-100 pe-none">Complate</button>
                                                                @endif
                                                    </a>
                                                </td>
                                        @endforeach
                                        @endif
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
