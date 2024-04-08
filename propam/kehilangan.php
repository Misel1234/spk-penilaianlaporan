<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Kehilangan Dan KerusakanAset/Peralatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Data Kehilangan Aset/Peralatan</li>
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
                    <th>Bidang</th>
                    <th>Jumlah Barang</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th><a href="kehilangan_aksi.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span> Tambah</button></a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($koneksi, "SELECT * FROM data_propam_kehilangan");
                  while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr align="center">
                    <td><?= $no++ ?></td>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['bidang'] ?></td>
                    <td><?= $data['jumlah_barang'] ?></td>
                    <td><?= $data['kondisi'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                      <a href="kehilangan_aksi.php?id_propam_kehilangan=<?php echo $data['id_propam_kehilangan']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span> Edit</button></a>
                      <a href="kehilangan_hapus.php?id_propam_kehilangan=<?php echo $data['id_propam_kehilangan']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')" ><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span> Hapus</button></a>
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