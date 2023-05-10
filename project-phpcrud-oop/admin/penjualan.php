<?php
//memanggil file koneksi database
include 'database.php';

//pewarisan(inheritance) class penjualan terhadap class database
class Penjualan extends Database{

    //function atau method untuk menampilkan data penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Tas
    function tampil_data(){
        $data = mysqli_query($this->conn,"SELECT * FROM tas, penjualan WHERE tas.id_tas = penjualan.tas_id");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }

    //function atau method untuk menambahkan data penjualan menggunakan parameter $tas_id, $tanggal_penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Tas
    function tambah_data($tas_id,$tanggal_penjualan)
	{
		mysqli_query($this->conn,"insert into penjualan values ('','$tas_id','$tanggal_penjualan')");
	}

    //function atau method untuk mengambil data penjualan berdasarkan id_penjualan menggunakan parameter $id_penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Tas
	function get_by_id($id_penjualan)
	{
		$query = mysqli_query($this->conn,"select * from penjualan where id_penjualan='$id_penjualan'");
		return $query->fetch_array();
	}

    //function atau method untuk update data penjualan menggunakan parameter $tanggal_penjualan, $id_penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Tas
    function update_data($tanggal_penjualan,$id_penjualan)
	{
		mysqli_query($this->conn,"update penjualan set tanggal_penjualan='$tanggal_penjualan' where id_penjualan='$id_penjualan'");
	}

    //function atau method untuk menghapus data penjualan menggunakan parameter $id_penjualan
	//merupakan polymorphism karena memiliki nama method yang sama dengan yang ada di class Tas
	function delete_data($id_penjualan)
	{
		mysqli_query($this->conn,"delete from penjualan where id_penjualan='$id_penjualan'");
	}
}
?>