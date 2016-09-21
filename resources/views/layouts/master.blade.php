<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel ACL</title>
    <link rel="stylesheet" type="text/css" href="src/css/main.css"> 
    <!--{{ URL::asset('src/css/main.css') }}-->
</head>
<body>
@include('partials.header')
<div class="main">
    @yield('content')
</div>
</body>
</html>