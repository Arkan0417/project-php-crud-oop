<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data tas</title>
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
    <div class="container mt-5">
        <h3 class="mb-4">Masukkan Data tas</h3>
        <form action="proses_tas.php?action=add" method="post">
        <div class="mb-3">
            <label for="nama_tas" class="form-label">Nama tas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tas">
        </div>
        <div class="mb-3">
            <label for="jenis_tas" class="form-label">Jenis Tas</label>
            <select name="jenis_tas" id="jenis_tas" class="form-control">
                <option value="Carrier">Carrier</option>
                <option value="Ransel">Ransel</option>
                <option value="Daypack">Daypack</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="harga">
        </div>
        <div class="mb-3">
            <label for="jumlah_penjualan" class="form-label">Jumlah Penjualan</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah_penjualan">
        </div>
        <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>