<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];
if($op=="in"){
    $sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['level'] = $qry['level'];
        if($qry['level']=="admin"){
            header("location:ad.php");
        }
        else if($qry['level']=="tamu"){
            header("location:us.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='cobalogin.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:cobalogin.php");
}
?>