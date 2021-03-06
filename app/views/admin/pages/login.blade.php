@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3" style="text-align: center; margin-top: 50px; margin-bottom: 20px;">
                <img src="{{ URL::asset('public/assets/img/DEB-Media-logo-wit.png') }}" style="margin: 0 auto; text-align: center;" />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4 login-box">
                {{ Form::open(array('route' => 'admin.authenticate')) }}
                    <div class="form-group">
                        {{ $errors->first('email') }}
                        {{ $errors->first('password') }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'E-mailadres', array('class' => 'control-label')) }}
                        {{ Form::text('email', Input::old('email'), array('placeholder' => 'naam@domein.nl', 'class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Wachtwoord', array('class' => 'control-label')) }}
                        {{ Form::password('password', array('class' => 'form-control')) }}
                    </div>
                    <p>{{ Form::button('Inloggen', array('class' => 'btn btn-primary', 'type' => 'submit', 'style' => 'width: 100%')) }}</p>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop