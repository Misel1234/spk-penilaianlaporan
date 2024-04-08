<?php include 'src/header.php'; error_reporting(0); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Kehilangan Dan Kerusakan Aset/Peralatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Data Kehilangan Aset/Peralatan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_propam_kehilangan VALUES('','$_POST[nama_barang]','$_POST[kondisi]','$_POST[bidang]','$_POST[jumlah_barang]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='kehilangan.php'</script>";
    }elseif(isset($_POST['update'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_propam_kehilangan SET nama_barang = '$_POST[nama_barang]', kondisi = '$_POST[kondisi]', bidang = '$_POST[bidang]', jumlah_barang = '$_POST[jumlah_barang]' WHERE id_propam_kehilangan = '$_GET[id_propam_kehilangan]'");
      echo "<script>alert('Data Berhasil Diupdate');window.location='kehilangan.php'</script>";
    }

    if(isset($_GET['id_propam_kehilangan'])){
      $query = mysqli_query($koneksi, "SELECT * FROM data_propam_kehilangan WHERE id_propam_kehilangan = '$_GET[id_propam_kehilangan]'");
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
                  <label>Nama Barang</label>
                  <div class="col-sm-12">
                  <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" placeholder="Nama Barang" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Bidang</label>
                  <div class="col-sm-12">
                  <input type="text" name="bidang" value="<?= $data['bidang'] ?>" placeholder="Nama Bidang" class="form-control" autocomplete="off" autofocus>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Jumlah Barang</label>
                  <div class="col-sm-12">
                  <input type="text" name="jumlah_barang" value="<?= $data['jumlah_barang'] ?>" placeholder="Jumlah Barang" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Kondisi</label>
                  <div class="col-sm-12">
                    <select name="kondisi" class="form-control" required>
                      <option value="Rusak Ringan" <?php if($data['kondisi'] == "Rusak Ringan"){ echo "selected"; } ?> >Rusak Ringan</option>
                      <option value="Rusak Berat" <?php if($data['kondisi'] == "Rusak Berat"){ echo "selected"; } ?> >Rusak Berat</option>
                      <option value="Hilang" <?php if($data['kondisi'] == "Hilang"){ echo "selected"; } ?> >Hilang</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Keterangan</label>
                  <div class="col-sm-12">
                    <select name="kondisi" class="form-control" required>
                      <option value="Perbaikan" <?php if($data['keterangan'] == "Perbaikan"){ echo "selected"; } ?> >Perbaikan</option>
                      <option value="Tidak Perbaikan" <?php if($data['keterangan'] == "Tidak Perbaikan"){ echo "selected"; } ?> >Tidak Perbaikan</option>
                      <option value="Tidak Ada" <?php if($data['keterangan'] == "Tidak Ada"){ echo "selected"; } ?> >Tidak Ada</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <hr>
              <?php if(isset($_GET['id_propam_kehilangan'])){ ?>
              <button type="submit" name="update" class="btn btn-primary mb-2">UPDATE</button>  
              <?php }else{ ?>
              <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  
              <?php } ?>
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>