<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="home"><h2>Enjoy</h2></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Documentation
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="galery">Gallerys</a></li>
              <li><a class="dropdown-item" href="article">Articles</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-lg-none d-flex justify-content-center mt-2">
          <a href="/login" class="btn btn-primary">Login <i class="fa-solid fa-right-to-bracket"></i></</a>
        </div>
      </div>
      <div class="d-none d-lg-flex">
        <a href="/login" class="btn btn-primary">Login <i class="fa-solid fa-right-to-bracket"></i></a>
      </div>
    </div>
</nav>

<footer class="bg-dark text-white text-center p-2">
    &copy; 2024 Enjoy Corp. All Rights Reserved.

    <div class="mt-3 ">
        <a href="https://www.instagram.com" target="_blank" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://wa.me/1234567890" target="_blank" class="text-white me-3"><i class="fab fa-whatsapp fa-2x"></i></a>
        <a href="https://www.tiktok.com" target="_blank" class="text-white me-3"><i class="fab fa-tiktok fa-2x"></i></a>
        <a href="https://www.facebook.com" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Durasi animasi (dalam milidetik)
  });
</script>

  </body>
</html>
