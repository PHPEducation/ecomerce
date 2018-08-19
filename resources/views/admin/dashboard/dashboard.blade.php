@extends('admin.master')
@section('title', trans('home.home'))
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('home.stat') }}</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row m-b-10">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">10</h2>
                                        <span class="m-l-10"><a href="{{ url('admin/users') }}">{{ trans('home.user') }}</a></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">10</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10"><a href="{{ url('admin/orders') }}">{{ trans('home.order') }}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">10</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10"><a href="{{ url('admin/posts') }}">{{ trans('home.post') }}</a></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">10</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10"><a href="{{ url('admin/products') }}">{{ trans('home.product') }}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ trans('home.recent_order') }}</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)">
                                    <i class="mdi mdi-dots-vertical font-size-20"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="table-overflow">
                    <table class="table table-lg">
                        <thead>
                        <tr>
                            <td class="text-dark text-semibold">{{ trans('home.customer') }}</td>
                            <td class="text-dark text-semibold">{{ trans('home.order_id') }}</td>
                            <td class="text-dark text-semibold">{{ trans('home.order_date') }}</td>
                            <td class="text-dark text-semibold">{{ trans('home.amount') }}</td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
