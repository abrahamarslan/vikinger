<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password | {{env('APP_NAME')}}</title>
</head>
<body>
<h1>Your reset code is: {{ $code }}</h1>
<p>Or you can click this link: <a href="{{$link}}">{{ $link }} </a></p>

<p>Thank you</p>
</body>
</html>
