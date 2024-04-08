<?php
$no = 1;
//DEKLARASI
$HasilTidak  = 0;
$HasilKurang = 0;
$HasilBaik   = 0;

//JUMLAH DATA TRAINING/DATASET
$query4 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM training_kehadiran");
$jumlah = mysqli_fetch_array($query4);

//MENGHITUNG JUMLAH DATA TIDAK BAIK, KURANG BAIK DAN BAIK
$T      = mysqli_query($koneksi, "SELECT count(*) AS tidak FROM training_kehadiran WHERE keterangan = 'Tidak Baik'");
$hasilT = mysqli_fetch_array($T);
$nilaiT = $hasilT['tidak'] / $jumlah['jumlah'];

$K      = mysqli_query($koneksi, "SELECT count(*) AS kurang FROM training_kehadiran WHERE keterangan = 'Kurang Baik'");
$hasilK = mysqli_fetch_array($K);
$nilaiK = $hasilK['kurang'] / $jumlah['jumlah'];

$B      = mysqli_query($koneksi, "SELECT count(*) AS baik FROM training_kehadiran WHERE keterangan = 'Baik'");
$hasilB = mysqli_fetch_array($B);
$nilaiB = $hasilB['baik'] / $jumlah['jumlah'];

//MEAN
$MeanT  = mysqli_fetch_array(mysqli_query($koneksi, "SELECT AVG(hadir) AS MeanHT, AVG(tidak_hadir) AS MeanTT, AVG(izin) AS MeanIT, AVG(sakit) AS MeanST FROM training_kehadiran WHERE keterangan = 'Tidak Baik'"));
$MeanK  = mysqli_fetch_array(mysqli_query($koneksi, "SELECT AVG(hadir) AS MeanHK, AVG(tidak_hadir) AS MeanTK, AVG(izin) AS MeanIK, AVG(sakit) AS MeanSK FROM training_kehadiran WHERE keterangan = 'Kurang Baik'"));
$MeanB  = mysqli_fetch_array(mysqli_query($koneksi, "SELECT AVG(hadir) AS MeanHB, AVG(tidak_hadir) AS MeanTB, AVG(izin) AS MeanIB, AVG(sakit) AS MeanSB FROM training_kehadiran WHERE keterangan = 'Baik'"));

//DEVIASI
$dev1a = 0; $dev1b = 0; $dev1c = 0;
$dev2a = 0; $dev2b = 0; $dev2c = 0;
$dev3a = 0; $dev3b = 0; $dev3c = 0;
$dev4a = 0; $dev4b = 0; $dev4c = 0;
//MENGHITUNG NILAI PROBABILITAS BERDASARKAN TIDAK BAIK, KURANG BAIK DAN BAIK
//TIDAK BAIK

$query3  = mysqli_query($koneksi, "SELECT * FROM training_kehadiran WHERE keterangan = 'Tidak Baik'");
while($data3 = mysqli_fetch_array($query3)){
  //DEVIASI TIDAK BAIK
  $dev1a += pow($data3['hadir'] - $MeanT['MeanHT'],2);
  $dev2a += pow($data3['tidak_hadir'] - $MeanT['MeanTT'],2);
  $dev3a += pow($data3['izin'] - $MeanT['MeanIT'],2);
  $dev4a += pow($data3['sakit'] - $MeanT['MeanST'],2);

  $devC1T = (sqrt($dev1a / ($hasilT['tidak'] - 1)));
  $devC2T = (sqrt($dev2a / ($hasilT['tidak'] - 1)));
  $devC3T = (sqrt($dev3a / ($hasilT['tidak'] - 1)));
  $devC4T = (sqrt($dev4a / ($hasilT['tidak'] - 1)));
}

//KURANG BAIK
$query4  = mysqli_query($koneksi, "SELECT * FROM training_kehadiran WHERE keterangan = 'Kurang Baik'");
while($data4 = mysqli_fetch_array($query4)){
  //DEVIASI KURANG BAIK
  $dev1b += pow($data4['hadir'] - $MeanK['MeanHK'],2);
  $dev2b += pow($data4['tidak_hadir'] - $MeanK['MeanTK'],2);
  $dev3b += pow($data4['izin'] - $MeanK['MeanIK'],2);
  $dev4b += pow($data4['sakit'] - $MeanK['MeanSK'],2);

  $devC1K = (sqrt($dev1b / ($hasilK['kurang'] - 1)));
  $devC2K = (sqrt($dev2b / ($hasilK['kurang'] - 1)));
  $devC3K = (sqrt($dev3b / ($hasilK['kurang'] - 1)));
  $devC4K = (sqrt($dev4b / ($hasilK['kurang'] - 1)));
}

//BAIK
$query5  = mysqli_query($koneksi, "SELECT * FROM training_kehadiran WHERE keterangan = 'Baik'");
while($data5 = mysqli_fetch_array($query5)){
  //DEVIASI BAIK
  $dev1c += pow($data5['hadir'] - $MeanB['MeanHB'],2);
  $dev2c += pow($data5['tidak_hadir'] - $MeanB['MeanTB'],2);
  $dev3c += pow($data5['izin'] - $MeanB['MeanIB'],2);
  $dev4c += pow($data5['sakit'] - $MeanB['MeanSB'],2);

  $devC1B = (sqrt($dev1c / ($hasilB['baik'] - 1)));
  $devC2B = (sqrt($dev2c / ($hasilB['baik'] - 1)));
  $devC3B = (sqrt($dev3c / ($hasilB['baik'] - 1)));
  $devC4B = (sqrt($dev4c / ($hasilB['baik'] - 1)));
}
?>