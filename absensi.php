<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <title>Orasi Fisip Unpad</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"> <img src="img/Logo w text.svg" alt="logo" width="60" height="25" class="d-inline-block align-text-top" style="box-sizing: border-box" /> </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#informasi">Informasi</a>
            <a class="nav-link" href="panitia.html">Panitia Inti</a>
            <a class="nav-link" href="livestream.php">Livestream</a>
            <a class="nav-link" href="penugasan.php">Penugasan</a>
            <a class="nav-link" href="absensi.php">Absensi</a>
            <a class="nav-link" href="login.html">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container-fluid">
      <table class="table align-middle mt-4">
        <thead>
          <tr>
            <th scope="col">Hari ke-</th>
            <th scope="col">Hari, Tanggal</th>
            <th scope="col">Kehadiran</th>
            <th scope="col">Absen</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Senin, 12-07-2021</td>
            <td>Tidak Hadir</td>
            <td>
              <button type="button" class="btn btn-primary">Absen</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Senin, 12-07-2021</td>
            <td>Tidak Hadir</td>
            <td>
              <button type="button" class="btn" disabled>Absen</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Senin, 12-07-2021</td>
            <td>Tidak Hadir</td>
            <td>
              <button type="button" class="btn" disabled>Absen</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- footer -->
    <footer class="text-center">
      <div class="container d-flex flex-column justify-content-center" style="height: 100%">
        <h5>FOLLOW US</h5>
        <div class="icons mx-auto d-flex flex-inline justify-content-evenly">
          <a href="https://www.instagram.com/atma.asta" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/channel/UCAzW7UFyXe5EG_ehdQXt3fA" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://vt.tiktok.com/ZSJb6g35o/" target="_blank"><i class="fab fa-tiktok"></i></a>
        </div>
        <p class="mt-3">©2021. Fisip Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>