<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Monitoring Alat HT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Data Monitoring Alat HT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <br>
              <table class="table table-bordered table-striped datatab">
                <thead>
                  <tr align="center">
                    <th>NO.ID</th>
                    <th>NAMA ALAT HT</th>
                    <th>PEMEGANG</th>
                    <th>KONDISI</th>
                    <th>STATUS</th>
                    <th><a href="alat_ht_tambah.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span> Tambah</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_monitor_ht");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_alat_ht'] ?></td>
                    <td><?= $data['bidang'] ?></td>
                    <td><?= $data['c1'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td>
                      <a href="alat_ht_edit.php?id_alat_ht=<?php echo $data['id_alat_ht']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span> Edit</button></a>
                      <a href="alat_ht_hapus.php?id_alat_ht=<?php echo $data['id_alat_ht']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" ><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Hapus</button></a>
                    </td>
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