@extends('authentication/_layouts/layout')
@section('title', 'Login')

@section('content')
<!-- LANDING FORM -->
    <div class="landing-form">
        <!-- FORM BOX -->
        <div class="form-box login-register-form-element">
            <!-- FORM BOX DECORATION -->
            <img class="form-box-decoration overflowing" src="{!! asset('theme/img/landing/rocket.png') !!}" alt="rocket">
            <!-- /FORM BOX DECORATION -->

            <!-- FORM BOX TITLE -->
            <h2 class="form-box-title">Account Login</h2>
            <!-- /FORM BOX TITLE -->

            <!-- FORM -->
            {!! Form::open(['route' => 'authentication.postLogin', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate']) !!}
            {!! Form::token() !!}
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="login-username">Username or Email</label>
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
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="login-password">Password</label>
                            {!! Form::password('password',['class' => '', 'id' => 'login-password', 'autocomplete' => 'off']) !!}
                        </div>
                        <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row space-between">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- CHECKBOX WRAP -->
                        <div class="checkbox-wrap">
                            <input type="checkbox" id="login-remember" name="login_remember" checked>
                            <!-- CHECKBOX BOX -->
                            <div class="checkbox-box">
                                <!-- ICON CROSS -->
                                <svg class="icon-cross">
                                    <use xlink:href="#svg-cross"></use>
                                </svg>
                                <!-- /ICON CROSS -->
                            </div>
                            <!-- /CHECKBOX BOX -->
                            <label for="login-remember">Remember Me</label>
                        </div>
                        <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->

                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM LINK -->
                        <a class="form-link login-forgot-form-trigger" href="{!! route('authentication.getForgot') !!}">Forgot Password?</a>
                        <!-- /FORM LINK -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- BUTTON -->
                        <button class="button medium secondary">Login to your Account!</button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
            {!! Form::close() !!}
            <!-- /FORM -->

            <!-- LINED TEXT -->
            <p class="lined-text">Login with your Social Account</p>
            <!-- /LINED TEXT -->

            <!-- SOCIAL LINKS -->
            <div class="social-links">
                <!-- SOCIAL LINK -->
                <a class="social-link facebook" href="#">
                    <!-- ICON FACEBOOK -->
                    <svg class="icon-facebook">
                        <use xlink:href="#svg-facebook"></use>
                    </svg>
                    <!-- /ICON FACEBOOK -->
                </a>
                <!-- /SOCIAL LINK -->

                <!-- SOCIAL LINK -->
                <a class="social-link twitter" href="#">
                    <!-- ICON TWITTER -->
                    <svg class="icon-twitter">
                        <use xlink:href="#svg-twitter"></use>
                    </svg>
                    <!-- /ICON TWITTER -->
                </a>
                <!-- /SOCIAL LINK -->

                <!-- SOCIAL LINK -->
                <a class="social-link twitch" href="#">
                    <!-- ICON TWITCH -->
                    <svg class="icon-twitch">
                        <use xlink:href="#svg-twitch"></use>
                    </svg>
                    <!-- /ICON TWITCH -->
                </a>
                <!-- /SOCIAL LINK -->

                <!-- SOCIAL LINK -->
                <a class="social-link youtube" href="#">
                    <!-- ICON YOUTUBE -->
                    <svg class="icon-youtube">
                        <use xlink:href="#svg-youtube"></use>
                    </svg>
                    <!-- /ICON YOUTUBE -->
                </a>
                <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
        </div>
        <!-- /FORM BOX -->

        <!-- FORM BOX -->
        <div class="form-box login-register-form-element">
            <!-- FORM BOX DECORATION -->
            <img class="form-box-decoration" src="{!! asset('theme/img/landing/rocket.png') !!}" alt="rocket">
            <!-- /FORM BOX DECORATION -->

            <!-- FORM BOX TITLE -->
            <h2 class="form-box-title">Create your Account!</h2>
            <!-- /FORM BOX TITLE -->

            <!-- FORM -->
            {!! Form::open(['route' => 'authentication.postRegister', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate']) !!}
            {!! Form::token() !!}
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="register-email">Your Email</label>
                            {!! Form::text('email', null, ['class' => '', 'id' => 'register-email', 'autocomplete' => 'off'] ) !!}
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
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="register-name">Your Name</label>
                            {!! Form::text('name', null, ['class' => '', 'id' => 'register-name', 'autocomplete' => 'off'] ) !!}
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
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="register-username">Username</label>
                            {!! Form::text('username', null, ['class' => '', 'id' => 'login-username', 'autocomplete' => 'off'] ) !!}
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
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="register-password">Password</label>
                            {!! Form::password('password',['class' => '', 'id' => 'register-password', 'autocomplete' => 'off']) !!}
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
                        <!-- FORM INPUT -->
                        <div class="form-input">
                            <label for="register-password-repeat">Repeat Password</label>
                            {!! Form::password('password_confirm',['class' => '', 'id' => 'register-password-repeat', 'autocomplete' => 'off']) !!}
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
                        <!-- CHECKBOX WRAP -->
                        <div class="checkbox-wrap">
                            <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
                            <!-- CHECKBOX BOX -->
                            <div class="checkbox-box">
                                <!-- ICON CROSS -->
                                <svg class="icon-cross">
                                    <use xlink:href="#svg-cross"></use>
                                </svg>
                                <!-- /ICON CROSS -->
                            </div>
                            <!-- /CHECKBOX BOX -->
                            <label for="register-newsletter">Send me news and updates via email</label>
                        </div>
                        <!-- /CHECKBOX WRAP -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                        <!-- BUTTON -->
                        <button class="button medium primary">Register Now!</button>
                        <!-- /BUTTON -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
            {!! Form::close() !!}
            <!-- /FORM -->

            <!-- FORM TEXT -->
            <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If you have any problems, <a href="#">contact us</a>!</p>
            <!-- /FORM TEXT -->
        </div>
        <!-- /FORM BOX -->
    </div>
    <!-- /LANDING FORM -->
@stop
