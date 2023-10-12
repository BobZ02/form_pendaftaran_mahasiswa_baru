<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="pendaftaran_mahasiswa_baru";

    $kon = mysqli_connect($host,$user,$password,$db);
        if (!$kon){
            die("Koneksi gagal:".mysqli_connect_error());
        }

?>