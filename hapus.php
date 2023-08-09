<?php

include("koneksi.php");

if( isset($_GET['id_sampah']) ){

    // ambil id dari query string
    $id_sampah = $_GET['id_sampah'];

    // buat query hapus
    $sql = "DELETE FROM sampah WHERE id_sampah=$id_sampah";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data_harga.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>