<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="antialiased font-body">
    @include('frontend.layouts.navbar')
    @include('frontend.layouts.hero')
    @include('frontend.layouts.about')
    @yield('content')
</body>

<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>

</html>