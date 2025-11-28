<?php
$host       = "localhost";
$user       = "root";
$pass       = "nisrikusuma_02";
$db         = "webprofile";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}else{
    echo "Koneksi berhasil";
}