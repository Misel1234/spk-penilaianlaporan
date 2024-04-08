<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_monitor_ht WHERE id_alat_ht = '$_GET[id_alat_ht]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='data_alat_ht.php'</script>";
?>