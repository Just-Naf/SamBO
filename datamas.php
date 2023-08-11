<?php
     include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="dt" class="table align-middle   cell-border stripe hover">
          <thead>
            <tr>
              <th><center>No.</center></th>
              <th>id</th>
              <th>Username</th>
              <th>Barang</th>
              <th>jumlah</th>
              <th>harga</th>
              <th>tanggal</th>
              <th>total</th>
            </tr>
            </thead>
          <tbody>
<?php 
            $no=1;
            $total=0;
            $query = "SELECT setor.*, users.username,users.id_users, sampah.nama_sampah, sampah.harga_sampah FROM setor 
                   INNER JOIN users ON  setor.id_users=users.id_users
                   INNER JOIN sampah ON setor.id_sampah=sampah.id_sampah;";
            $sql=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
            while ($data = mysqli_fetch_array($sql)) 
            {
                ?>
                <tr>
                <td><?=$no++?>.</td>
                <td><?=$data['id_users']?>.</td>
                <td><?=$data['username']?>.</td>
                <td><?=$data['nama_sampah']?>.</td>
                <td><?=$data['jumlah_sampah']?>.</td>
                <td>Rp.<?=$data['harga_sampah']?>.</td>
                <td><?=$data['Tanggal']?>.</td>
                <td>Rp.<?php echo number_format($total);?>.</td>
              </tr>
              <?php
             }
                ?>
            </tbody>
        </table>
</body>
</html>