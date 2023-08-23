<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Document</title>
</head>
<body>
    

<?php
session_start();
  include "../koneksi.php";
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $op = $_GET['op'];
  if($op=="in"){
      $sql = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
      if(mysqli_num_rows($sql)==1){//jika berhasil akan bernilai 1
          $qry = mysqli_fetch_array($sql);
          $_SESSION['username'] = $qry['username'];
          $_SESSION['id_users'] = $qry['id_users'];
          $_SESSION['level'] = $qry['level'];
          if($qry['level']=="admin"){
            ?>
            <script language="JavaScript">
                  setTimeout(function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'SELAMAT',
                        timerProgressBar: true,
                        text: 'Anda berhasil login'
    });
                  } ,1);
                  window.setTimeout(function(){
                    window.location.replace('../dasbor_admin.php');
                  } ,3000);
              </script> 
              <?php
          }
          else if($qry['level']=="tamu"){
              header("location:../dasbor_us.php");
          }
      }else{
          ?>
        <script language="JavaScript">
              setTimeout(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Username atau password salah!'
});
              },10);
              window.setTimeout(function(){
                window.location.replace('login.php');
              } ,3000);
          </script> 
          <?php
      }
  }else if($op=="out"){
      unset($_SESSION['username']);
      unset($_SESSION['level']);
      header("location:login.php");
  }
  ?>
  </body>
</html>