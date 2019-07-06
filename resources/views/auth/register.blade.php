@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height page-id-20">
        <div class="content">
            <form id="login-form" class="col-lg-12" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="col-lg-12 logo-cryptoland">
                    <img width="200" class="logo" src="{{ asset('images/Cryptoland-dark-logo.png') }}" alt="Logo"/>
                </div>
                <h2>SIGN UP</h2>
                <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class='fas fa-user'></i><span class="span-input">Full name</span></label>
                </div>
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
                <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="bitcoin-wallet-address" type="text" name="bitcoin-wallet-address" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="fa fa-envelope"></i><span class="span-input">Bitcoin wallet address</span></label>
                </div>
                <div class="forgot-and-create">
                    <div class="form-bottom-links">
                        <a>Already have an account ?</a>
                        <a href="/login">Login</a>
                    </div>
                    <div class="form-submit-btn">
                        <button type="submit" class="btn btn-primary sign-up">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection