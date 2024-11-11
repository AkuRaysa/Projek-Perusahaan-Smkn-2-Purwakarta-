<!doctype html>
<html lang="en">

<head>
    <!-- Meta dan judul -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company | @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="/assets/img/logo.png">

</head>

<body>

    @include('material.navbar2')

    <div class="container mt-5 pt-5">
        @yield('content')
    </div>



    <footer class="bg-dark text-white text-center p-2">
        <div class="mb-3 mt-2">
            <a href="https://www.instagram.com" target="_blank" class="text-white me-3"><i
                    class="fab fa-instagram fa-2x"></i></a>
            <a href="https://wa.me/1234567890" target="_blank" class="text-white me-3"><i
                    class="fab fa-whatsapp fa-2x"></i></a>
            <a href="https://www.tiktok.com" target="_blank" class="text-white me-3"><i
                    class="fab fa-tiktok fa-2x"></i></a>
            <a href="https://www.facebook.com" target="_blank" class="text-white me-3"><i
                    class="fab fa-facebook fa-2x"></i></a>
        </div>
        &copy; 2024 Enjoy Corp. All Rights Reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>
