<?php
    require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Link Fontawesome -->
    <script
      src="https://kit.fontawesome.com/d31df9d8ac.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Modul Pelatihan Infinity Project</title>
  </head>
  <body>
    <!-- Header -->
    <section id="header" class="header d-flex align-items-center">
      <div class="container d-flex justify-content-center">
        <div class="heading">
          <h1>MODUL PELATIHAN INFINITY PROJECT PROPERTY</h1>
          <a href="#preview-content" class="btn btn-header">Get Started</a>
        </div>
      </div>
    </section>

    <hr class="line-page" />

    <!-- content -->
    <section id="preview-content">
      <div class="container">
        <div class="box-content text-center">
          <div class="title-materi">
            <h3>Akses Selamanya Materi Pelatihan Kami</h3>
          </div>
          <img
            class="image-preview"
            src="assets/img/image-preview.svg"
            alt=""
          />
        </div>
      </div>
    </section>

    <hr class="line-page" />

    <section id="materi-content">
      <div class="container">
        <div class="box-content">
          <div class="title-materi">
            <h3>Materi Yang Akan Anda Dapatkan</h3>
          </div>
          <div class="row text-center">
            <div class="col-lg-4 item-materi-content">
              <i class="fas fa-book-open icon-materi"></i>
              <h4 class="title-modul">Modul 1</h4>
              <a href="checkout.php?id_modul=MD1" class="btn btn-header">Beli Kelas</a>
            </div>
            <div class="col-lg-4 item-materi-content">
              <i class="fas fa-book-open icon-materi"></i>
              <h4 class="title-modul">Modul 2</h4>
              <a href="checkout.php?id_modul=MD2" class="btn btn-header">Beli Kelas</a>
            </div>
            <div class="col-lg-4 item-materi-content">
              <i class="fas fa-book-open icon-materi"></i>
              <h4 class="title-modul">Modul 3</h4>
              <a href="checkout.php?id_modul=MD2" class="btn btn-header">Beli Kelas</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr class="line-page" />

    <!-- Registrasi -->
    <section id="registrasi">
      <div class="container">
        <div class="box-content">
          <div class="title-registrasi text-center">
            <h1>REGISTRASI SEKARANG UNTUK AKSES VIDEO PELATIHAN KAMI</h1>
            <a href="registration.php" class="btn btn-header"
              >Registrasi</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <section id="footer">
      <div class="container text-center">
        <div class="footer-social-media">
          <a href="#">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-tiktok"></i>
          </a>
        </div>
        <div>
          <p>© Copyright 2022 Infinity Project Property. All Rights Reserved</p>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
