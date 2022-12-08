<?php
    require 'koneksi.php';

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        $result = mysqli_query($conn, "SELECT * FROM tb_klien WHERE email = '$email'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashPassword = $row['password'];
            $order_id = $row['order_id'];
            if (password_verify($password, $hashPassword)) {
                // Jika login berhasil, user akan diarahkan ke halaman admin.
                header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
            } else {
                echo '<script language="javascript">
                        window.alert("LOGIN GAGAL! Silakan coba lagi");
                      </script>';
            }
        } else {
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
      }
     
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
    <section class="form-registration d-flex justify-content-center align-items-center">
      <div class="container box-registration">
          <div class="title-materi">
            <h3>DAFTAR SEKARANG</h3>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-form">
                <form class="row g-3" action="" method="POST">
                  <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" />
                  </div>
                  <div class="col-md-12">
                    <label for="inputPassword4" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      name="password"
                      class="form-control"
                      id="inputPassword4"
                    />
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-header">Login</button>
                  </div>
                </form>
              </div>
            </div>
            <div
              class="col-lg-6 d-flex justify-content-center align-content-center"
            >
              <img class="form-image" src="assets/img/image-form.svg" alt="" />
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
