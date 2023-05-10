<?php 	
//memanggil file tas.php
include('tas.php');

//membuat objek dari class Tas (instansiasi) lalu ditampung ke variabel $db
$db = new Tas();

//memanggil method tampil_data() dari class Tas lalu ditampung ke variabel $data_tas 
$data_tas = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Penjualan Tas Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-5">
                    <a href="index_admin.php" class="nav-item nav-link">Home</a>
                    <a href="view_tas.php" class="nav-item nav-link">Manajemen Tas</a>
                    <a href="view_pemain.php" class="nav-item nav-link">Manajemen Penjualan</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../logout.php" class="nav-item nav-link">Logout?</a>
                </div>
            </div>
        </div>
    </nav>  
    <div class="container mt-5">
        <h3 class="mb-4">Masukkan Data Penjualan</h3>
        <form action="proses_penjualan.php?action=add" method="post">
        <div class="mb-3">
            <label for="tas_id" class="form-label">Nama tas</label>
            <select name="tas_id" id="tas_id" class="form-control">
                <option>Pilih Tas</option>
                <?php
                //menampilkan data berdasarkan method yang sudah dipanggil dan ditampung ke dalam variabel menggunakan foreach
                //foreach adalah jenis perulangan yang dipakai jika data nya berbentuk array
                foreach ($data_tas as $row) {
                echo "<option value=$row[id_tas]> $row[nama_tas] - $row[jenis_tas]</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_penjualan">
        </div>
        <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>