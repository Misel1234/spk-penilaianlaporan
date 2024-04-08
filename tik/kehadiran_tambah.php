<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Kehadiran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Data Kehadiran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_kehadiran VALUES('','Seksi TIK','$_POST[nama]','$_POST[hadir]','$_POST[tidak_hadir]','$_POST[izin]','$_POST[sakit]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_kehadiran_tik.php'</script>";
    }
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Anggota</label>
                  <div class="col-sm-12">
                  <input type="text" name="nama" placeholder="Nama Anggota" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Hadir</label>
                  <div class="col-sm-12">
                    <input type="number" name="hadir" placeholder="Hadir" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Tidak Hadir</label>
                  <div class="col-sm-15">
                    <input type="number" name="tidak_hadir" placeholder="Tidak Hadir" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                <br><label>Izin</label>
                  <div class="col-sm-15">
                    <input type="number" name="izin" placeholder="Izin" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br> <label>Sakit</label>
                  <div class="col-sm-15">
                    <input type="number" name="sakit" placeholder="Sakit" class="form-control" autocomplete="off" required>
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