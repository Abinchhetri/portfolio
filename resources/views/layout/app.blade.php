<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
