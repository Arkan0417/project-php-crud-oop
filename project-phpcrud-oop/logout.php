<?php
//untuk mengakhiri sesi dalam artian logout
session_start();
session_destroy();

//mengalihkan ke halaman login
header('location: login.php');
?>