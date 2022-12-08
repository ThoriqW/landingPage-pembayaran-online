<?php
    require 'koneksi.php';

  // query mendapatkan nama paket
  $queryPaket = mysqli_query($conn, "SELECT * FROM tb_modul");
  $resultPaket = array(); 
  while ($data = mysqli_fetch_array($queryPaket)) {
    $resultPaket[] = $data; //result dijadikan array 
  }

  $hidemydiv = "email-warning";

  if(isset($_POST['submit'])){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nomor = $_POST["nomor-hp"];
    $alamat = $_POST["alamat"];
    $namaPaket = $_POST["paket"];
    $order_id = rand();
    $status_transaksi = 1;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if(empty($namaPaket)){
      echo "You did not fill out the required fields.";
    }else {
      // echo $namaPaket;
      // Query cek email yang sudah ada.
      $query = "SELECT * FROM tb_klien WHERE email='".$email."'";
      $cekEmail = mysqli_num_rows(mysqli_query($conn, $query));
  
      // Query mengambil id modul
      $resultHargaPaket = mysqli_query($conn, "SELECT * FROM tb_modul WHERE nama_modul = '$namaPaket'");
      $data = mysqli_fetch_array($resultHargaPaket);
      $id_modul = $data['id_modul'];
  
      if($cekEmail > 0){
  
          $hidemydiv = "email-show";
  
      } else {
  
          // Menambahkan data klien yang baru
  
          $sql = "INSERT INTO tb_klien (id, nama, nomor, alamat, order_id, id_modul, status_transaksi, email, password)
                  VALUES ('', '$nama', '$nomor', '$alamat', '$order_id', '$id_modul', '$status_transaksi', '$email', '$hashed_password')";    
  
          if(mysqli_query($conn, $sql)){
              header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
          } else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
      }
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
              <div class="alert alert-danger <?php echo $hidemydiv ?>">
                Email Sudah digunakan, Silahkan <a href="login.php" class="alert-link">Login</a>.
              </div>
                <form class="row g-3" action="" method="post">
                  <div class="col-md-12">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" />
                  </div>
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
                  <div class="col-md-12">
                    <label for="inputNumberHP" class="form-label"
                      >Nomor HP</label
                    >
                    <input
                      type="nomor-hp"
                      name="nomor-hp"
                      class="form-control"
                      id="inputNumberHP"
                    />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAddress" />
                  </div>
                  <div class="col-12">
                    <label for="pilihPaket" class="form-label"
                      >Pilih Paket</label
                    >
                    <select class="form-select" aria-label="Default select example" id="pilihPaket" name="paket" required>
                        <option disabled selected value>-- Pilih Paket --</option>
                        <?php foreach ($resultPaket as $paket): ?>
                        <option>
                          <?php echo $paket['nama_modul']?>
                        </option>
                          <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-header">Daftar</button>
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
