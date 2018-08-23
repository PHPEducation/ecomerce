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
                    {!! Form::submit('Add', ['class' => 'btn btn-default btn_Add', 'routes' => 'addCategory']) !!}
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
                            <td><img height="100" ="" class="img_image img-reponsive" src="{{ asset("storage/img/categories/$category->image" ) }}"></td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i><a href="/admin/category/delete/{{ $category->id }}"> {{ trans('home_admin.Delete') }}</a>
                            </td>
                            <td class="center">
                                <i class="fa fa-pencil fa-fw"></i> <a href="/admin/category/editCategory/{{ $category->id }}">{{ trans('home_admin.Edit') }}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
