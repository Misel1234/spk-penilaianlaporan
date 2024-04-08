<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_monitoring WHERE id_monitoring = '$_GET[id_monitoring]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='data_vicon.php'</script>";
?>