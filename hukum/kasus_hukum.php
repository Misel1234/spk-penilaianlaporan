<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Kasus Hukum</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Laporan Kasus Hukum</li>
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
                    <th>Kasus</th>
                    <th>Alamat</th>
                    <th>Penyelidikan</th>
                    <th>Status</th>
                    <th><a href="kasus_hukum_aksi.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span> Tambah</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_kasus_hukum");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['kasus'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['penyelidikan'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td>
                      <a href="kasus_hukum_aksi.php?id_kasus_hukum=<?php echo $data['id_kasus_hukum']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span> Edit</button></a>
                      <a href="kasus_hukum_hapus.php?id_kasus_hukum=<?php echo $data['id_kasus_hukum']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" ><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Hapus</button></a>
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