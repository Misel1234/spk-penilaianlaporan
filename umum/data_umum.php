<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pengadaan dan Inventaris Barang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Pengadaan dan Inventaris Barang</li>
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
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Kondisi</th>
                    <th>Status</th>
                    <th><a href="data_umum_aksi.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span> Tambah</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_umum");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['jumlah_barang'] ?></td>
                    <td><?= $data['kondisi'] ?></td>
                    <td><?= $data['status'] ?></td>
                    <td>
                      <a href="data_umum_aksi.php?id_umum=<?php echo $data['id_umum']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span> Edit</button></a>
                      <a href="data_umum_hapus.php?id_umum=<?php echo $data['id_umum']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" ><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Hapus</button></a>
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