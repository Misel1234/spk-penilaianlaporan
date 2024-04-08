<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kinerja Pada Setiap Bidang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Edit Kinerja Pada Setiap Bidang</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_pengawasan SET nama_bidang = '$_POST[nama_bidang]', evaluasi_kinerja = '$_POST[evaluasi_kinerja]', keterangan = '$_POST[keterangan]' WHERE id_pengawasan = '$_GET[id_pengawasan]'");
      echo "<script>alert('Data Berhasil Disimpan');window.location='evaluasi_kinerja.php'</script>";
    }

    $id_pengawasan = $_GET['id_pengawasan'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_pengawasan WHERE id_pengawasan = '$id_pengawasan'");
    $data  = mysqli_fetch_array($query);
    ?>
    
    <div class="row">
      <div class="card">
          
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <br><label>Nama Bidang</label>
                  <div class="col-sm-12">
                    <input type="text" value="<?= $data['nama_bidang'] ?>" name="nama_bidang" placeholder="Nama Bidang" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Evaluasi Kinerja</label>
                  <div class="col-sm-12">
                    <select name="evaluasi_kinerja" class="form-control" required>
                      <option value="Tidak Ada Kendala" <?php if($data['evaluasi_kinerja'] == "Tidak Ada Kendala"){ echo "selected"; } ?> >Tidak Ada Kendala</option>
                      <option value="Terkendala" <?php if($data['evaluasi_kinerja'] == "Terkendala"){ echo "selected"; } ?> >Terkendala</option>
                    </select>
                  </div>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <label>Keterangan</label>
                  <div class="col-sm-12">
                  <input type="text" name="keterangan" value="<?= $data['keterangan'] ?>" placeholder="Keterangan" class="form-control" autocomplete="off" required>
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