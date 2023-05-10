<?php
//memanggil file tas
include('tas.php');

//membuat objek dari class Tas (instansiasi) lalu ditampung ke variabel $db
$db = new Tas();

//mengambil data berdarkan id_tas lalu di tampung ke dalam variabel $id_tas
$id_tas = $_GET['id_tas'];

//pengecekan jika data yang di panggil bernilai null atau kosong
if(! is_null($id_tas))
{
	$data_tas = $db->get_by_id($id_tas);
}
else
{
	header('location:view_tas.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Tas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Update Data Tas</h3>
        <form action="proses_tas.php?action=update" method="post">
        <input type="hidden" name="id_tas" value="<?php echo $data_tas['id_tas']; ?>"/>
        <div class="mb-3">
            <label for="nama_tas" class="form-label">Nama Tas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tas" value="<?php echo $data_tas['nama_tas']; ?>">
        </div>
        <div class="mb-3">
            <label for="jenis_tas" class="form-label">Jenis Tas</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="jenis_tas" value="<?php echo $data_tas['jenis_tas']; ?>">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="harga" value="<?php echo $data_tas['harga']; ?>">
        </div>
        <div class="mb-3">
            <label for="jumlah_penjualan" class="form-label">Jumlah Penjualan</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah_penjualan" value="<?php echo $data_tas['jumlah_penjualan']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="tombol">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>