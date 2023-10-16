<?php 
    session_start();
    session_destroy();
    echo"<script> alert ('Telah Berhasil Logout!'); window.location = '../login/index.php' </script>";
?>