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
                        <small>{{ $user->name }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    {!! Form::model($user, ['method' => 'POST', 'routes' => 'editUser', 'id' => $user->id, 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label('Username') !!}
                            {!! Form::text('Username', $user->name, ['class' => 'form-control', 'placeholder' => 'Please Enter Username']) !!}
                            {!! $errors->first('Username', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::checkbox('changePassword', null, false, ['id' => 'changePassword']) !!}
                            {!! Form::label('Password') !!}
                            {!! Form::text('Password', null, ['class' => 'form-control password', 'placeholder' => 'Please Enter Password']) !!}
                            {!! $errors->first('Password', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('RePassword') !!}
                            {!! Form::text('RePassword', null, ['class' => 'form-control password', 'placeholder' => 'Please Enter RePassword']) !!}
                            {!! $errors->first('Password', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Phone') !!}
                            {!! Form::text('Phone', $user->phone, ['class' => 'form-control', 'placeholder' => 'Please Enter Phone']) !!}
                            {!! $errors->first('Phone', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Address') !!}
                            {!! Form::text('Address', $user->address, ['class' => 'form-control', 'placeholder' => 'Please Enter Address']) !!}
                            {!! $errors->first('Address', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email') !!}
                            {!! Form::text('Email', $user->email, ['class' => 'form-control', 'placeholder' => 'Please Enter Email', 'type' => 'email', 'readonly' => 'true']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Note') !!}
                            {!! Form::text('Note', $user->note, ['class' => 'form-control', 'placeholder' => 'Please Enter Note']) !!}
                            {!! $errors->first('Note', '<p class="message">:message</p>') !!}
                        </div>
                        <div class="custom-file">
                            {!! Form::label('Avatar') !!}
                            {!! Form::file('avatar', ['class' => 'custom-file-input']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('User Level: ') !!}
                            {!! Form::label('Admin') !!}
                                {!! Form::checkbox('role', '0', ['class' => 'radio-inline']) !!}
                            {!! Form::label('Member') !!}
                                {!! Form::checkbox('role', '1', ['class' => 'radio-inline']) !!}
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
