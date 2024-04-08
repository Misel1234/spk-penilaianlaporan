<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Rekomendasi / Kriteria</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Rekomendasi / Kriteria</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <hr>
              <center><h4>Data Rekomendasi Kehadiran</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                <tr align="center">
                    <th>NO</th>
                    <th>JUMLAH KEHADIRAN</th>
                    <th>KATEGORI</th>
                    </tr>
                </thead>
              
              <tr align="center">
                <td>1</td>
                <td>20-26</td>
                <td>Baik</td>
              </tr>
              <tr align="center">
                <td>2</td>
                <td>14-19</td>
                <td>Kurang Baik</td>
              </tr>
              <tr align="center">
                <td>3</td>
                <td>1-13</td>
                <td>Tidak Baik</td>
              </tr>
            </table>

            <hr>
              <center><h4>Data Rekomendasi Monitoring Alat HT</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                <tr align="center">
                    <th>NO</th>
                    <th>KONDISI</th>
                    <th>STATUS</th>
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tr align="center">
                <td>1</td>
                <td>Rusak Ringan</td>
                <td>Diterima dan Diperbaiki</td>
                <td>Aktif</td>
              </tr>
              <tr align="center">
                <td>2</td>
                <td>Rusak Berat</td>
                <td>Diterima dan Dikembalikan</td>
                <td>Tidak Aktif</td>
              </tr>
              <tr align="center">
                <td>3</td>
                <td>Baik</td>
                <td>Diterima dan Disimpan</td>
                <td>Aktif</td>
              </tr>
            </table>

            <hr>
              <center><h4>Data Rekomendasi Monitoring Vicon</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                <tr align="center">
                    <th>NO</th>
                    <th>KONDISI</th>
                    <th>STATUS</th>
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tr align="center">
                <td>1</td>
                <td>Berjalan</td>
                <td>Baik</td>
                <td>Terlaksana</td>
              </tr>
              <tr align="center">
                <td>2</td>
                <td>Tidak Berjalan</td>
                <td>Terkendala</td>
                <td>Tidak Terlaksana</td>
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

 <?php include 'src/footer.php'; ?>