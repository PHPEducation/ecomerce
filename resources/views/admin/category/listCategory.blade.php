@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Category') }}
                        <small>{{ trans('home_admin.List') }}</small>
                    </h1>
                    <a href="{{ route('addCategory') }}" class="a_add">Add Category</a>
                    {!! Form::open(array('route' => 'importCategory', 'method' => 'POST', 'files' => 'true')) !!}
                        <div class="row">
                            <div class="col-xs-10 col-sm-10 col-md-10">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @elseif(Session::has('warning'))
                                <div class="alert alert-warning">{{ Session::get('message') }}</div>
                            @endif
                                <div class="form-group">
                                    {!! form::label('sample_file', 'Select file to Import:', ['class' => 'col-md-3']) !!}
                                    <div class="co-md-9">
                                        {!! Form::file('categories', ['class' => 'custom-file-input']) !!}
                                        {!! $errors->first('categories', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 text-center">
                                {!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>{{ trans('home_admin.ID') }}</th>
                                <th>{{ trans('home_admin.Name') }}</th>
                                <th>{{ trans('home_admin.Description') }}</th>
                                <th>{{ trans('home_admin.Image') }}</th>
                                <th>{{ trans('home_admin.Delete') }}</th>
                                <th>{{ trans('home_admin.Edit') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td><img class="img_image img-reponsive" src="{{ asset("storage/img/categories/$category->image" ) }}"></td>
                                <td class="center">
                                    <i class="fa fa-trash-o  fa-fw"></i>
                                    <a href="javascript:;" onclick="confirmRemove('{{ route('deleteCategory', ['id' => $category->id]) }}')">{{ trans('home_admin.Delete') }}</a>
                                </td>
                                <td class="center">
                                    <i class="fa fa-pencil fa-fw"></i> <a href="/admin/category/editCategory/{{ $category->id }}">{{ trans('home_admin.Edit') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="paginate">
            {{ $categories->links() }}
        </div>
    </div>
</div>
@endsection
