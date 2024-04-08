<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_kehadiran WHERE id_kehadiran = '$_GET[id_kehadiran]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='data_kehadiran.php'</script>";
?>