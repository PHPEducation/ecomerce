@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Navigation -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.Category') }}
                        <small>{{ trans('home_admin.Edit') }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::model($category, ['method' => 'POST', 'routes' => 'editCategory', 'id' => $category->id, 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('Name') !!}
                            {!! Form::text('Name', $category->name, ['class' => 'form-control', 'placeholder' => 'ex: news']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description') !!}
                            {!! Form::text('Description', $category->description, ['class' => 'form-control', 'placeholder' => 'Please Enter description']) !!}
                        </div>
                        <div class="custom-file">
                            {!! Form::label('Image') !!}
                            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
                        </div>
                        {!! Form::submit('Edit', ['class' => 'btn btn-default']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
