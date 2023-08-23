<?php
    include "koneksi.php";

    session_start();
    $id_users = $_SESSION['id_users'];
    $username = $_SESSION['username'];


    $query = "SELECT * FROM sampah;";
    $sql = mysqli_query($koneksi, $query );
    $no = 0;
    //$sql2=mysqli_query($koneksi, $query2) or die (mysqli_error($koneksi));
    //$t = mysqli_fetch_array($sql);
    



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK SAMPAH</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
  </head>
  <body>



    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="" href="index.html">
            <img src="gb-1.png" alt="logo" class="mt-5" width="30%" height="30%" />   
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>


            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <?php
                echo "<span class='navbar-text'><b>". $_SESSION['username'] ."</b></span>";?></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a href="logout.php" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">


              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dasbor.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" href="saldo.php">
                <span class="menu-title">Saldo Anda</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dtsampah.php">
                <span class="menu-title">Data Sampah</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jual_sampah.php">
                <span class="menu-title">Jual Sampah</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row purchace-popup">
              <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">

                </div>
              </div>
            </div>     
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">

                      <!DOCTYPE html>

<?php
include 'koneksi.php';

$id_setor = '';
$id_users = '';
$username = '';
$nama_sampah = '';
$id_sampah = '';
$jumlah_sampah = '';
$harga_sampah = '';

if(isset($_GET['ubah'])){
$id_siswa = $_GET['ubah'];


$sql = mysqli_query($koneksi,"SELECT sampah.id_sampah, setor.id_sampah, users.id_users
FROM sampah
JOIN setor ON setor.id_setor = sampah.id_sampah
JOIN users ON users.id_users = sampah.id_sampah
;");

$result = mysqli_fetch_assoc($sql);

$id_setor = $result['id'];
$id_users = $result['nik'];
$username = $result['username'];
$nama_sampah = $result['nama_sampah'];
$id_sampah = $result['no'];
$jumlah_sampah = $result['jumlah_sampah'];
$harga_sampah = $result['harga'];

    //var_dump($result);

    //die();
    
  }
?>


      <div class="container-fluid mt-4">
        <form method="POST" action="" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $id_setor; ?>" name="id_setor">
        <div class="mb-3 row">
              <label for="id_users" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input required type="text" name="id_users" class="form-control" id="id_users" placeholder="123132" value="<?php echo $id_users; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="username" class="col-sm-2 col-form-label">username</label>
              <div class="col-sm-10">
                <select required id="username" name="username" class="form-select">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM users WHERE id_users='$_SESSION[id_users]'") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_users]> $data[username] </option>";
                }
                ?>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="id_sampah" class="col-sm-2 col-form-label">Sampah</label>
              <div class="col-sm-10">
                <select required id="id_sampah" name="id_sampah" class="form-select">
                <option>---</option>
                <?php
                include "koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM sampah") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                    echo "<option value=$data[id_sampah]> $data[nama_sampah] </option>";
                }
                ?>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jumlah_sampah" class="col-sm-2 col-form-label">jumlah</label>
              <div class="col-sm-10">
                <input required type="text" name="jumlah_sampah" class="form-control" id="jumlah_sampah" placeholder="99" value="<?php echo $jumlah_sampah; ?>">
              </div>
            </div>
            <div class="mb-3 row mt-4">
              <div class="col">
              <?php
              if(isset($_GET['ubah'])){
              ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan
                </button>
                <?php
              } else {
              ?>
                  <button type="submit" name="proses" value="simpan" class="btn btn-success">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>Jual
                </button>
              <?php
              } 
              ?>
              <a href="index.php" type="button" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i> Batal
              </a>
              </div>     
              </div>
          </form>
        </div>

<?php

if(isset($_POST['proses'])){

    mysqli_query($koneksi,"INSERT INTO setor SET
    id_users = '$_POST[id_users]',
    id_sampah = '$_POST[id_sampah]',
    jumlah_sampah = '$_POST[jumlah_sampah]'") or die(mysqli_error($koneksi));
    
    echo "<script>alert('Data telah tersimpan')</script>";
}
 
?>

                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script>
    var ctx = document.getElementById('grafik').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: [<?php echo $nama_sm; ?>],
            datasets: [{
                label:'Data Sampah',
                backgroundColor: ['rgba(225, 0, 0, 0.5)', 'rgb( 0, 0, 252, 0.5)','rgb(255, 105, 180, 0.5)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            },
            ]
        },
    })
    </script>
  </body>
</html>