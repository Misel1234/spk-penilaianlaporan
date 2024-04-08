<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_pengawasan WHERE id_pengawasan = '$_GET[id_pengawasan]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='evaluasi_kinerja.php'</script>";
?>