<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_propam_kecelakaan WHERE id_propam_kecelakaan = '$_GET[id_propam_kecelakaan]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='kecelakaan.php'</script>";
?>