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
<?php 
            $no=1;
            $total=0;
            $query = "SELECT setor.*, users.username,users.id_users, sampah.nama_sampah, sampah.harga_sampah FROM setor 
                   INNER JOIN users ON  setor.id_users=users.id_users
                   INNER JOIN sampah ON setor.id_sampah=sampah.id_sampah;";
            $sql=mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
            while ($data = mysqli_fetch_array($sql)) 
            { }
                ?>
</body>
</html>