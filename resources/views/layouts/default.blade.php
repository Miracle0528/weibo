<!doctype html>
<html lang="zh">
<head>
    <title>@yield('title','Weibo App') - Laravel 为开发者而生的框架</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>