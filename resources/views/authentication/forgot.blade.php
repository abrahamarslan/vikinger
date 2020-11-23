@extends('authentication/_layouts/layout')
@section('title', 'Login')
@section('login_buttons')
@show
@section('content')
    <!-- LANDING FORM -->
    <div class="landing-form">
        <!-- FORM BOX -->
        <div class="form-box login-forgot-form-element">
            <!-- FORM BOX DECORATION -->
            <img class="form-box-decoration overflowing" src="{!! asset('theme/img/landing/rocket.png') !!}" alt="rocket">
            <!-- /FORM BOX DECORATION -->

            <!-- FORM BOX TITLE -->
            <h2 class="form-box-title">Reset Password</h2>
            <!-- /FORM BOX TITLE -->

            <!-- FORM -->
        {!! Form::open(['route' => 'authentication.postForgot', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate', 'id' => 'form', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::token() !!}
        <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input">
                        <label for="login-username">Registered Email</label>
                        {!! Form::text('email', null, ['class' => '', 'id' => 'login-username', 'autocomplete' => 'off'] ) !!}
                    </div>
                    <!-- /FORM INPUT -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">
                    <!-- BUTTON -->
                    <button class="button medium secondary">Reset Password!</button>
                    <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->

            <!-- FORM ROW -->
            <div class="form-row space-between">
                <!-- FORM ITEM -->
                <div class="form-item">
                    <!-- FORM LINK -->
                    <a class="form-link login-forgot-form-trigger" href="{!! route('authentication.getLogin') !!}">Login</a>
                    <!-- /FORM LINK -->
                </div>
                <!-- /FORM ITEM -->
                <!-- FORM ITEM -->
                <div class="form-item">
                    <!-- FORM LINK -->
                    <a class="form-link login-forgot-form-trigger" href="{!! route('authentication.getLogin') !!}">Register</a>
                    <!-- /FORM LINK -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
        {!! Form::close() !!}
        <!-- FORM TEXT -->
        <p class="form-text">You'll receive a link with a unique code in your email to reset your account password. If you have any problems, <a href="#">contact us</a>!</p>
        <!-- /FORM TEXT -->
        <!-- /FORM -->
        </div>
        <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
@stop
