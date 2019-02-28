<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php csrf_token() ?>">
    <title>Todo app</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

</head>
<body>
@include('inc.navbar')
<div class="container mb-3 mt-3">
    @include('inc.messages')
    @yield('content')
</div>
</body>
</html>