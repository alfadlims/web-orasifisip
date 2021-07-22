<?php 

session_start();
require 'functions.php';

//cek cookie
if(isset($_COOKIE["username"]) && isset($_COOKIE["key"])){
  $username = $_COOKIE["username"];
  $key = $_COOKIE["key"];

  //ambil username dari database
  $result = mysqli_query($conn, "SELECT username_peserta FROM peserta WHERE username_peserta = '$username'");
  $database = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if($key === hash('sha256', $database['username_peserta'])){
    $_SESSION["login_peserta"] = true;
  }
}

//cek session
if(isset($_SESSION["login_peserta"])){
  header("Location: absensi.php");
  exit;
} 

if(isset($_POST["login_peserta"])){
  
  $username_peserta = $_POST["username_peserta"];
  $password_peserta = $_POST["password_peserta"];
  
  $result = mysqli_query($conn, "SELECT * FROM peserta WHERE username_peserta = '$username_peserta'");
  $result2 = mysqli_query($conn, "SELECT * FROM peserta WHERE password_peserta = '$password_peserta'");

  //cek username
  if(mysqli_num_rows($result) === 1 && mysqli_num_rows($result2) === 1){
    //cek password
    $database = mysqli_fetch_assoc($result);
    setcookie('username', $database['username_peserta'], time()+ (60 * 60 * 24 * 30));
    //if(password_verify($password_peserta, $database["password_peserta"])){
      
      //set session
      $_SESSION["login_peserta"] = true;

      //cek tetap masuk
      if(isset($_POST["keep_login"])){
        //buat cookie
        setcookie('username', $database['username_peserta'], time()+300);
        setcookie('key', hash('sha256', $database['username_peserta']), time()+300);
      }

      header("Location: absensi.php");
      exit;
    //}
  }
  
  $error = true;
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
            <a class="nav-link" href="livestream.html">Livestream</a>
            <a class="nav-link" href="penugasan.html">Penugasan</a>
            <a class="nav-link" href="absensi.html">Absensi</a>
            <a class="nav-link" href="login.html">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- login container -->
    <form action="" method="post">
      <div class="sign-bg">
        <div class="container">
          <!-- apabila error -->
          <?php if(isset($error)) : ?>
            <p class="text-center" style="color:red; font-style: italic;">username / password salah</p>
          <?php endif; ?>  
          <!-- akhir apabila error -->
          <div class="row d-flex align-items-center justify-content-center pt-5 mx-2 g-3">
            <div class="sign-form align-self-center col-md-8 col-lg-6 mb-4 p-5">
              <h2 class="text-center">LOG IN</h2>
              <label for="usernameInput" class="form-label mt-3 mb-1">Username</label>
              <input type="text" class="form-control" id="usernameInput" placeholder="Masukkan Usename" name="username_peserta" value="<?php if(isset($_POST["login_peserta"])){ echo $_POST['username_peserta']; }?>" required/>
              <label for="passwordInput" class="form-label mt-2 mb-1">Password</label>
              <input type="password" class="form-control" id="passwordInput" placeholder="Masukkan Password" name="password_peserta" value="<?php if(isset($_POST["login_peserta"])){ echo $_POST['password_peserta']; }?>" required/>
              <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="keep_login"/>
                <label class="form-check-label" for="defaultCheck1"> Ingat Saya </label>
              </div>
              <div class="sign-button text-center">
                <button href="#" class="btn btn-primary mt-4" type="submit" name="login_peserta" style="width: 50%">LOG IN</button>
                <p class="mt-2 align-self-center">Belum registrasi? <a href="registrasi.php">Registrasi Di Sini</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- akhir login container -->

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