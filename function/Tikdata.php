<?php
include '../config/connection.php';

if($_GET['act'] == 'tambah'){
    $nama = $_POST['Nama'];
    $hadir = $_POST['Hadir'];
    $tidak_hadir = $_POST['TidakHadir'];
    $Izin = $_POST['Izin'];
    $Sakit = $_POST['Sakit'];
    

    $query =  mysqli_query($con, "INSERT INTO tbl_kehadiran VALUES('','$nama','$hadir','$tidak_hadir','$izin','$sakit');");

    echo json_encode(array("status" => "Data tersimpan"));

}else if($_GET['act'] == 'edit'){
    $nama = $_POST['Nama'];
    $hadir = $_POST['Hadir'];
    $tidak_hadir = $_POST['TidakHadir'];
    $izin = $_POST['Izin'];
    $Sakit = $_POST['Sakit'];
    

    $query =  mysqli_query($con, "UPDATE tbl_kehadiran SET nama = '$nama', hadir = '$hadir', tidak_hadir = '$tidak_hadir', izin = '$izin', sakit = '$sakit',  tbl_kehadiran = '$tbl_kehadiran', where id_nama = '".$_POST['kode']."';");

    echo json_encode(array("status" => "Data terupdate"));
	
}else if($_GET['act'] == 'hapus'){
    
    $id = $_GET['id'];

    $query =  mysqli_query($con, "DELETE from tbl_kehadiran where id_nama = '".$id."';");

    echo json_encode(array("status" => "Data terhapus"));
}
else if($_GET['act'] == 'load'){
    
    $string = '';

    $nomor = 1;
    $query = mysqli_query($con, "SELECT * FROM tbl_kehadiran order by nik asc");
    while ($row = mysqli_fetch_assoc($query)) {
        $string .= '<tr>';
        $string .= '<th scope="row">'.$nomor.'</th>
                    <td>'.$row['nama'].'</td>
                    <td>'.$row['hadir'].'</td>
                    <td>'.$row['tidak_hadir'].'</td>
                    <td>'.$row['izin'].'</td>
                    <td>'.$row['sakit'].'</td>
                    <td>
                        <button type="button" class="btn btn-success eb" onclick="ganti('."'".$row['id_nama']."'".')">Edit</button>
                        <button type="button" class="btn btn-danger hb" onclick="hapus('."'".$row['id_nama']."'".','."'".$row['nama']."'".')">Hapus</button>
                    </td>';
        $string .= '</tr>';

        $nomor++;
    }
    echo $string;

}
else if($_GET['act'] == 'load_text'){
	
    $query =  mysqli_query($conn, "select * from tbl_kehadiran where nama = '".$_GET['id_nama']."';");
    $row = mysqli_fetch_array($query);

    
    echo json_encode(array("Nama" => $row['nama'], "Hadir" => $row['hadir'], "TidakHadir" => $row['tidak_hadir'],"Izin" => $row['izin'], "Sakit" => $row['sakit']));

    //cho json_encode(array("status" => $_GET['id']));
}
?>