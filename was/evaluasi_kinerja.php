<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Evaluasi Kinerja Pada Setiap Bidang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="was.php">Home</a></li>
          <li class="breadcrumb-item active">Evaluasi Kinerja Pada Setiap Bidang</li>
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
                    <th>No</th>
                    <th>Nama Bidang</th>
                    <th>Evaluasi Kinerja</th>
                    <th>Keterangan</th>
                    <th><a href="evaluasi_tambah.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span> Tambah</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_pengawasan");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_bidang'] ?></td>
                    <td><?= $data['evaluasi_kinerja'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                      <a href="evaluasi_edit.php?id_pengawasan=<?php echo $data['id_pengawasan']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span> Edit</button></a>
                      <a href="evaluasi_hapus.php?id_pengawasan=<?php echo $data['id_pengawasan']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" ><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Hapus</button></a>
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