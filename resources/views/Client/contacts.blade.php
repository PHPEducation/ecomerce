@extends('master')
@section('title', 'home')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">{{ trans('home.contacts') }}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{ route('trangchu') }}">{{ trans('home.home') }}</a> / <span>{{ trans('home.contacts') }}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="beta-map">
        <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904" ></iframe></div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">

            <div class="space50">&nbsp;</div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>{{ trans('home.contactForm') }}</h2>
                    <div class="space20">&nbsp;</div>
                    <p></p>
                    <div class="space20">&nbsp;</div>
                    {!! Form::open(['method' => 'POST','class' => 'contact-form']) !!}
                        <div class="form-block">
                            {!! Form::text('your-name', '' , ['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-block">
                            {!! Form::email('your-email', '' , ['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-block">
                            {!! Form::text('your-subject', '' , ['class' => 'form-control', 'id' => 'subject']) !!}
                        </div>
                        <div class="form-block">
                             {!! Form::textarea('your-message', '' , ['class' => 'form-control', 'id' => 'your-message']) !!}
                        </div>
                        <div class="form-block">
                            <button type="submit" class="beta-btn primary">{{ trans('home.sedMessage') }} <i class="fa fa-chevron-right"></i></button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div> <!-- #content -->
    </div>
@endsection
