@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height page-id-30">
        <div class="content">
            <form id="login-form" class="col-lg-12" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="col-lg-12">
                    <img width="200" class="logo" src="{{ asset('images/Cryptoland-dark-logo.png') }}" alt="Logo"/>
                </div>
                <h2>FORGOT YOUR </br>PASSWORD</h2>
                <p>Select which contact details should we use </br>to reset your password</p>
                <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" value="{{ old('name') }}"
                           required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="fas fa-envelope"></i><span class="span-input">Email</span></label>
                </div>
                <div class="forgot-and-create">
                    <div class="form-submit-btn">
                        <button type="submit" class="btn btn-primary log-in">Reset</button>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success login-form-email-messages">
                        {{ session('status') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection