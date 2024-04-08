<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Monitoring Vicon</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Tambah Vicon</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "INSERT INTO data_monitoring VALUES('','Vicon','$_POST[nama]','$_POST[c1]','$_POST[status]')");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_vicon.php'</script>";
    }
    ?>
    
    <div class="row">
      <div class="card">
          <br>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Nama Vicon</label>
                  <div class="col-sm-12">
                    <input type="text" name="nama" placeholder="Nama Vicon" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Kondisi</label>
                  <div class="col-sm-15">
                    <select class="form-control form-control-lg" name="c1" required>
                      <option value="Tidak Berjalan">Tidak Berjalan</option>
                      <option value="Berjalan">Berjalan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Status</label>
                  <div class="col-sm-15">
                    <select class="form-control form-control-lg" name="status" required>
                      <option value="Terkendala">Terkendala</option>
                      <option value="Baik">Baik</option>
                    </select>
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