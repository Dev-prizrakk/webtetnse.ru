<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Главная')</title>
    <link rel="stylesheet" href="{{ asset('css/home/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/estimate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/booklet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/company.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/testimonials.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/reviews.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">

</head>

<body>
    @yield('content')
</body>

</html>