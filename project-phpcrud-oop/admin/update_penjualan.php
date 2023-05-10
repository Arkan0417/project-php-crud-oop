<?php
//memanggil file penjualan
include('penjualan.php');

//membuat objek dari class Penjualan (instansiasi) lalu ditampung ke variabel $db
$db = new Penjualan();

//mengambil data berdarkan id_penjualan lalu di tampung ke dalam variabel $id_penjualan
$id_penjualan = $_GET['id_penjualan'];

//pengecekan jika data yang di panggil bernilai null atau kosong
if(! is_null($id_penjualan))
{
	$data_penjualan = $db->get_by_id($id_penjualan);
}
else
{
	header('location:view_penjualan.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Penjualan Tas Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Update Data Penjualan Tas Outdoor</h3>
        <form action="proses_penjualan.php?action=update" method="post">
        <input type="hidden" name="id_penjualan" value="<?php echo $data_penjualan['id_penjualan']; ?>"/>
        <div class="mb-3">
            <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_penjualan" value="<?php echo $data_penjualan['tanggal_penjualan']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="tombol">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>