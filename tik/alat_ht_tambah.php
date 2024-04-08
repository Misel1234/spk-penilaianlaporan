<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Monitoring Alat HT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Alat HT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_monitor_ht VALUES('','$_POST[nama_alat_ht]','$_POST[bidang]','$_POST[c1]','$_POST[status]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_alat_ht.php'</script>";
    }
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>NAMA ALAT HT</label><br> 
                  <div class="col-sm-12">
                  <br><input type="text" name="nama_alat_ht" placeholder="Nama Alat HT" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>PEMEGANG</label><br> 
                  <div class="col-sm-12">
                  <br><input type="text" name="bidang" placeholder="Nama Pemegang" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="form-group">
                <br><label>KONDISI</label>
                  <div class="col-sm-15">
                  <br> <select class="form-control form-control-lg" name="c1" required>
                      <option value="Rusak Berat">Rusak Berat</option>
                      <option value="Rusak Ringan">Rusak Ringan</option>
                      <option value="Baik">Baik</option>
                    </select><hr>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                <br><label>STATUS</label>
                  <div class="col-sm-15">
                  <br> <select class="form-control form-control-lg" name="status" required>
                      <option value="Diterima dan Dikembalikan">Diterima dan Dikembalikan</option>
                      <option value="Diterima dan Diperbaiki">Diterima dan Diperbaiki</option>
                      <option value="Diterima dan Disimpan">Diterima dan Disimpan</option>
                    </select><hr>
                  </div>
                </div>
              </div>

            </div>
             
            <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  

          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>