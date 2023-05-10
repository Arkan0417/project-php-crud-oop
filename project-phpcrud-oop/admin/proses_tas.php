<?php 
//memanggil file tas
include('tas.php');

//membuat objek dari class Tas (instansiasi) lalu ditampung ke variabel $tas
$tas = new Tas();

//membuat variabel action untuk menampung nilai action
$action = $_GET['action'];

//pengecekan variabel aksi jika bernilai "add" maka akan melakukan penambahan data tas
if($action == "add"){
	$tas->tambah_data($_POST['nama_tas'],$_POST['jenis_tas'],$_POST['harga'],$_POST['jumlah_penjualan']);
	header('location:view_tas.php');
}
elseif($action=="update"){//jika bernilai "update" maka akan melakukan update data tas
	$tas->update_data($_POST['nama_tas'],$_POST['jenis_tas'],$_POST['harga'],$_POST['jumlah_penjualan'],$_POST['id_tas']);
	header('location:view_tas.php');
}
elseif($action=="delete"){//jika bernilai "delete" maka akan melakukan hapus data tas
	$id_tas = $_GET['id_tas'];
	$tas->delete_data($id_tas);
	header('location:view_tas.php');
}
?>