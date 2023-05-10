<?php	
//class database yang berfungsi untuk koneksi ke database
class Database{
	
	//property
	public $host = "localhost";
	public $user = "root";
	public $password = "";
	public $db_name = "tas";
	public $conn;

	//__construct adalah fungsi yg berjalan otomatis ketika class database dijalankan
	public function __construct(){

		//$this->conn adalah variabel yang berfungsi menampung koneksi database
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
	}
}

?>