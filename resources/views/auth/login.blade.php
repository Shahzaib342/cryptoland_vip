@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height page-id-30">
        <div class="content">
            <form id="login-form" class="col-lg-12" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col-lg-12">
                    <img width="200" class="logo" src="{{ asset('images/Cryptoland-dark-logo.png') }}" alt="Logo"/>
                </div>
                <h2>Log in</h2>
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
                <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="fa fa-lock"></i><span class="span-input">password</span></label>
                </div>
                <div class="forgot-and-create">
                    <div class="form-bottom-links">
                        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>
                    <div class="form-submit-btn">
                        <button type="submit" class="btn btn-primary log-in">Log in</button>
                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success login-form-email-messages">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning login-form-email-messages">
                        {{ session('warning') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection