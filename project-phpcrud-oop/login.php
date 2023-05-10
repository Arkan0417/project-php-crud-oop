<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">Selamat Datang!</h3>
        <form action="" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
        <?php
        //memamnggil file koneksi login
        include 'koneksi_login.php';

        //memulai sesi setelah login berhasil
        session_start();
        
        //proses pengecekan username dan password pada saat login
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
            $result = $koneksi->query($query);

            $row = $result->num_rows;

            $sql = $koneksi->query("SELECT * FROM users WHERE username = '$username'");
            $akun = $sql->fetch_array();
            
            //pengecekan level pada saat login untuk membedakan admin dan pemilik
            if($row > 0){ //Jika data tersedia
                if($akun['level'] == "Admin"){ //Jika akun berlevel admin maka akan dipindahkan ke halaman admin

                    $_SESSION['username'] = $username;
                    header("location: admin/index_admin.php");
                }elseif($akun['level'] == "Pemilik"){ //Jika akun berlevel admin maka akan dipindahkan ke halaman pemilik

                    $_SESSION['username'] = $username;
                    header("location: pemilik/index_pemilik.php");
                }
            }else{
                echo "<script>alert('Akun belum terdaftar!')</script>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
</body>
</html>