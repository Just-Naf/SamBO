<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_sampah']) ){
    header('Location: data_harga.php');
}

//ambil id dari query string
$id_sampah = $_GET['id_sampah'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM sampah WHERE id_sampah=$id_sampah";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulir Edit</title>
</head>

<body>
    <center class="mt-5">
        <h1>Halaman Edit</h1>
</center>



  <form method="POST" action="proses_edit.php">
		<table class=" container  d-flex justify-content-center align-items-center w-50 h-auto p-5 rounded-3">
        <input type="hidden" name="id_sampah" value="<?php echo $data['id_sampah'] ?>" />

			<tr class="mb-3">			
				<td class="form-label fw-semibold fs-5" for="nama_sampah">Nama Sampah</td>
				<td><input type="text" name="nama_sampah" class="form-control ms-4" value="<?php echo $data['nama_sampah'] ?>"></td>
			</tr>
			<tr class="mb-3">
				<td for="harga_sampah" class="form-label fw-semibold fs-5">Harga</td>
				<td><input type="number" name="harga_sampah" class="form-control ms-4" value="<?php echo $data['harga_sampah'] ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan" name="simpan" class="btn btn-primary mt-3 mr-5">
                <a href="data_harga.php" class="btn btn-danger mt-3">Batal</a></td>
			</tr>		

		</table>
	</form>
</div>

    </body>
</html>