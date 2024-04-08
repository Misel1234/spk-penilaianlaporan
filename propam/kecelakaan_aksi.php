<?php include 'src/header.php'; error_reporting(0); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Laporan Kecelakaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Laporan Kecelakaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_propam_kecelakaan VALUES('','$_POST[nama_anggota]','$_POST[penyelidikan]','$_POST[lokasi]','$_POST[keterangan]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='kecelakaan.php'</script>";
    }elseif(isset($_POST['update'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_propam_kecelakaan SET nama_anggota = '$_POST[nama_anggota]', penyelidikan = '$_POST[penyelidikan]', lokasi = '$_POST[lokasi]', keterangan = '$_POST[keterangan]' WHERE id_propam_kecelakaan = '$_GET[id_propam_kecelakaan]'");
      echo "<script>alert('Data Berhasil Diupdate');window.location='kecelakaan.php'</script>";
    }

    if(isset($_GET['id_propam_kecelakaan'])){
      $query = mysqli_query($koneksi, "SELECT * FROM data_propam_kecelakaan WHERE id_propam_kecelakaan = '$_GET[id_propam_kecelakaan]'");
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
                  <input type="text" name="nama_anggota" value="<?= $data['nama_anggota'] ?>" placeholder="Kasus" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Lokasi</label>
                  <div class="col-sm-12">
                  <input type="text" name="lokasi" value="<?= $data['lokasi'] ?>" placeholder="Lokasi Kecelakaan" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>penyelidikan</label>
                  <div class="col-sm-12">
                    <select name="penyelidikan" class="form-control" required>
                      <option value="Berjalan Baik" <?php if($data['penyelidikan'] == "Berjalan Baik"){ echo "selected"; } ?> >Berjalan Baik</option>
                      <option value="Tidak Berjalan Baik" <?php if($data['penyelidikan'] == "Tidak Berjalan Baik"){ echo "selected"; } ?> >Tidak Berjalan Baik</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Keterangan</label>
                  <div class="col-sm-12">
                    <select name="Keterangan" class="form-control" required>
                      <option value="Kecelakaan Berat" <?php if($data['keterangan'] == "Kecelakaan Berat"){ echo "selected"; } ?> >Kecelakaan Berat</option>
                      <option value="Kecelakaan Ringan" <?php if($data['keterangan'] == "Kecelakaan Ringan"){ echo "selected"; } ?> >Kecelakaan Ringan</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <hr>
              <?php if(isset($_GET['id_propam_kecelakaan'])){ ?>
              <button type="submit" name="update" class="btn btn-primary mb-2">UPDATE</button>  
              <?php }else{ ?>
              <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  
              <?php } ?>
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>