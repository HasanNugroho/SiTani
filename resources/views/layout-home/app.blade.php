<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
 

    <!-- Bootstrap CSS -->
   
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/bootstrap/css/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">


    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"> --}}

    <title>@yield('title')</title>
</head>

<body>
    {{--  --}}
    {{-- Navbar --}}
    {{--  --}}
    <header>
        @include('layout-home.navbar')
    </header>
    {{--  --}}
    {{-- Ending Navbar --}}
    {{--  --}}
    
    {{--  --}}
    {{-- CONTENT --}}
    @yield('content')
    {{-- Ending Content --}}
    {{--  --}}

    {{--  --}}
    {{-- FOOTER --}}
    {{--  --}}
    @include('layout-home.footer')
    {{--  --}}
    {{-- Ending FOOTER --}}
    {{--  --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script> --}}
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="/bootstrap/pooper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/smooth.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="/js/swiper-bundle.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
            breakpoints: {
                '@0.75': {
                slidesPerView: 1,
                spaceBetween: 2,
                },
                '@1.00': {
                slidesPerView: 2,
                spaceBetween: 2,
                },
                '@1.50': {
                slidesPerView: 3,
                spaceBetween: 2,
                },
            },
            autoplay: {
                delay: 2400,
            },
        });
    </script>
</body>

</html>
