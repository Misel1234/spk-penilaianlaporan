<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Keputusan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Hasil Keputusan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <br>
              <a href="cetak.php" target="_blank()"><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Cetak</button></a>
              <hr>
              <br>
              <table width="100%">
                <tr>
                  <td><img src="../logo.png" width="150px"></td>
                  <td align="center">
                    <h4>KEPOLISIAN NEGARA REPUBLIK INDONESIA</h4>
                    <h4>DAERAH SULAWESI UTARA</h4>
                    <h4>KABUPATEN MINAHASA</h4>
                  </td>
                  <td><img src="../space.png" width="150px"></td>
                </tr>
              </table>
              <hr>
              <center><h4>SEKSI PROFESI DAN PENGAMANAN</h4></center>
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
                  include 'src/proses_kehadiran.php';

                  $query = mysqli_query($koneksi, "SELECT * FROM data_kehadiran WHERE seksi = 'Seksi Propam'");
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

              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <br>
              <center><h4>Hasil Kehilangan Dan Kerusakan Aset/Peralatan</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Bidang</th>
                    <th>Jumlah Barang</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th>Hasil SPK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  //JUMLAH DATA TRAINING/DATASET
                  $query4 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM data_training_propam WHERE laporan = 'Kehilangan'");
                  $jumlah = mysqli_fetch_array($query4);

                  //MENGHITUNG JUMLAH DATA TIDAK BAIK, KURANG BAIK DAN BAIK
                  $T       = mysqli_query($koneksi, "SELECT count(*) AS perbaikan FROM data_training_propam WHERE keterangan = 'Perbaikan'");
                  $hasilT  = mysqli_fetch_array($T);
                  $nilaiT  = $hasilT['perbaikan'] / $jumlah['jumlah'];

                  $B       = mysqli_query($koneksi, "SELECT count(*) AS tidak_ada FROM data_training_propam WHERE keterangan = 'Tidak Ada'");
                  $hasilB  = mysqli_fetch_array($B);
                  $nilaiB  = $hasilB['tidak_ada'] / $jumlah['jumlah'];

                  $B1      = mysqli_query($koneksi, "SELECT count(*) AS tidak FROM data_training_propam WHERE keterangan = 'Tidak Perbaikan'");
                  $hasilB1 = mysqli_fetch_array($B1);
                  $nilaiB1 = $hasilB1['tidak'] / $jumlah['jumlah'];

                  $query = mysqli_query($koneksi, "SELECT * FROM data_propam_kehilangan");
                  while($data1 = mysqli_fetch_array($query)){

                    $c1a   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1a FROM data_training_propam WHERE c1 = '$data1[kondisi]' AND keterangan = 'Perbaikan'");
                    $h_c1a = mysqli_fetch_array($c1a);

                    $c1b   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1b FROM data_training_propam WHERE c1 = '$data1[kondisi]' AND keterangan = 'Tidak Ada'");
                    $h_c1b = mysqli_fetch_array($c1b);

                    $c1b1   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1b1 FROM data_training_propam WHERE c1 = '$data1[kondisi]' AND keterangan = 'Tidak Perbaikan'");
                    $h_c1b1 = mysqli_fetch_array($c1b1);

                    $hasil_tidak = $h_c1a['c1a'] / $hasilT['perbaikan'] * $nilaiT;
                    $hasil_baik  = $h_c1b['c1b'] / $hasilB['tidak_ada'] * $nilaiB;
                    $hasil_baik1 = $h_c1b1['c1b1'] / $hasilB1['tidak'] * $nilaiB1;

                    if($hasil_tidak > $hasil_baik AND $hasil_tidak > $hasil_baik1){
                      $keterangan = "Perbaikan";
                    }elseif($hasil_baik > $hasil_tidak AND $hasil_baik > $hasil_baik1){
                      $keterangan = "Tidak Ada";
                    }else{
                      $keterangan = "Tidak Perbaikan";
                    }
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data1['nama_barang'] ?></td>
                    <td><?= $data1['bidang'] ?></td>
                    <td><?= $data1['jumlah_barang'] ?></td>
                    <td><?= $data1['kondisi'] ?></td>
                    <td><?= $data1['keterangan'] ?></td>
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

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <br>
              <center><h4>Hasil Laporan Kecelakaan</h4></center>
              <table class="table table-bordered table-striped datatab2">
                <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nama Anggta</th>
                    <th>Lokasi</th>
                    <th>Penyelidikan</th>
                    <th>Keterangan</th>
                    <th>Hasil SPK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  //JUMLAH DATA TRAINING/DATASET
                  $query4 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM data_training_propam WHERE laporan = 'Kecelakaan'");
                  $jumlah = mysqli_fetch_array($query4);

                  //MENGHITUNG JUMLAH DATA TIDAK BAIK, KURANG BAIK DAN BAIK
                  $T       = mysqli_query($koneksi, "SELECT count(*) AS perbaikan FROM data_training_propam WHERE keterangan = 'Tidak Terlaksana'");
                  $hasilT  = mysqli_fetch_array($T);
                  $nilaiT  = $hasilT['perbaikan'] / $jumlah['jumlah'];

                  $B       = mysqli_query($koneksi, "SELECT count(*) AS tidak_ada FROM data_training_propam WHERE keterangan = 'Terlaksana'");
                  $hasilB  = mysqli_fetch_array($B);
                  $nilaiB  = $hasilB['tidak_ada'] / $jumlah['jumlah'];

                  $query = mysqli_query($koneksi, "SELECT * FROM data_propam_kecelakaan");
                  while($data1 = mysqli_fetch_array($query)){

                    $c1a   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1a FROM data_training_propam WHERE c1 = '$data1[penyelidikan]' AND keterangan = 'Tidak Terlaksana'");
                    $h_c1a = mysqli_fetch_array($c1a);

                    $c1b   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1b FROM data_training_propam WHERE c1 = '$data1[penyelidikan]' AND keterangan = 'Terlaksana'");
                    $h_c1b = mysqli_fetch_array($c1b);


                    $hasil_tidak = $h_c1a['c1a'] / $hasilT['perbaikan'] * $nilaiT;
                    $hasil_baik  = $h_c1b['c1b'] / $hasilB['tidak_ada'] * $nilaiB;

                    if($hasil_tidak > $hasil_baik){
                      $keterangan = "Tidak Terlaksana";
                    }elseif($hasil_baik > $hasil_tidak){
                      $keterangan = "Terlaksana";
                    }
                    
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data1['nama_anggota'] ?></td>
                    <td><?= $data1['lokasi'] ?></td>
                    <td><?= $data1['penyelidikan'] ?></td>
                    <td><?= $data1['keterangan'] ?></td>
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