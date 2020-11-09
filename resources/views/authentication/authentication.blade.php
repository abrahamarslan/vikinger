<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="{!! asset('theme/css/vendor/bootstrap.min.css') !!}" />
    <!-- styles -->
    <link rel="stylesheet" href="{!! asset('theme/css/styles.min.css') !!}" />
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css" />

    <!-- favicon -->
    <link rel="icon" href="{!! asset('theme/img/favicon.ico') !!}">
    <title>@yield('title') | {!! env('APP_NAME') !!}</title>
    <meta name="description" content="Login to {!! env('APP_NAME') !!}" />

</head>
<body>

<!-- LANDING -->
<div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
        <!-- LOGO -->
        <div class="logo">
            <!-- ICON LOGO VIKINGER -->
            <svg class="icon-logo-vikinger">
                <use xlink:href="#svg-logo-vikinger"></use>
            </svg>
            <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- LANDING INFO PRETITLE -->
        <h2 class="landing-info-pretitle">Welcome to</h2>
        <!-- /LANDING INFO PRETITLE -->

        <!-- LANDING INFO TITLE -->
        <h1 class="landing-info-title">{!! env('APP_NAME') !!}</h1>
        <!-- /LANDING INFO TITLE -->

        <!-- LANDING INFO TEXT -->
        <p class="landing-info-text">The next generation social network &amp; community! Connect with your friends and play with our quests and badges gamification system!</p>
        <!-- /LANDING INFO TEXT -->

        <!-- TAB SWITCH -->
        <div class="tab-switch">
            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Login</p>
            <!-- /TAB SWITCH BUTTON -->

            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Register</p>
            <!-- /TAB SWITCH BUTTON -->
        </div>
        <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

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
                            {!! Form::email('email', null, ['class' => '', 'id' => 'login-username', 'placeholder' => __('authentication/form.login.email'), 'autocomplete' => 'off'] ) !!}                            
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
                            {!! Form::password('password',['class' => '', 'id' => 'login-password', 'placeholder' => __('authentication/form.login.password'), 'autocomplete' => 'off']) !!}                            
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
                        <a class="form-link" href="#">Forgot Password?</a>
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
                            {!! Form::email('email', null, ['class' => '', 'id' => 'register-email', 'placeholder' => __('authentication/form.login.email'), 'autocomplete' => 'off'] ) !!}                                                        
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
                            {!! Form::email('username', null, ['class' => '', 'id' => 'login-username', 'placeholder' => __('authentication/form.login.username'), 'autocomplete' => 'off'] ) !!}                            
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
                            {!! Form::password('password',['class' => '', 'id' => 'register-password', 'placeholder' => __('authentication/form.login.password'), 'autocomplete' => 'off']) !!}                            
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
                            {!! Form::password('password_confirm',['class' => '', 'id' => 'register-password-repeat', 'placeholder' => __('authentication/form.login.confirm_password'), 'autocomplete' => 'off']) !!}                            
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
</div>
@include('authentication._partials.notifications')
<!-- /LANDING -->

<!-- app -->
<script src="{!! asset('theme/js/utils/app.js') !!}"></script>
<!-- XM_Plugins -->
<script src="{!! asset('theme/js/vendor/xm_plugins.min.js') !!}"></script>
<!-- form.utils -->
<script src="{!! asset('theme/js/form/form.utils.js') !!}"></script>
<!-- landing.tabs -->
<script src="{!! asset('theme/js/landing/landing.tabs.js') !!}"></script>
<!-- SVG icons -->
<script src="{!! asset('theme/js/utils/svg-loader.js') !!}"></script>
</body>
</html>
