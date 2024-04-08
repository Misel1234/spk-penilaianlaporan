<?php include 'src/header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Training</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="tik.php">Home</a></li>
          <li class="breadcrumb-item active">Edit Data Training</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
    if(isset($_POST['simpan'])){
      $simpan = mysqli_query($koneksi, "UPDATE data_kehadiran SET nama = '$_POST[nama]', hadir = '$_POST[hadir]', tidak_hadir = '$_POST[tidak_hadir]', izin = '$_POST[izin]', sakit = '$_POST[sakit]' WHERE id_kehadiran = '$_GET[id_kehadiran]'");
      echo "<script>alert('Data Berhasil Disimpan');window.location='data_kehadiran.php'</script>";
    }

    $id_kehadiran = $_GET['id_kehadiran'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_kehadiran WHERE id_kehadiran = '$id_kehadiran'");
    $data  = mysqli_fetch_array($query);
    ?>
    
    <div class="row">
      <div class="card">
          
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <br><label>Nama Lengkap</label>
                  <div class="col-sm-12">
                    <input type="text" value="<?= $data['nama'] ?>" name="nama" placeholder="Nama Lengkap" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Hadir</label>
                  <div class="col-sm-12">
                    <input type="number" value="<?= $data['hadir'] ?>" name="hadir" placeholder="Hadir" class="form-control" autocomplete="off" autofocus required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Tidak Hadir</label>
                  <div class="col-sm-15">
                    <input type="number" value="<?= $data['tidak_hadir'] ?>" name="tidak_hadir" placeholder="Tidak Hadir" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
               <div class="col-md-12">
                <div class="form-group">
                <br><label>Izin</label>
                  <div class="col-sm-15">
                    <input type="number" name="izin" value="<?= $data['izin'] ?>" placeholder="Izin" class="form-control" autocomplete="off" required>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <br><label>Sakit</label>
                  <div class="col-sm-15">
                    <input type="number" name="sakit" value="<?= $data['sakit'] ?>" placeholder="Sakit" class="form-control" autocomplete="off" required>
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