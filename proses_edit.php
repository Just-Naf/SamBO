<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_sampah = $_POST['id_sampah'];
    $nama_sampah = $_POST['nama_sampah'];
    $harga_sampah = $_POST['harga_sampah'];

    // buat query update
    $sql = "UPDATE sampah SET nama_sampah='$nama_sampah', harga_sampah='$harga_sampah' WHERE id_sampah=$id_sampah";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_harga.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>