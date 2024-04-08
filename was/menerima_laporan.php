<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Menerima Laporan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Menerima Laporan</li>
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
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_kehadiran WHERE seksi = 'Seksi TIK'");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['hadir'] ?></td>
                    <td><?= $data['tidak_hadir'] ?></td>
                    <td><?= $data['izin'] ?></td>
                    <td><?= $data['sakit'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              

              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

 <?php include 'src/footer.php'; ?>