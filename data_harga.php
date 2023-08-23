<?php
     include "koneksi.php";

     $query = "SELECT * FROM sampah;";
     $sql = mysqli_query($koneksi, $query );
     $no = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg px-3" style="background-color:#ffffff00;">
  <div class="container-fluid" style="margin: 0px 150px;">
  <a href="index.php">
    <img src="logo.png" width="80px"/>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <span class="navbar-text"><a href="login.php" class="btn_login">
       LOGIN</a>
      </span>
  </div>
</nav>

<div class="container">
  <center class="mt-4 fs-semibold"><h2>DATA SAMPAH</h2></center>
    <table border="1" class="table align-middle mt-5">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>harga</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM sampah";
        $query = mysqli_query($koneksi, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";
            

            echo "<td>". ++$no."</td>";
            echo "<td>".$data['nama_sampah']."</td>";
            echo "<td>".$data['harga_sampah']."</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
        <a href="login.php" class="btn btn-primary ">Jual Barang</a>
        </div>
</body>
</html>