<?php
date_default_timezone_set("Asia/jakarta");
session_start();
if($_SESSION['login'] == ""){
  echo "<script>alert('Anda Harus Login Terlebih Dahulu');window.location='logintik.php'</script>";
}

include "../config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seksi TIK / Polres Minahasa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Polres Minahasa</span>
      </a>
    </div><!-- End Logo -->

 

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>DATA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse hide" data-bs-parent="#sidebar-nav">
          <li>
            <a href="data_kehadiran.php" class="active">
              <i class="bi bi-circle"></i><span>Kehadiran</span>
            </a>
          </li>
          <li>
            <a href="evaluasi_kinerja.php">
              <i class="bi bi-circle"></i><span>Evaluasi Kinerja</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link" href="pengambilan_keputusan.php">
          <i class="bi bi-menu-button-wide"></i>
          <span class="menu-title">PENGAMBILAN KEPUTUSAN</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hasil_keputusan.php">
          <i class="bi bi-menu-button-wide"></i>
          <span class="menu-title">HASIL KEPUTUSAN</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginwas.php">
          <i class="bi bi-folder-symlink"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->