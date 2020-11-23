<!DOCTYPE html>
<html>
<head>
    <title>Registration | {{env('APP_NAME')}}</title>
</head>
<body>
<h1>Hello, {{$user->name}}</h1>
<p>You have successfully registered at {{env('APP_NAME')}}. To activate your account, kindly click the link: <a href="{{$link}}">{{ $link }}</a></p>

<p>Thank you</p>
</body>
</html>
