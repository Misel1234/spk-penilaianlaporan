<?php
include "../config/connection.php";

require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->Image('../logo.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(21,0.5,'KEPOLISIAN NEGARA REPUBLIK INDONESIA',0,'C');
$pdf->SetX(4);
$pdf->MultiCell(21,0.5,'DAERAH SULAWESI UTARA',0,'C');    
$pdf->SetX(4);
$pdf->MultiCell(21,0.5,'KABUPATEN MINAHASA',0,'C');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->Cell(25,0.9,"SEKSI HUKUM",0,0,'C');
$pdf->ln(1);
$pdf->Cell(25,0.7,"LAPORAN KEHADIRAN",0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1.5, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(8, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Hadir', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tidak Hadir', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Izin', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Sakit', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Hasil SPK', 1, 0, 'C');
$pdf->ln();

include "src/proses_kehadiran.php";

$query = mysqli_query($koneksi, "SELECT * FROM data_kehadiran WHERE seksi = 'Seksi Hukum'");
while($data1 = mysqli_fetch_array($query)){
  $c1Tidak = (1 / (sqrt(2 * 3.14) * $devC1T)) * exp(-pow($data1['hadir'] - $MeanT['MeanHT'],2) / (2 * pow($devC1T,2)));
  $c2Tidak = (1 / (sqrt(2 * 3.14) * $devC2T)) * exp(-pow($data1['tidak_hadir'] - $MeanT['MeanTT'],2) / (2 * pow($devC2T,2)));
  $c3Tidak = (1 / (sqrt(2 * 3.14) * $devC3T)) * exp(-pow($data1['izin'] - $MeanT['MeanIT'],2) / (2 * pow($devC3T,2)));
  $c4Tidak = (1 / (sqrt(2 * 3.14) * $devC4T)) * exp(-pow($data1['sakit'] - $MeanT['MeanST'],2) / (2 * pow($devC4T,2)));

  $c1Kurang = (1 / (sqrt(2 * 3.14) * $devC1K)) * exp(-pow($data1['hadir'] - $MeanK['MeanHK'],2) / (2 * pow($devC1K,2)));
  $c2Kurang = (1 / (sqrt(2 * 3.14) * $devC2K)) * exp(-pow($data1['tidak_hadir'] - $MeanK['MeanTK'],2) / (2 * pow($devC2K,2)));
  $c3Kurang = (1 / (sqrt(2 * 3.14) * $devC3K)) * exp(-pow($data1['izin'] - $MeanK['MeanIK'],2) / (2 * pow($devC3K,2)));
  $c4Kurang = (1 / (sqrt(2 * 3.14) * $devC4K)) * exp(-pow($data1['sakit'] - $MeanK['MeanSK'],2) / (2 * pow($devC4K,2)));

  $c1Baik = (1 / (sqrt(2 * 3.14) * $devC1B)) * exp(-pow($data1['hadir'] - $MeanB['MeanHB'],2) / (2 * pow($devC1B,2)));
  $c2Baik = (1 / (sqrt(2 * 3.14) * $devC2B)) * exp(-pow($data1['tidak_hadir'] - $MeanB['MeanTB'],2) / (2 * pow($devC2B,2)));
  $c3Baik = (1 / (sqrt(2 * 3.14) * $devC3B)) * exp(-pow($data1['izin'] - $MeanB['MeanIB'],2) / (2 * pow($devC3B,2)));
  $c4Baik = (1 / (sqrt(2 * 3.14) * $devC4B)) * exp(-pow($data1['sakit'] - $MeanB['MeanSB'],2) / (2 * pow($devC4B,2)));

  $HasilTidak = $c1Tidak * $c2Tidak * $c3Tidak * $c4Tidak * $nilaiT;
  $HasilKurang = $c1Kurang * $c2Kurang * $c3Kurang * $c4Kurang * $nilaiK;
  $HasilBaik = $c1Baik * $c2Baik * $c3Baik * $c4Baik * $nilaiB;

  if($HasilTidak > $HasilKurang AND $HasilTidak > $HasilBaik){
    $keterangan = "Tidak Baik";
  }elseif($HasilKurang > $HasilTidak AND $HasilKurang > $HasilBaik){
    $keterangan = "Kurang Baik";
  }elseif($HasilBaik > $HasilTidak AND $HasilBaik > $HasilKurang){
    $keterangan = "Baik";
  }

  $pdf->Cell(1.5, 0.8, $no , 1, 0, 'C');
  $pdf->Cell(8, 0.8, $data1['nama'],1, 0, 'C');
  $pdf->Cell(3, 0.8, $data1['hadir'], 1, 0,'C');
  $pdf->Cell(3, 0.8, $data1['tidak_hadir'], 1, 0,'C');
  $pdf->Cell(3, 0.8, $data1['izin'], 1, 0,'C');
  $pdf->Cell(3, 0.8, $data1['sakit'], 1, 0,'C');
  $pdf->Cell(4, 0.8, $keterangan, 1, 0,'C');
  $pdf->ln();
  $no++;
}

$pdf->ln(1);
$pdf->Cell(25,0.7,"LAPORAN KASUS HUKUM",0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1.5, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Kasus', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Alamat', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Penyelidikan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Status', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Hasil SPK', 1, 0, 'C');
$pdf->ln();

$no = 1;
                  //JUMLAH DATA TRAINING/DATASET
                  $query4 = mysqli_query($koneksi, "SELECT count(*) AS jumlah FROM data_training_kasus_hukum");
                  $jumlah = mysqli_fetch_array($query4);

                  //MENGHITUNG JUMLAH DATA TIDAK BAIK, KURANG BAIK DAN BAIK
                  $T       = mysqli_query($koneksi, "SELECT count(*) AS perbaikan FROM data_training_kasus_hukum WHERE keterangan = 'Tidak Terlaksana'");
                  $hasilT  = mysqli_fetch_array($T);
                  $nilaiT  = $hasilT['perbaikan'] / $jumlah['jumlah'];

                  $B       = mysqli_query($koneksi, "SELECT count(*) AS tidak_ada FROM data_training_kasus_hukum WHERE keterangan = 'Terlaksana'");
                  $hasilB  = mysqli_fetch_array($B);
                  $nilaiB  = $hasilB['tidak_ada'] / $jumlah['jumlah'];


                  $query = mysqli_query($koneksi, "SELECT * FROM data_kasus_hukum");
                  while($data1 = mysqli_fetch_array($query)){

                    $c1a   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1a FROM data_training_kasus_hukum WHERE c1 = '$data1[penyelidikan]' AND keterangan = 'Tidak Terlaksana'");
                    $h_c1a = mysqli_fetch_array($c1a);

                    $c1b   = mysqli_query($koneksi, "SELECT COUNT(*) AS c1b FROM data_training_kasus_hukum WHERE c1 = '$data1[penyelidikan]' AND keterangan = 'Terlaksana'");
                    $h_c1b = mysqli_fetch_array($c1b);

                    $hasil_tidak = $h_c1a['c1a'] / $hasilT['perbaikan'] * $nilaiT;
                    $hasil_baik  = $h_c1b['c1b'] / $hasilB['tidak_ada'] * $nilaiB;

                    if($hasil_tidak > $hasil_baik){
                      $keterangan = "Tidak Terlaksana";
                    }elseif($hasil_baik > $hasil_tidak){
                      $keterangan = "Terlaksana";
                    }
  
  $pdf->Cell(1.5, 0.8, $no , 1, 0, 'C');
  $pdf->Cell(6, 0.8, $data1['kasus'],1, 0, 'C');
  $pdf->Cell(6, 0.8, $data1['alamat'], 1, 0,'C');
  $pdf->Cell(4, 0.8, $data1['penyelidikan'], 1, 0,'C');
  $pdf->Cell(4, 0.8, $data1['status'], 1, 0,'C');
  $pdf->Cell(4, 0.8, $keterangan, 1, 0,'C');
  $pdf->ln();
  $no++;
}


$pdf->Output("laporan_hasil_keputusan.pdf","I");

?>

