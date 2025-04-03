<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">

    <title>Login System</title>
</head>
<body>

    @include('userbar')
    @yield('content')






    <script src="{{asset('assets/bootstrap/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
