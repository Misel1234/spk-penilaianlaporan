<?php include 'src/header.php'; error_reporting(0); ?>

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

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_umum VALUES('','$_POST[nama_barang]','$_POST[kondisi]','$_POST[jumlah_barang]','$_POST[status]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_umum.php'</script>";
    }elseif(isset($_POST['update'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_umum SET nama_barang = '$_POST[nama_barang]', kondisi = '$_POST[kondisi]', jumlah_barang = '$_POST[jumlah_barang]', status = '$_POST[status]' WHERE id_umum = '$_GET[id_umum]'");
      echo "<script>alert('Data Berhasil Diupdate');window.location='data_umum.php'</script>";
    }

    if(isset($_GET['id_umum'])){
      $query = mysqli_query($koneksi, "SELECT * FROM data_umum WHERE id_umum = '$_GET[id_umum]'");
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
                  <label>Jumlah Barang</label>
                  <div class="col-sm-12">
                  <input type="text" name="jumlah_barang" value="<?= $data['jumlah_barang'] ?>" placeholder="Jumlah Barang" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Kondisi</label>
                  <div class="col-sm-12">
                    <select name="kondisi" class="form-control" required>
                      <option value="Baik" <?php if($data['kondisi'] == "Baik"){ echo "selected"; } ?> >Baik</option>
                      <option value="Rusak Ringan" <?php if($data['kondisi'] == "Rusak Ringan"){ echo "selected"; } ?> >Rusak Ringan</option>
                      <option value="Rusak Berat" <?php if($data['kondisi'] == "Rusak Berat"){ echo "selected"; } ?> >Rusak Berat</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Status</label>
                  <div class="col-sm-12">
                    <select name="status" class="form-control" required>
                      <option value="Diterima dan Disimpan" <?php if($data['status'] == "Diterima dan Disimpan"){ echo "selected"; } ?> >Diterima dan Disimpan</option>
                      <option value="Diterima dan Diperbaiki" <?php if($data['status'] == "Diterima dan Diperbaiki"){ echo "selected"; } ?> >Diterima dan Diperbaiki</option>
                      <option value="Diterima dan Dikembalikan" <?php if($data['status'] == "Diterima dan Dikembalikan"){ echo "selected"; } ?> >Diterima dan Dikembalikan</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <hr>
              <?php if(isset($_GET['id_umum'])){ ?>
              <button type="submit" name="update" class="btn btn-primary mb-2">UPDATE</button>  
              <?php }else{ ?>
              <button type="submit" name="simpan" class="btn btn-primary mb-2">SIMPAN</button>  
              <?php } ?>
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>