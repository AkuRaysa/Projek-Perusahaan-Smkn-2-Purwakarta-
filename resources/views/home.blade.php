@extends('layouts.main')

@section('title', 'Home')


<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"  aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/h3.jpeg') }}" class="d-block w-100" alt="Slide 1" style="object-fit: cover; height: 100vh;">
            <div class="container">
              <div class="carousel-caption text-center" style="padding-bottom: 150px">
                <h1 >Wellcome To Website Company Profile Enjoy Corporation</h1>
                <p class="opacity-95">Ini Adalah Website Company dari perusahaan bidang Travel</p>
              </div>
            </div>
          </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/liburan2.webp') }}" class="d-block w-100" alt="Slide 2" style="object-fit: cover; height: 100vh;">
        <div class="container">
          <div class="carousel-caption">
            <h1>Ingin Melihat kumpulan Artikel?</h1>
            <p>Silahkan Kunjungi halaman Artikel Kami Sekarang!</p>
            <p>Dan Upload Pengalaman Liburan Sekarang juga!</p>
            <p><a class="btn btn-lg btn-primary" href="article">Browse Articles</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/img/lib3.jpg') }}" class="d-block w-100" alt="Slide 3" style="object-fit: cover; height: 100vh;">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Ingin Melihat Kumpulan Foto?</h1>
            <p>Silahkan Kunjungi halaman Galeri kami yang menyimpan banyak postingan!</p>
            <p>Dan Abadikan Momen liburanmu di halaman Galery kami!</p>
            <p><a class="btn btn-lg btn-primary" href="galery">Browse galleries</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container" style="background: rgb(238, 237, 237)">
    <div class="container marketing mb-5" data-aos="fade-up">
      <div class="row featurette mt-5">
        <h2 class="text-center"> <span class="text-body-secondary">Profile</span></h2>
        <hr class="featurette-divider">
        <div class="col-md-7 item-center m-auto p-5">
          <h2 class="featurette-heading fw-normal lh-1 text-center">Enjoy Corporation</h2>
          <p class="lead text-center">Lorem, hehehehe ipsum dolor sit amet consectetur adipisicing elit. Nam necessitatibus officia ratione hic totam neque assumenda ipsa inventore et ex, fuga ea at provident vero saepe iste error similique modi.</p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('assets/img/gedung.webp') }}" class="featurette-image img-fluid mx-auto rounded" width="350" height="350" alt="Your Image">
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="background: whitesmoke">
    <div class="row justify-content-center text-center" style="margin-bottom: 20px;" data-aos="fade-up">
      <h2 class="text-center text-body-secondary">About Us</h2>
      <h5 class="text-center text-body-secondary"> Ini adalah Para anggota dari perusahaan Enjoy Corp.</h5>
      <hr class="featurette-divider">
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-right">
        <img src="{{ asset('assets/img/founder.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">Raysa</h2>
        <p class="">Sang Pendiri dan Pemilik</p>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-right">
        <img src="{{ asset('assets/img/co.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">HeaL</h2>
        <p class="">Wakil dari Pemilik</p>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-right">
        <img src="{{ asset('assets/img/bos.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">Agus</h2>
        <p class="">Direktur Software Engineering</p>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-left">
        <img src="{{ asset('assets/img/inves.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">Firdaus</h2>
        <p class="">Direktur Investasi</p>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-left">
        <img src="{{ asset('assets/img/g.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">Rahmat</h2>
        <p class="">Direktur Teknisi</p>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center" data-aos="fade-left">
        <img src="{{ asset('assets/img/k.jpg') }}" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
        <h2 class="fw-normal">Ikhsan</h2>
        <p class="">Direktur Pemasaran</p>
      </div>
    </div>
  </div>

  <div class="container mt-5" data-aos="fade-up">
    <h2 class="text-center"><span class="text-body-secondary">Contact Us</span></h2>
    <h5 class="text-center text-body-secondary"> Silahkan Kunjungi Kantor Kami atau Hubuungi Kami dibawah ini! </h5>
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4" data-aos="fade-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15855.546260872554!2d107.43593152286608!3d-6.536007336433438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690fadb5b55c97%3A0x28ba0d37ea02f0e2!2sFlamboyan%20Fotocopy!5e0!3m2!1sid!2sid!4v1727752847843!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-lg-6 col-md-12" data-aos="fade-left">
        <div class="form-group pb-3">
          <input type="text" class="form-control form-control-lg" placeholder="Nama">
        </div>
        <div class="form-group pb-3">
          <input type="email" class="form-control form-control-lg" placeholder="Email">
        </div>
        <div class="form-group pb-3">
          <input type="text" class="form-control form-control-lg" placeholder="No. Telepon">
        </div>
        <div class="form-group pb-3">
          <textarea class="form-control form-control-lg" rows="5" placeholder="Pesan Anda"></textarea>
        </div>
        <div class="d-flex align-items-center">
          <a href="" class="btn btn-primary me-3" type="submit">Kirim</a>
          <div>
            <a href="https://www.instagram.com" target="_blank" class="text-dark me-3"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://wa.me/1234567890" target="_blank" class="text-dark me-3"><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="https://www.tiktok.com" target="_blank" class="text-dark me-3"><i class="fab fa-tiktok fa-2x"></i></a>
            <a href="https://www.facebook.com" target="_blank" class="text-dark me-3"><i class="fab fa-facebook fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
