@extends('master_admin')
@section('content')
<div id="wrapper">
    <!-- Navigation -->

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ trans('home_admin.User') }}
                        <small>{{ trans('home_admin.Edit') }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open(['method' => 'POST']) !!}
                        <div class="form-group">
                            {!! Form::label('Username') !!}
                            {!! Form::text('txtUser', null, ['class' => 'form-control', 'disabled' => 'true']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Password') !!}
                            {!! Form::text('txtPass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Password']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('RePassword') !!}
                            {!! Form::text('txtRePass', null, ['class' => 'form-control', 'placeholder' => 'Please Enter RePassword']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email') !!}
                            {!! Form::text('txtEmail', null, ['class' => 'form-control', 'placeholder' => 'Please Enter Status']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('User Level: ') !!}
                            {!! Form::label('Admin') !!}
                                {!! Form::checkbox('rdoLevel', '1', ['class' => 'radio-inline']) !!}
                            {!! Form::label('Member') !!}
                                {!! Form::checkbox('rdoLevel', '2', ['class' => 'radio-inline']) !!}
                        </div>
                        {!! Form::submit('User Edit', ['class' => 'btn btn-default']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
@endsection
