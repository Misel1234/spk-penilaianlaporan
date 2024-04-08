<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Monitoring Alat HT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Edit Alat HT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_monitor_ht SET nama_alat_ht = '$_POST[nama_alat_ht]', bidang = '$_POST[bidang]', c1 = '$_POST[c1]', status = '$_POST[status]' WHERE id_alat_ht = '$_GET[id_alat_ht]'");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_alat_ht.php'</script>";
    }

    $id_alat_ht = $_GET['id_alat_ht'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_monitor_ht WHERE id_alat_ht = '$id_alat_ht'");
    $data  = mysqli_fetch_array($query);
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>NAMA ALAT HT</label>
                  <div class="col-sm-12">
                  <br><input type="text" name="nama_alat_ht" value="<?= $data['nama_alat_ht'] ?>" placeholder="Nama Alat HT" class="form-control" autocomplete="off" autofocus required>
                    <br> </div>
                </div>
              </div><br>

              <div class="col-md-12">
                <div class="form-group">
                <br><label>PEMEGANG</label>
                  <div class="col-sm-15">
                  <br><input type="text" name="bidang" value="<?= $data['bidang'] ?>" placeholder="Pemegang" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>KONDISI</label>
                  <div class="col-sm-15">
                  <br><select class="form-control form-control-lg" name="c1" required>
                      <option value="Rusak Berat" <?php if($data['c1'] == "Rusak Berat"){ echo "selected"; } ?> >Rusak Berat</option>
                      <option value="Rusak Ringan" <?php if($data['c1'] == "Rusak Ringan"){ echo "selected"; } ?> >Rusak Ringan</option>
                      <option value="Baik" <?php if($data['c1'] == "Baik"){ echo "selected"; } ?> >Baik</option>
                    </select>
                  </div>
                </div>
              </div> 

              <div class="col-md-12">
                <div class="form-group">
                  <label>STATUS</label>
                  <div class="col-sm-15">
                  <br><select class="form-control form-control-lg" name="status" required>
                      <option value="Diterima dan Dikembalikan" <?php if($data['status'] == "Diterima dan Dikembalikan"){ echo "selected"; } ?> >Diterima dan Dikembalikan</option>
                      <option value="Diterima dan Diperbaiki" <?php if($data['status'] == "Diterima dan Diperbaiki"){ echo "selected"; } ?> >Diterima dan Diperbaiki</option>
                      <option value="Diterima dan Disimpan" <?php if($data['status'] == "Diterima dan Disimpan"){ echo "selected"; } ?> >Diterima dan Disimpan</option>
                    </select>
                  </div>
                </div>
              </div> 

             

            </div>
            <hr>
            <button type="submit" name="simpan" class="btn btn-primary mb-2">UPDATE</button>  
          </form>
        </div>
    </div>

  </main>
  
<?php include 'src/footer.php'; ?>