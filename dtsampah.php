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
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">INFO USER</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">SALDO</span>
                          <?php 
            include "koneksi.php";
            $no=1;
            $query2 = "SELECT users.id_users, users.username, setor.id_setor, 
            SUM(setor.jumlah_sampah)  AS jumlah_total_sam, 
            SUM(setor.jumlah_sampah * sampah.harga_sampah) AS tabungan
            FROM setor
            INNER JOIN users ON  setor.id_users=users.id_users
            INNER JOIN sampah ON setor.id_sampah=sampah.id_sampah
            WHERE setor.id_users='$_SESSION[id_users]' AND flag_tarik='0';";
            $sql2=mysqli_query($koneksi, $query2) or die (mysqli_error($koneksi));
            //$t = mysqli_fetch_array($sql);
            while ($data2 = mysqli_fetch_array($sql2))
            //var_dump($t['username']);
            //while ($data2 = mysqli_fetch_array($sql2)) 
            { //$total = $data['harga_sampah'] + $data['harga_total'];
             ?>

              <h4>Rp.<?=$data2['tabungan']?></h4>

            <?php

            }
        ?>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                        <i class="icon-credit-card"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">RIWAYAT SALDO</span>
                          <?php 
            include "koneksi.php";
            $query2 = "SELECT users.id_users, users.username, setor.id_setor, 
            SUM(setor.jumlah_sampah)  AS jumlah_total_sam, 
            SUM(setor.jumlah_sampah * sampah.harga_sampah) AS tabungan
            FROM setor
            INNER JOIN users ON  setor.id_users=users.id_users
            INNER JOIN sampah ON setor.id_sampah=sampah.id_sampah
            WHERE setor.id_users='$_SESSION[id_users]';";
            $sql2=mysqli_query($koneksi, $query2) or die (mysqli_error($koneksi));
            //$t = mysqli_fetch_array($sql);
            while ($data2 = mysqli_fetch_array($sql2))
            //var_dump($t['username']);
            //while ($data2 = mysqli_fetch_array($sql2)) 
            { //$total = $data['harga_sampah'] + $data['harga_total'];
             ?>

              <h4>Rp.<?=$data2['tabungan']?></h4>

            <?php

            }
        ?>                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">JUMLAH SAMPAH</span>
                          <h4>2650</h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-credit-card"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">RETURN</span>
                          <h4>25,542</h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>      
             <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Riwayat Penjualan</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                    </div>


                    <div class="table-responsive border rounded p-1">
                    <table border="1" class="table">
    <thead style="text-align: center;;">
        <tr>
            <th class="font-weight-bold">No</th>
            <th class="font-weight-bold">Nama</th>
            <th class="font-weight-bold">harga</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no=1;
        $sql = "SELECT * FROM sampah";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            

            echo "<td>". $no++."</td>";
            echo "<td>".$data['nama_sampah']."</td>";
            echo "<td>".$data['harga_sampah']."</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>


                    </div>
                    <div class="d-flex mt-4 flex-wrap">
                      <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                      <nav class="ml-auto">
                        <ul class="pagination separated pagination-info">
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">4</a></li>
                          <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                      </nav>
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