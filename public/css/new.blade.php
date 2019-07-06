

@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content" style="margin-top: 0;">
            <form id="login-form" class="col-lg-12" autocomplete="off" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="col-lg-12 logo-kapsul">
                    <img width="200" class="logo" src="{{ asset('images/Cryptoland-dark-logo.png') }}"
                         alt="Logo"/>
                </div>
                <h2>SIGN UP</h2>
                <div style="clear:both;"></div>
                <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Full name</span></label>
                </div>
                <div class="group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Email</span></label>
                </div>
                <div class="group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password"  name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">password</span></label>
                </div>
                <div class="group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Bitcoin wallet address</span></label>
                </div>
                <div class="forgot-and-create tab-menu">
                    <div style="float:left;" class="already-account-link">
                        <a class="sifre-hatirlat-link">Already have an account ?</a>
                        <a class="login-link" href="/login">Login</a>
                    </div>
                    <div style="float: right;">
                        <button type="submit"  class="btn btn-primary sign-up">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection