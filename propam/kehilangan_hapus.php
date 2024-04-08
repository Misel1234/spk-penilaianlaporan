<?php
include "../config/connection.php";

$delete = mysqli_query($koneksi, "DELETE FROM data_propam_kehilangan WHERE id_propam_kehilangan = '$_GET[id_propam_kehilangan]'");
echo "<script>alert('Data Berhasil Di Hapus');window.location='kehilangan.php'</script>";
?>