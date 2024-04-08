<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Monitoring Vicon</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Edit Vicon</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_monitoring SET nama = '$_POST[nama]', c1 = '$_POST[c1]', status = '$_POST[status]' WHERE id_monitoring = '$_GET[id_monitoring]'");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_vicon.php'</script>";
    }

    $id_monitoring = $_GET['id_monitoring'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_monitoring WHERE id_monitoring = '$id_monitoring'");
    $data  = mysqli_fetch_array($query);
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Vicon</label>
                  <div class="col-sm-12">
                    <input type="text" name="nama" value="<?= $data['nama'] ?>" placeholder="Nama Vicon" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kondisi</label>
                  <div class="col-sm-15">
                    <select class="form-control form-control-lg" name="c1" required>
                      <option value="Tidak Berjalan" <?php if($data['c1'] == "Tidak Berjalan"){ echo "selected"; } ?> >Tidak Berjalan</option>
                      <option value="Berjalan" <?php if($data['c1'] == "Berjalan"){ echo "selected"; } ?> >Berjalan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Status</label>
                  <div class="col-sm-15">
                    <select class="form-control form-control-lg" name="status" required>
                      <option value="Terkendala" <?php if($data['status'] == "Terkendala"){ echo "selected"; } ?> >Terkendala</option>
                      <option value="Baik" <?php if($data['status'] == "Baik"){ echo "selected"; } ?> >Baik</option>
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