<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_umum WHERE id_umum = '$_GET[id_umum]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='data_umum.php'</script>";
?>