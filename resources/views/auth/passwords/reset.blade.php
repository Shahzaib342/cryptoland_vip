@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height page-id-20">
        <div class="content">
            <form id="login-form" class="col-lg-12" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="col-lg-12 logo-cryptoland">
                    <img width="200" class="logo" src="{{ asset('images/Cryptoland-dark-logo.png') }}" alt="Logo"/>
                </div>
                <h2>Reset password</h2>
                <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" name="email" value="{{ old('name') }}" required>
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
                <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="fa fa-lock"></i><span class="span-input">Confirm password</span></label>
                </div>
                <div class="forgot-and-create">
                    <div class="form-submit-btn">
                        <button type="submit" class="btn btn-primary reset-btn">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection