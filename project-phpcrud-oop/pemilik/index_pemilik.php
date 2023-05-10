<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Pemilik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    //memulai sesi
    session_start();

    $user = $_SESSION['username'];

    if(empty($user)){ //Jika belum login maka akan dikembalikan ke halaman login
        echo "<script>alert('Maaf anda harus login terlebih dahulu!');window.location='../login.php';</script>";
    }
    ?>

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
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3 class="mt-5 text-center">APLIKASI LAPORAN PENJUALAN TAS OUTDOOR</h3>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
</body>
</html>