<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{--    App CSS--}}
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css" />
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{!! asset('fonts/fa-pro/css/all.css') !!}" rel="stylesheet" type="text/css" />
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="{!! asset('theme/css/vendor/bootstrap.min.css') !!}" />
    <!-- styles -->
    <link rel="stylesheet" href="{!! asset('theme/css/styles.min.css') !!}" />
    <!-- favicon -->
    <link rel="icon" href="{!! asset('theme/img/favicon.ico') !!}">
    <title>@yield('title') | {!! env('APP_NAME') !!}</title>
    <meta name="description" content="Login to {!! env('APP_NAME') !!}" />
</head>
<body>

<!-- LANDING -->
<div class="landing" id="app">
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
        @section('login_buttons')
        <!-- TAB SWITCH -->
        <div class="tab-switch">
            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Login</p>
            <!-- /TAB SWITCH BUTTON -->

            <!-- TAB SWITCH BUTTON -->
            <p class="tab-switch-button login-register-form-trigger">Register</p>
            <!-- /TAB SWITCH BUTTON -->
        </div>
        @show
        <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    @yield('content')

@include('authentication._partials.notification')
</div>

<!-- /LANDING -->
{{--App Scripts--}}
<script src="{!! asset('js/app.js') !!}"></script>
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
