<?php
session_start();
require 'functions.php';

//cek session
if(!isset($_SESSION["login_peserta"])) {
  echo "<script>
    window.onload = function() {
    hideNav();}
  </script>";
}else{
  echo "<script>
    window.onload = function() {
    showNav();}
  </script>";
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"> <img src="img/Logo w text.svg" alt="logo" width="auto" height="40" class="d-inline-block align-text-top" style="box-sizing: border-box" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="#gallery">Gallery</a>
            <a class="nav-link" href="#informasi">Informasi</a>
            <a class="nav-link" href="panitia.html">Panitia Inti</a>
            <a class="nav-link" href="livestream.html">Livestream</a>
            <a class="nav-link nav-hidden" href="penugasan.html">Penugasan</a>
            <a class="nav-link nav-hidden" href="absensi.html">Absensi</a>
            <a class="nav-link" href="login.html">Login</a>
            <a class="nav-link nav-hidden" href="logout.php">Logout</a> 
            <!-- <button onclick="hideNav()">hide</button>          -->
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/marc-olivier-paquin-2_RQhbu0ZDQ-unsplash.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/pien-muller-Fh-Q-xfdh_o-unsplash.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- akhir slider -->

    <!-- about us -->
    <div class="index-container container-fluid text-center p-4">
      <img class="img-fluid my-2" src="img/Logo.svg" alt="logo" />
      <div class="row mx-2">
        <div class="col">
          <h2>ORASI 2021</h2>
        </div>
      </div>
      <div class="row mx-2">
        <div class="col">
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur ipsam harum consequuntur optio sint. Eaque amet odio qui obcaecati ex expedita! Vitae iusto minus natus amet at? Itaque cumque reprehenderit ipsum voluptates
            voluptatem ratione officiis est odio eius omnis excepturi totam libero hic eos atque, delectus modi minus corrupti. Dicta nihil suscipit sit magnam porro veritatis cupiditate pariatur, eos tenetur cum facere, at eius aut. Illo
            minus cumque harum iusto.
          </p>
        </div>
      </div>

      <!-- akhir about us -->

      <!-- Gallery -->
      <section id="gallery" class="container-fluid text-center bg-transparent p-5" style="background-color: lightgrey">
        <h2>CHECK THIS OUT</h2>
        <div class="row justify-content-center pt-3 g-4">
          <div class="col-sm-6 col col-md-4 card-1">
            <div class="card card-gallery">
              <img src="img/YoutubeThumbnailSize-1-1280x720.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card card-gallery">
              <img src="img/YoutubeThumbnailSize-1-1280x720.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="card card-3 card-gallery">
              <img src="img/YoutubeThumbnailSize-1-1280x720.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Watch on Youtube</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- akhir gallery -->
    <img class="poro img-fluid" src="img/bluerabbit.svg" alt="" />
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
        <p class="mt-3">©2021. Fisip Unpad. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- akhir footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
