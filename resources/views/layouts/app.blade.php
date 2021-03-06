<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop') - LiShop 数码商城</title>
    <!-- CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
        @yield('content')
    </div>
    <div>
        <ul>
            <li style="list-style: none;">
                <a href="{{ route('cart.index') }}" class="cart"><i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
    </div>
    @include('layouts._footer')
</div>
<!-- JS -->

<script src="{{ mix('js/app.js') }}"></script>
@yield('scriptAfterJs')
</body>
</html>
