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
                    <div class="m-b-30">
                        <div class="chartjs-size-monitor goal">
                            <div class="chartjs-size-monitor-expand goal1">
                                <div class="goal2"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink goal3">
                                <div class="goal4"></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="goal-chart"></canvas>
                    </div>
                    <div class="row m-b-10">
                        <div class="col-10 offset-1">
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">166</h2>
                                        <span class="status gradient info"></span>
                                        <span class="m-l-10">{{ trans('home.user') }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h2 class="font-weight-light">71</h2>
                                        <span class="status gradient"></span>
                                        <span class="m-l-10">{{ trans('home.order') }}</span>
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
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="{{ asset('images/avatars/thumb-1.jpg') }} " alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Marshall Nichols</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33667</td>
                            <td>08 May 2018</td>
                            <td> $168.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="{{ asset('images/avatars/thumb-2.jpg') }} " alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Susie Willis</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33683</td>
                            <td>05 May 2018</td>
                            <td>$433.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="{{ asset('images/avatars/thumb-3.jpg') }} " alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Debra Stewart</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33668</td>
                            <td>09 May 2018</td>
                            <td>$2488.00</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="list-media">
                                    <div class="list-item">
                                        <div class="media-img">
                                            <img src="{{ asset('images/avatars/thumb-8.jpg') }} " alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10 text-semibold">Erin Gonzales</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>#33684</td>
                            <td>16 May 2018</td>
                            <td>$762.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
