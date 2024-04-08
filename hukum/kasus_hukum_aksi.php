<?php include 'src/header.php'; error_reporting(0); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Kasus Hukum</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Laporan Kasus Hukum</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_kasus_hukum VALUES('','$_POST[kasus]','$_POST[alamat]','$_POST[penyelidikan]','$_POST[status]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='kasus_hukum.php'</script>";
    }elseif(isset($_POST['update'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_kasus_hukum SET kasus = '$_POST[kasus]', alamat = '$_POST[alamat]', penyelidikan = '$_POST[penyelidikan]', status = '$_POST[status]' WHERE id_kasus_hukum = '$_GET[id_kasus_hukum]'");
      echo "<script>alert('Data Berhasil Diupdate');window.location='kasus_hukum.php'</script>";
    }

    if(isset($_GET['id_kasus_hukum'])){
      $query = mysqli_query($koneksi, "SELECT * FROM data_kasus_hukum WHERE id_kasus_hukum = '$_GET[id_kasus_hukum]'");
      $data  = mysqli_fetch_array($query);
    }
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kasus</label>
                  <div class="col-sm-12">
                  <input type="text" name="kasus" value="<?= $data['kasus'] ?>" placeholder="Kasus" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <div class="col-sm-12">
                  <input type="text" name="alamat" value="<?= $data['alamat'] ?>" placeholder="Alamat" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>penyelidikan</label>
                  <div class="col-sm-12">
                    <select name="penyelidikan" class="form-control" required>
                      <option value="Ditangani" <?php if($data['penyelidikan'] == "Ditangani"){ echo "selected"; } ?> >Ditangani</option>
                      <option value="Tidak Ditangani" <?php if($data['penyelidikan'] == "Tidak Ditangani"){ echo "selected"; } ?> >Tidak Ditangani</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Status</label>
                  <div class="col-sm-12">
                    <select name="status" class="form-control" required>
                      <option value="Berjalan Baik" <?php if($data['status'] == "Berjalan Baik"){ echo "selected"; } ?> >Berjalan Baik</option>
                      <option value="Tidak Berjalan Baik" <?php if($data['status'] == "Tidak Berjalan Baik"){ echo "selected"; } ?> >Tidak Berjalan Baik</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <hr>
              <?php if(isset($_GET['id_kasus_hukum'])){ ?>
              <button type="submit" name="update" class="btn btn-primary mb-2">UPDATE</button>  
              <?php }else{ ?>
              <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  
              <?php } ?>
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>