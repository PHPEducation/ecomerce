<div id="load_products">
    <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dt-opt_length">
                    <label>
                        {!! Form::open(['method' => 'GET', 'url' => 'admin/products']) !!}
                        {{ trans('home.show') }}
                        {!! Form::select('dt-opt_length', ['10' => 10, '25' => 25, '50' => 50, '100' => 100], null, ['class' => 'form-control form-control-sm', 'id' => 'select_show', 'aria-controls' => 'dt-opt']) !!}
                        {{ trans('home.line') }}
                        {!! Form::close() !!}
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                {!! Form::open(['method' => 'GET', 'url' => 'admin/products']) !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        {!! Form::submit(trans('home.searching'), ['class' => 'btn btn-default']) !!}
                    </div>
                    {!! Form::text('keyword', $keyword, ['class' => 'form-control', 'placeholder' => trans('home.search')]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="dt-opt" class="table table-hover table-xl dataTable no-footer" role="grid" aria-describedby="dt-opt_info">
                    <thead>
                    <tr role="row">
                        <th>{{ trans('home.product') }}</th>
                        <th>{{ trans('home.price') }}</th>
                        <th>{{ trans('home.discount') }}</th>
                        <th>{{ trans('home.category') }}</th>
                        <th>{{ trans('home.brand') }}</th>
                        <th>{{ trans('home.status') }}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                            <tr role="row" class="odd">
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                                <img src="{{ asset('uploads/products/thumbnail/' . $product->thumbnail) }} " alt="" class="avatar">
                                            </div>
                                            <div class="info">
                                                <span class="title">{{ $product->name }}</span>
                                                <span class="sub-title">ID {{ $product->id }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->discount }} %</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                                <td>
                                    @if($product->status == 0)
                                        <span class="badge badge-pill badge-gradient-danger">{{ trans('home.out_stock') }}</span>
                                    @else
                                        <span class="badge badge-pill badge-gradient-success">{{ trans('home.in_stock') }}</span>
                                    @endif
                                </td>
                                <td class="text-center font-size-18">
                                    {!! Form::open(['method' => 'GET', 'url' => 'admin/products/' . $product->id . '/edit']) !!}
                                    {!! Form::button('<i class="ti-pencil"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float']) !!}
                                    {!! Form::close() !!}
                                    {!! Form::open(['method' => 'DELETE', 'url' => ['admin/products', $product->id]]) !!}
                                    {!! Form::button('<i class="ti-trash"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float', 'id' => 'confirm_delete']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dt-opt_info" role="status" aria-live="polite">
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dt-opt_paginate">
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
