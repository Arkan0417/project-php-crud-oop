<?php
//memanggil file koneksi database
include 'database.php';

//pewarisan(inheritance) class Tas terhadap class database
class Tas extends Database{

    //function atau method untuk menampilkan data tas
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Penjualan
    function tampil_data()
	{
		$data = mysqli_query($this->conn,"select * from tas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
    
    function tampil_log()
	{
		$log = mysqli_query($this->conn,"select * from log_tas");
		while($row = mysqli_fetch_array($log)){
			$hasilLog[] = $row;
		}
		return $hasilLog;
	}

    //function atau method untuk menambahkan data tas menggunakan parameter $nama_tas, $jenis_tas, $harga, $jumlah_penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Penjualan
    function tambah_data($nama_tas,$jenis_tas,$harga,$jumlah_penjualan)
	{
		mysqli_query($this->conn,"insert into tas values ('','$nama_tas','$jenis_tas','$harga','$jumlah_penjualan')");
	}

    //function atau method untuk mengambil data tas berdasarkan id_tas menggunakan parameter $id_tas
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Penjualan
	function get_by_id($id_tas)
	{
		$query = mysqli_query($this->conn,"select * from tas where id_tas='$id_tas'");
		return $query->fetch_array();
	}

    //function atau method untuk update data tas menggunakan parameter $nama_tas, $jenis_tas, $harga, $jumlah_penjualan, $id_tas
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Penjualan
	function update_data($nama_tas,$jenis_tas,$harga,$jumlah_penjualan,$id_tas)
	{
		mysqli_query($this->conn,"update tas set nama_tas='$nama_tas',jenis_tas='$jenis_tas',harga='$harga',jumlah_penjualan='$jumlah_penjualan' where id_tas='$id_tas'");
	}

    //function atau method untuk menghapus data tas menggunakan parameter $id_tas
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Penjualan
	function delete_data($id_tas)
	{
		mysqli_query($this->conn,"delete from tas where id_tas='$id_tas'");
	}
}

?>