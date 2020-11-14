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
    <meta name="csrf-token" content="{{csrf_token()}}" />
</head>
<body>
<div id="app">
    <form action="">
        <input type="text">
        <button type="submit">Send</button>
    </form>
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
<script type="text/javascript">

</script>
</body>
</html>
