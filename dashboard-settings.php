<?php
session_start();
require 'functions.php';

wajib_login("login-catatan-hati.php"); 

$settings = query("SELECT * FROM settings");

if(isset($_POST["buka"])){
  //cek berhasil atau tidak
  if(ubah_setting("buka", $_POST) > 0){
    echo "<script>
            alert('Setting BERHASIL Dibuka!');
            document.location.href = 'dashboard-settings.php';
          </script>";
  }else{
    die;
    echo "<script>
            alert('Setting GAGAL Dibuka!');
            document.location.href = 'dashboard-settings.php';
          </script>";
  }
}

if(isset($_POST["tutup"])){
  //cek berhasil atau tidak
  if(ubah_setting("tutup", $_POST) > 0){
    echo "<script>
            alert('Setting BERHASIL Ditutup!');
            document.location.href = 'dashboard-settings.php';
          </script>";
  }else{
    echo "<script>
            alert('Setting GAGAL Ditutup!');
            document.location.href = 'dashboard-settings.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <?php style_orasi(); ?>

    <!-- icon -->
    <link rel="shortcut icon" href="img/logo-favicon-panitia.ico" />

    <!-- font -->
    <script src="https://kit.fontawesome.com/b249d00227.js" crossorigin="anonymous"></script>

    <title>Admin - Orasi Fisip Unpad</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="dashboard-penugasan.php">Penugasan</a>
            <a class="nav-link" href="dashboard-absensi.php">Absensi</a>
            <a class="nav-link" href="dashboard-settings.php">Settings</a>
            <a class="nav-link" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container-fluid d-flex align-items-center table-responsive bg-admin">
      <table class="table align-middle mt-4 mx-5 text-center">
        <thead>
          <tr>
            <th scope="col">Section</th>
            <th scope="col">Settings</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($settings as $setting): ?>
              <?php $id_setting = $setting["id_setting"]; ?> 
              <?php $nama_setting = $setting["nama_setting"]; ?>  
              <tr>
                <td><?= $setting["nama_setting"]; ?></td>
                <td>
                  <form action="" method="post">
                  <?php if($setting['status_setting'] != "buka") : ?>
                    <input type="hidden" name="id_setting" value="<?= $id_setting?>">
                    <button type="submit" class="btn btn-primary btn-1" name="buka" onclick="return confirm('Buka <?= $nama_setting?> ?')">Buka </button>
                  <?php else :?>
                    <input type="hidden" name="id_setting" value="<?= $id_setting?>">
                    <button type="submit" class="btn btn-danger btn-1" name="tutup" onclick="return confirm('Tutup <?= $nama_setting?> ?')">Tutup</button>
                  <?php endif;?>
                  </form>
                </td>
              </tr>
            <?php  endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- footer -->
    <footer class="text-center">
      <div class="container d-flex flex-column justify-content-center" style="height: 100%">
        <h5>FOLLOW US</h5>
        <div class="icons mx-auto d-flex flex-inline justify-content-evenly">
          <a href="https://www.instagram.com/orasifisipunpad/" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="https://www.youtube.com/channel/UCLWHFRaXNr6vfhH4Vcv1-Ag" target="_blank"><i class="fab fa-youtube"></i></a>
          <a
            href="https://www.tiktok.com/@orasifisipunpad?_d=secCgYIASAHKAESMgowtyQGGQP9yZ78h3F3eXTgfDe8sblt1Y03gtrbl%2B41vM6BOgkeHkgqz9OIC8iqxuv5GgA%3D&_r=1&language=en&sec_uid=MS4wLjABAAAAA_uGvM5g4f-SuuU2ofa1p1VZyXHruGof2UAU2ZUdLAZ-NDtw7HEoMMHZSF_lQGhN&sec_user_id=MS4wLjABAAAA5YClM9o1RGdfIMV15LwZOxpFdgC2kzo577i-fwu4iasuwPi-95WcGCs1-J6UY_I4&share_app_id=1180&share_author_id=6959479209220539394&share_link_id=5EEFDBAE-D1C0-4180-9E06-DBE87FE8B51B&source=h5_t&tt_from=copy&u_code=ddf6lg6jc9g08l&user_id=6851942628729570305&utm_campaign=client_share&utm_medium=ios&utm_source=copy"
            target="_blank"
            ><i class="fab fa-tiktok"></i
          ></a>
          <a href="https://open.spotify.com/user/yixdyb7cijndootfs7k72ncfm?si=ebaa1feb71fa4a7f&nd=1" target="_blank"><i class="fab fa-spotify"></i></a>
        </div>
        <p class="mt-3">©2021. Orasi FISIP Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->

    <script src="js/script.js"></script>
    <script>
      btntglabsen();
      navbarcollapse();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
