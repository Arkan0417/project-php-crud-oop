<?php 
//memanggil file penjualan
include('penjualan.php');

//membuat objek dari class Penjualan (instansiasi) lalu ditampung ke variabel $penjualan
$penjualan = new Penjualan();

//membuat variabel action untuk menampung nilai action
$action = $_GET['action'];

//pengecekan variabel aksi jika bernilai "add" maka akan melakukan penambahan data penjualan
if($action == "add"){
	$penjualan->tambah_data($_POST['tas_id'],$_POST['tanggal_penjualan']);
	header('location:view_penjualan.php');
}
elseif($action=="update"){//jika bernilai "update" maka akan melakukan update data penjualan
	$penjualan->update_data($_POST['tanggal_penjualan'],$_POST['id_penjualan']);
	header('location:view_penjualan.php');
}
elseif($action=="delete"){//jika bernilai "delete" maka akan melakukan hapus data penjualan
	$id_penjualan = $_GET['id_penjualan'];
	$penjualan->delete_data($id_penjualan);
	header('location:view_penjualan.php');
}
?>