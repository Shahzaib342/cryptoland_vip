@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height page-id-10">
            <div class="content">
             <img src="{{ asset('images/CL-Logo.png') }}" alt="Welcome to Cryptoland" width="100px">
                <h3>Welcome Back to</h3>
                <h2>CRYPTOLAND</h2>
                <p>Lorem ipsum Lorem ipsum dolor sit amet,<br>consectetuer adipiscing elit</p>
                <a href="/register" type="button" class="btn btn-primary sign-up">Sign up</a>
                <a href="/login" class="btn btn-primary log-in">Log in</a>
            </div>
        </div>
@endsection
