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
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('Name') !!}
                            {!! Form::text('txtUser', null, ['class' => 'form-control', 'placeholder' => 'ex: news']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Slug') !!}
                            {!! Form::text('txtPass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter slug']) !!}
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
