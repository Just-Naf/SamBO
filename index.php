<?php
     include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Document</title>

</head>
<body>
        <!----------------------------------------------------------------------------------------->
        <!--------------------------------------NAVBAR--------------------------------------------->
        <!----------------------------------------------------------------------------------------->

<nav class="navbar navbar-expand-lg px-3" style="background-color:#ffffff00;">
  <div class="container-fluid" style="margin: 0px 150px;">
  <a href="index.php">
    <img src="gb-1.png" width="75px" class="pt-3"/>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <div>
        <li><a style="position: absolute; top: 40px; left: 480px" class="btn" href="#visi">visi & misi</a></li>
        <li><a style="position: absolute; top: 40px; left: 620px" class="btn" href="#leaderboard">leaderboard</a></li>
        <li><a style="position: absolute; top: 40px; left: 780px" class="btn" href="#hotline">hotline</a></li>
        </div>
      </ul>
      <span class="navbar-text"><a href="./data-login/login.php" class="btn_login">
       LOGIN</a>
      </span>
    </div>
  </div>
</nav>
        <!------------------------------------------------------------------------------------------->
        <!------------------------------------TAMPL AWAL--------------------------------------------->
        <!------------------------------------------------------------------------------------------->

<div class="d-flex align-items-center justify-content-center flex-column "  style="height: 120vh; width: auto; font-size:x-large; background-image: url(bg.jpg); background-size:cover;
" >
    <h1 class="animate__animated animate__fadeInDown" style="font-family: 'Acme', sans-serif;">Selamat Datang Di Bank Sampah</h1>
    <p class="animate__animated animate__fadeInDown animate__slower" style="text-align:center; font-size: medium;">ini adalah website resmi dari BANK SAMPAH BANTUL Daerah Istimewa Yogyakarta (DIY).<br>Disini anda dapat menjual barang bekas anda yang sudah tidak terpakai</p>
   <div class="d-flex flex-row">
    <a href="data_harga.php" class="btn btn-primary me-2">Data Sampah</a>
    <a href="form_jual.php" class="btn btn-primary ">Jual Sampah</a></div>
    <center>
    <p class="fs-5" style="margin-top:150px; margin-bottom: 100px;">lihat data penjualan ada<br>   
    <span class="material-symbols-outlined">
    keyboard_double_arrow_down
    </span></p></center>
</div>

        <!-------------------------------------------------------------------------------------------->
        <!------------------------------------VISI & MISI--------------------------------------------->
        <!-------------------------------------------------------------------------------------------->


<div id="visi" class="parent" style="background-image: url(bg-visi.jpg); background-size: cover; box-shadow: inset 0px -100px 29px -55px rgba(0,0,0,0.1); height: 100vh;
">
<div class="div1">
  <div class="fadeup_gam dutaSam2"></div>
  <div class="fadeup_gam dutaSam"></div>
</div>
<div class="div2">
  <?php
              $query = "SELECT COUNT(users.username) AS total_users FROM users;";
    $sql=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
    while ($data = mysqli_fetch_array($sql)) {
  ?>
  <div class="nas row">
    <div class="col p-0">
  <p class="text-center m-0"><?=$data['total_users']?></p>
  <h5 class="text-center">User</h5>
  <?php
} $query = "SELECT SUM(setor.jumlah_sampah) AS juml_sampah, COUNT(id_setor) AS juml_transaksi FROM setor;";
$sql=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
while ($data = mysqli_fetch_array($sql)) {
?>
    </div>
    <div class="col p-0">
  <p class="text-center m-0"><?=$data['juml_sampah']?></p>
  <h5 class="text-center">Sampah Terjual</h5>

    </div>
    <div class="col p-0">
  <p class="text-center m-0"><?=$data['juml_transaksi']?></p>
  <h5 class="text-center">Total Transaksi</h5>
    </div>
  </div> 
    <?php
}?>
   
  <a href="maintenence.php"class="btn btn-success p-3 mt-3 px-4 rounded-pill">cari tau lebih lanjut</a>
</div>
<div class="div3">    
  <h1 class="fadeup" style="font-family: 'Acme', sans-serif;">Visi Kami Terciptanya Lingkungan Yang Lestari</h1>
  <p class="fadeup">Sistem Bank Sampah Digital mendorong partisipasi aktif untuk memilah dan menabung sampah dengan bertujuan untuk membuat masyarakat lebih berdaya, lingkungan lebih <br>lestari dan membangun budaya gotong royong antar masyarakat</p>
</div>
</div>
        <!--------------------------------------------------------------------------------------------->
        <!--------------------------------------LEDERBOARD--------------------------------------------->
        <!--------------------------------------------------------------------------------------------->

          <div id="leaderboard" class=" p-3" style="margin: 7em 8.4em 0;">
            <h1 style="text-align:center; margin:1em 0; font-family: 'Acme', sans-serif;">LEADERBOARD PENYELAMAT DUNIA</h1>
<table id="" class="table align-middle cell-border stripe hover">
          <thead>
            <tr>
              <th class="text-center">No.</th>
              <th class="text-center">Username</th>
              <th class="text-center">Jumlah Sampah</th>
            </tr>
            </thead>
          <tbody>
            <?php 
            $no=1;
            $total=0;
            $query = "SELECT users.username, 
                      SUM(setor.jumlah_sampah) AS juml_sampah
                      FROM setor
                      INNER JOIN users ON  setor.id_users=users.id_users
                      GROUP BY setor.id_users
                      ORDER BY juml_sampah DESC;";
            $sql=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
            while ($data = mysqli_fetch_array($sql)) 
            { ?>
            <tr>
              <td><?=$no++?>.</td>
              <td><?=$data['username']?></td>
              <td><?=$data['juml_sampah']?></td>
            </tr>
            <?php
            }
        ?>
            </tbody>
        </table>
        </div>

        <!----------------------------------------------------------------------------------------->
        <!--------------------------------------BERITA--------------------------------------------->
        <!----------------------------------------------------------------------------------------->

        <div class="main">

<h1 class="text-center font-weight-bold" style="font-family: 'Acme', sans-serif;">BERITA</h1>
<div class="co flex">

  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2" style="width:10px; background-color:aqua;">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2" style="width:10px; background-color:aqua;">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aspernatur ratione dignissimos vero,
        delectus<br> tenetur illum, quae voluptatem inventore,<br> deleniti natus quisquam sint beatae doloribus saepe.
        </p>
  </div>
  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aspernatur ratione dignissimos vero,
        delectus<br> tenetur illum, quae voluptatem inventore,<br> deleniti natus quisquam sint beatae doloribus saepe.
        </p>
  </div>
  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aspernatur ratione dignissimos vero,
        delectus<br> tenetur illum, quae voluptatem inventore,<br> deleniti natus quisquam sint beatae doloribus saepe.
        </p>
  </div>
  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing <br> elit. Aspernatur ratione dignissimos vero,
        delectus<br> tenetur illum, quae voluptatem inventore,<br> deleniti natus quisquam sint beatae doloribus saepe.
        </p>
  </div>
  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2">dsesddsfed</p>
  </div>
  <div class="item flex-item">
      <img src="https://akcdn.detik.net.id/community/media/visual/2023/07/20/potret-ngeri-longsor-di-kolombia-yang-tewaskan-belasan-orang-4_169.jpeg?w=700&q=90" class="gamber"/>
      <h4 class="m-2">Potret Ngeri Longsor di Kolombia</h4>
      <p class="m-2">dsesddsfed</p>
  </div>

</div>
</div>
        <!----------------------------------------------------------------------------------------->
        <!--------------------------------------FOOTER--------------------------------------------->
        <!----------------------------------------------------------------------------------------->

        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>BANK SAMPAH </i>merupakan tempat dimana anda bisa menjual barang atau sampah dengan harga yang menguntungkan.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">Leaderboard</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">Berita</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Tentang Kami</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Jual sampah</a></li>
              <li><a href="http://scanfcode.com/category/android/">Daftar Harga Sampah</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by Bank sampah
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.4
  };

  // TEXT ANIMATION

  let fadeupCallback = (entries) => {
    entries.forEach((entry) => {
      let container = entry.target;
      container.classList.add("not-fading-up_gam");

      if (entry.isIntersecting) {
        container.classList.add("fading-up_gam");
        return;
      }

      if (entry.boundingClientRect.top > 0) {
        container.classList.remove("fading-up_gam");
      }
    });
  };
  let fadeupCallbac = (entries) => {
    entries.forEach((entry) => {
      let container = entry.target;
      container.classList.add("not-fading-up");

      if (entry.isIntersecting) {
        container.classList.add("fading-up");
        return;
      }

      if (entry.boundingClientRect.top > 0) {
        container.classList.remove("fading-up");
      }
    });
  };

  let fadeupObserver = new IntersectionObserver(fadeupCallback, options);

  document.querySelectorAll(".fadeup_gam").forEach((fadeup) => {
    fadeupObserver.observe(fadeup);
  });
  document.querySelectorAll(".fadeup").forEach((fadeup) => {
    fadeupObserver.observe(fadeup);
  });
});
  </script>

</body>
</html>