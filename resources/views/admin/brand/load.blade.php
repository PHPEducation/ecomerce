<div id="load">
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dt-opt_length">
                                <label>
                                    {!! Form::open(['method' => 'GET', 'url' => 'admin/brands']) !!}
                                    {{ trans('home.show') }}
                                    {!! Form::select('dt-opt_length', ['10' => 10, '25' => 25, '50' => 50, '100' => 100], null, ['class' => 'form-control form-control-sm', 'id' => 'select_show', 'aria-controls' => 'dt-opt']) !!}
                                    {{ trans('home.line') }}
                                    {!! Form::close() !!}
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => 'admin/brands']) !!}
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    {!! Form::submit(trans('home.searching'), ['class' => 'btn btn-default', 'id' => 'btnSearch']) !!}
                                </div>
                                {!! Form::text('keyword', $keyword, ['class' => 'form-control', 'placeholder' => trans('home.search'), 'id' => 'search_keyword']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="dt-opt" class="table table-hover table-xl dataTable no-footer" role="grid" aria-describedby="dt-opt_info">
                                <thead>
                                <tr role="row">
                                    <th>#</th>
                                    <th>{{ trans('home.brand') }}</th>
                                    <th>{{ trans('home.status') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($brands))
                                    @foreach($brands as $brand)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $brand->id }}</td>
                                            <td>{{ $brand->name }}</td>
                                            @if($brand->status == 0)
                                                <td>{{ trans('home.hidden') }}</td>
                                            @else
                                                <td>{{ trans('home.show') }}</td>
                                            @endif
                                            <td class="text-center font-size-18">
                                                {!! Form::open(['method' => 'GET', 'url' => 'admin/brands/' . $brand->id . '/edit']) !!}
                                                {!! Form::button('<i class="ti-pencil"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float']) !!}
                                                {!! Form::close() !!}
                                                {!! Form::open(['method' => 'DELETE', 'url' => ['admin/brands', $brand->id]]) !!}
                                                {!! Form::button('<i class="ti-trash"></i>', ['type' => 'submit', 'class' => 'text-gray btn btn-float', 'id' => 'confirm_delete_brand']) !!}
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
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dt-opt_paginate">
                                <ul class="pagination">
                                    {{ $brands->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
