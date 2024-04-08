<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_kasus_hukum WHERE id_kasus_hukum = '$_GET[id_kasus_hukum]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='kasus_hukum.php'</script>";
?>