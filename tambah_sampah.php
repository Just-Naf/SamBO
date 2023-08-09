<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>TAMBAH DATA</title>
</head>
<?php
include 'koneksi.php';

    $nama_sampah = '';
    $harga_sampah = '';


  if(isset($_GET['ubah'])){
    $id_sampah = $_GET['ubah'];

    $query = "SELECT * FROM sampah WHERE id_sampah = '$id_sampah';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama_sampah = $result['nama_sampah'];
    $harga_sampah = $result['harga_sampah'];


    //var_dump($result);

    //die();

  }
?>
<body>
  <center class="mt-5"><h1>Tambah Sampah</h1></center>
  <div >
  <form method="post" action="proses_sampah.php">
		<table class=" container  d-flex justify-content-center align-items-center w-50 h-auto p-5 rounded-3">
			<tr class="mb-3">			
				<td class="form-label fw-semibold fs-5">Nama Sampah</td>
				<td><input type="text" name="nama_sampah" class="form-control ms-4"></td>
			</tr>
			<tr class="mb-3">
				<td class="form-label fw-semibold fs-5">Harga</td>
				<td><input type="number" name="harga_sampah" class="form-control ms-4"></td>
			</tr>
			<tr>
				<td><input type="submit" value="SIMPAN" class="btn btn-primary mt-3"></td>
			</tr>		
		</table>
	</form>
</div>
</body>
</html>