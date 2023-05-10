<?php 	
//memanggil file tas
include('tas.php');

//membuat objek dari class Tas (instansiasi) lalu ditampung ke variabel $db
$db = new Tas();

//memanggil method tampil_data yang berfungsi menampilkan data tas untuk ditampung ke dalam sebuah variabel
$data_tas = $db->tampil_data();

//memanggil method tampil_log yang berfungsi menampilkan data logging pada tabel tas atau bisa disebut trigger untuk ditampung ke dalam sebuah variabel
$data_log = $db->tampil_log();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Tas</title>
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
                    <a href="view_penjualan.php" class="nav-item nav-link">Manajemen Penjualan</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../logout.php" class="nav-item nav-link">Logout?</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
    <a href="form_tambah_tas.php" class="btn btn-primary mt-4 mb-3">Input Data Tas</a>
        <h3 class="mt-3">Data Tas Outdoor</h3>
        <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tas</th>
                    <th>Jenis Tas</th>
                    <th>Harga</th>
                    <th>Jumlah Penjualan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            //deklarasi variabel $no
            $no = 1;

            //menampilkan data berdasarkan method yang sudah dipanggil dan ditampung ke dalam variabel menggunakan foreach
            //foreach adalah jenis perulangan yang dipakai jika data nya berbentuk array
            foreach ($data_tas as $row) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_tas']; ?></td>
                <td><?php echo $row['jenis_tas']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['jumlah_penjualan']; ?></td>
                <td>
                    <a href="update_tas.php?id_tas=<?php echo $row['id_tas']; ?>" class="btn btn-success">Update</a>
					<a href="proses_tas.php?action=delete&id_tas=<?php echo $row['id_tas']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            //increment
            $no++;
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="container-fluid mt-5">
    <h3 class="mt-3">Log Update Jumlah Penjualan Tas</h3>
        <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tas</th>
                    <th>Jenis Tas</th>
                    <th>Jumlah Penjualan Lama</th>
                    <th>Jumlah Penjualan Baru</th>
                    <th>Waktu Perubahan</th>
                </tr>
            </thead>
            <tbody>
            <?php
             //deklarasi variabel $no
            $no = 1;

            //menampilkan data berdasarkan method yang sudah dipanggil dan ditampung ke dalam variabel menggunakan foreach
            //foreach adalah jenis perulangan yang dipakai jika data nya berbentuk array
            foreach ($data_log as $rows) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $rows['nama_tas']; ?></td>
                <td><?php echo $rows['jenis_tas']; ?></td>
                <td><?php echo $rows['jumlah_penjualanlama']; ?></td>
                <td><?php echo $rows['jumlah_penjualanbaru']; ?></td>
                <td><?php echo $rows['waktu_perubahan']; ?></td>
            </tr>
            <?php
            //increment
            $no++;
            }
            ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>