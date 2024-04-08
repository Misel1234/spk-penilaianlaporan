<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Evaluasi Kinerja Pada Setiap Bidang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Evaluasi Kinerja Pada Setiap Bidang</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_pengawasan VALUES('','$_POST[nama_bidang]','$_POST[evaluasi_kinerja]','$_POST[keterangan]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='evaluasi_kinerja.php'</script>";
    }
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Bidang</label>
                  <div class="col-sm-12">
                  <input type="text" name="nama_bidang" placeholder="Nama Bidang" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Evaluasi Kinerja</label>
                  <div class="col-sm-12">
                    <select name="evaluasi_kinerja" class="form-control" required>
                      <option value="">-- Pilih Kinerja --</option>
                      <option value="Tidak Ada Kendala">Tidak Ada Kendala</option>
                      <option value="Terkendala">Terkendala</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Keterangan</label>
                  <div class="col-sm-12">
                  <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <hr>
              <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>