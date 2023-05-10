<?php 	
//memanggil file penjualan
include('../admin/penjualan.php');

//membuat objek dari class Penjualan (instansiasi) lalu ditampung ke variabel $db
$db = new Penjualan();

//memanggil method tampil_data_penjualan yang berfungsi menampilkan data penjualan lalu di tampung ke dalam variabel $data_penjualan
$data_penjualan = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan Tas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css tambahan  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-5">
                    <a href="index_pemilik.php" class="nav-item nav-link">Home</a>
                    <a href="view_tas.php" class="nav-item nav-link">Data Tas</a>
                    <a href="view_penjualan.php" class="nav-item nav-link">Data Penjualan</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../logout.php" class="nav-item nav-link">Logout?</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <h3 class="my-4">Data Penjualan Tas Outdoor</h3>
        <table class="table table-bordered mt-4 table-striped display" id="table_id" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tas</th>
                    <th>Jenis Tas</th>
                    <th>Jumlah Penjualan</th>
                    <th>Tanggal Penjualan</th>
                </tr>
            </thead>
            <tbody>
            <?php
             //deklarasi variabel $no
            $no = 1;

             //menampilkan data berdasarkan method yang sudah dipanggil dan ditampung ke dalam variabel menggunakan foreach
             //foreach adalah jenis perulangan yang dipakai jika data nya berbentuk array
            foreach ($data_penjualan as $row) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_tas']; ?></td>
                <td><?php echo $row['jenis_tas']; ?></td>
                <td><?php echo $row['jumlah_penjualan']; ?></td>
                <td><?php echo $row['tanggal_penjualan']; ?></td>
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
        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- jquery datatable -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    
        <!-- script tambahan  -->
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js">
        </script>
    
        <!-- fungsi datatable -->
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable({
                    // script untuk membuat export data 
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                })
            });
    
        </script>
</body>
</html>