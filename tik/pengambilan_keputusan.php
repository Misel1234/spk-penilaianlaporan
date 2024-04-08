<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengambilan Keputusan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Pengambilan Keputusan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <br>
              <center><h4>Data Kehadiran</h4></center>
              <table class="table table-bordered table-striped datatab">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                    <th>Izin</th>
                    <th>Sakit</th>
                    <th>Hasil SPK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "src/proses_kehadiran.php";
                  $query = mysqli_query($koneksi, "SELECT * FROM data_kehadiran WHERE seksi = 'Seksi TIK'");
                  while($data1 = mysqli_fetch_array($query)){
                    $c1Tidak = (1 / (sqrt(2 * 3.14) * $devC1T)) * exp(-pow($data1['hadir'] - $MeanT['MeanHT'],2) / (2 * pow($devC1T,2)));
                    $c2Tidak = (1 / (sqrt(2 * 3.14) * $devC2T)) * exp(-pow($data1['tidak_hadir'] - $MeanT['MeanTT'],2) / (2 * pow($devC2T,2)));
                    $c3Tidak = (1 / (sqrt(2 * 3.14) * $devC3T)) * exp(-pow($data1['izin'] - $MeanT['MeanIT'],2) / (2 * pow($devC3T,2)));
                    $c4Tidak = (1 / (sqrt(2 * 3.14) * $devC4T)) * exp(-pow($data1['sakit'] - $MeanT['MeanST'],2) / (2 * pow($devC4T,2)));

                    $c1Kurang = (1 / (sqrt(2 * 3.14) * $devC1K)) * exp(-pow($data1['hadir'] - $MeanK['MeanHK'],2) / (2 * pow($devC1K,2)));
                    $c2Kurang = (1 / (sqrt(2 * 3.14) * $devC2K)) * exp(-pow($data1['tidak_hadir'] - $MeanK['MeanTK'],2) / (2 * pow($devC2K,2)));
                    $c3Kurang = (1 / (sqrt(2 * 3.14) * $devC3K)) * exp(-pow($data1['izin'] - $MeanK['MeanIK'],2) / (2 * pow($devC3K,2)));
                    $c4Kurang = (1 / (sqrt(2 * 3.14) * $devC4K)) * exp(-pow($data1['sakit'] - $MeanK['MeanSK'],2) / (2 * pow($devC4K,2)));

                    $c1Baik = (1 / (sqrt(2 * 3.14) * $devC1B)) * exp(-pow($data1['hadir'] - $MeanB['MeanHB'],2) / (2 * pow($devC1B,2)));
                    $c2Baik = (1 / (sqrt(2 * 3.14) * $devC2B)) * exp(-pow($data1['tidak_hadir'] - $MeanB['MeanTB'],2) / (2 * pow($devC2B,2)));
                    $c3Baik = (1 / (sqrt(2 * 3.14) * $devC3B)) * exp(-pow($data1['izin'] - $MeanB['MeanIB'],2) / (2 * pow($devC3B,2)));
                    $c4Baik = (1 / (sqrt(2 * 3.14) * $devC4B)) * exp(-pow($data1['sakit'] - $MeanB['MeanSB'],2) / (2 * pow($devC4B,2)));

                    $HasilTidak = $c1Tidak * $c2Tidak * $c3Tidak * $c4Tidak * $nilaiT;
                    $HasilKurang = $c1Kurang * $c2Kurang * $c3Kurang * $c4Kurang * $nilaiK;
                    $HasilBaik = $c1Baik * $c2Baik * $c3Baik * $c4Baik * $nilaiB;

                    if($HasilTidak > $HasilKurang AND $HasilTidak > $HasilBaik){
                      $keterangan = "Tidak Baik";
                    }elseif($HasilKurang > $HasilTidak AND $HasilKurang > $HasilBaik){
                      $keterangan = "Kurang Baik";
                    }elseif($HasilBaik > $HasilTidak AND $HasilBaik > $HasilKurang){
                      $keterangan = "Baik";
                    }
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data1['nama'] ?></td>
                    <td><?= $data1['hadir'] ?></td>
                    <td><?= $data1['tidak_hadir'] ?></td>
                    <td><?= $data1['izin'] ?></td>
                    <td><?= $data1['sakit'] ?></td>
                    <td><?= $keterangan ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              <hr>
              <center><h4>Monitoring Alat HT</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Bidang</th>
                    <th>Status</th>
                    <th>Kondisi</th>
                    <th>Hasil SPK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;

                  //JUMLAH DATA TRAINING/DATASET
                  $Query1 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM data_training WHERE monitoring = 'Alat HT'");
                  $jumlah = mysqli_fetch_array($Query1);

                  //MENGHITUNG JUMLAH DATA RENDAH, SEDANG DAN TINGGI
                  $R      = mysqli_query($koneksi, "SELECT count(*) AS tidak_aktif FROM data_training WHERE monitoring = 'Alat HT' AND keterangan = 'Tidak Aktif'");
                  $HasilR = mysqli_fetch_array($R);

                  $S      = mysqli_query($koneksi, "SELECT count(*) AS aktif FROM data_training WHERE monitoring = 'Alat HT' AND keterangan = 'Aktif'");
                  $HasilS = mysqli_fetch_array($S);

                  $query = mysqli_query($koneksi, "SELECT * FROM data_monitor_ht");
                  while($data = mysqli_fetch_array($query)){
                    $C1TidakAktif = mysqli_query($koneksi, "SELECT COUNT(*) AS C1TidakAktif FROM data_training WHERE c1 = '$data[c1]' AND monitoring = 'Alat HT' AND keterangan = 'Tidak Aktif'");
                    $DataC1Tidak  = mysqli_fetch_array($C1TidakAktif);

                    $C1Aktif = mysqli_query($koneksi, "SELECT COUNT(*) AS C1Aktif FROM data_training WHERE c1 = '$data[c1]' AND monitoring = 'Alat HT' AND keterangan = 'Aktif'");
                    $DataC1Aktif  = mysqli_fetch_array($C1Aktif);

                    $HasilTidakAktif = ($DataC1Tidak['C1TidakAktif'] / $HasilR['tidak_aktif']) * ($HasilR['tidak_aktif'] / $jumlah['jumlah']);
                    $HasilAktif      = ($DataC1Aktif['C1Aktif'] / $HasilS['aktif']) * ($HasilS['aktif'] / $jumlah['jumlah']);

                    if($HasilAktif > $HasilTidakAktif){
                      $keterangan = "Aktif";
                    }else{
                      $keterangan = "Tidak Aktif";
                    }
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_alat_ht'] ?></td>
                    <td><?= $data['bidang'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $data['c1'] ?></td>
                    <td><?= $keterangan ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              <hr>
              <center><h4>Monitoring Vicon</h4></center>
              <br>
              <table class="table table-bordered table-striped datatab2">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kondisi</th>
                    <th>Status</th>
                    <th>Hasil SPK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;

                  //JUMLAH DATA TRAINING/DATASET
                  $Query1 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM data_training WHERE monitoring = 'Vicon'");
                  $jumlah = mysqli_fetch_array($Query1);

                  //MENGHITUNG JUMLAH DATA RENDAH, SEDANG DAN TINGGI
                  $R      = mysqli_query($koneksi, "SELECT count(*) AS tidak_aktif FROM data_training WHERE monitoring = 'Vicon' AND keterangan = 'Tidak Terlaksana'");
                  $HasilR = mysqli_fetch_array($R);

                  $S      = mysqli_query($koneksi, "SELECT count(*) AS aktif FROM data_training WHERE monitoring = 'Vicon' AND keterangan = 'Terlaksana'");
                  $HasilS = mysqli_fetch_array($S);

                  $query = mysqli_query($koneksi, "SELECT * FROM data_monitoring WHERE monitoring = 'Vicon'");
                  while($data = mysqli_fetch_array($query)){
                    $C1TidakAktif = mysqli_query($koneksi, "SELECT COUNT(*) AS C1TidakAktif FROM data_training WHERE c1 = '$data[c1]' AND monitoring = 'Vicon' AND keterangan = 'Tidak Terlaksana'");
                    $DataC1Tidak  = mysqli_fetch_array($C1TidakAktif);

                    $C1Aktif = mysqli_query($koneksi, "SELECT COUNT(*) AS C1Aktif FROM data_training WHERE c1 = '$data[c1]' AND monitoring = 'Vicon' AND keterangan = 'Terlaksana'");
                    $DataC1Aktif  = mysqli_fetch_array($C1Aktif);

                    $HasilTidakAktif = ($DataC1Tidak['C1TidakAktif'] / $HasilR['tidak_aktif']) * ($HasilR['tidak_aktif'] / $jumlah['jumlah']);
                    $HasilAktif      = ($DataC1Aktif['C1Aktif'] / $HasilS['aktif']) * ($HasilS['aktif'] / $jumlah['jumlah']);

                    if($HasilAktif > $HasilTidakAktif){
                      $keterangan = "Terlaksana";
                    }else{
                      $keterangan = "Tidak Terlaksana";
                    }
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['c1'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td><?= $keterangan ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

 <?php include 'src/footer.php'; ?>