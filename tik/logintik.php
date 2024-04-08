<?php
  if(isset($_POST['login'])){
    session_start();
    include '../config/connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi,"SELECT * FROM data_admin WHERE username = '$username' AND password = '$password' AND level = 'Seksi TIK'");
    $cek   = mysqli_num_rows($login);

    if($cek > 0){
      $data = mysqli_fetch_assoc($login);
      $_SESSION['login']   = "Login";
      $_SESSION['id']      = $data['id_admin'];
      $_SESSION['nama']    = $data['nama_admin'];
      echo "<script>alert('Login Berhasil! Selamat Datang');window.location='tik.php'</script>";

    }else{
        echo "<script>alert('Login Gagal!Username dan Password Tidak Ditemukan');window.location='logintik.php'</script>";
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Seksi TIK</title>
    <link rel="stylesheet" href="../assets/css/stile.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="POST">
                <h1>Login</h1>
                <hr>
                <p>SEKSI TIK</p>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Username">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
                <p>
                    
                </p>
            </form>
        </div>
        <div class="right">
            <img src="../assets/img/clients/kasi-tik.jpeg"  alt="">
        </div>
    </div>
</body>

</html>