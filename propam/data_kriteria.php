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
              <center><h4>Data Rekomendasi Kehilangan & Kerusakan Aset/Peralatan</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                <tr align="center">
                    <th>NO</th>
                    <th>KONDISI</th>
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tr align="center">
                <td>1</td>
                <td>Rusak Ringan</td>
                <td>Perbaikan</td>
              </tr>
              <tr align="center">
                <td>2</td>
                <td>Rusak Berat</td>
                <td>Tidak Perbaikan</td>
              </tr>
              <tr align="center">
                <td>3</td>
                <td>Hilang</td>
                <td>Tidak Ada</td>
              </tr>
            </table>

            <hr>
              <center><h4>Data Rekomendasi Kecelakaan</h4></center>
              <table class="table table-bordered table-striped datatab1">
                <thead>
                <tr align="center">
                    <th>NO</th>
                    <th>PENYELIDIKAN</th>
                    <th>KETERANGAN</th>
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tr align="center">
                <td>1</td>
                <td>Berjalan Baik</td>
                <td>Kecelakaan Ringan</td>
                <td>Terlaksana</td>
              </tr>
              <tr align="center">
                <td>2</td>
                <td>Tidak Berjalan Baik</td>
                <td>Kecelakaan Berat</td>
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