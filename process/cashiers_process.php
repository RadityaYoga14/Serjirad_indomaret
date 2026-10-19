<?php

include '../config/config.php';
echo $nama_kasir = $_POST["cashier_name"];
echo $no_telp    = $_POST["phone"];
echo $alamat     = $_POST["address"];

$hasil = mysqli_query($conn, "INSERT INTO tabel_kasir VALUES (NULL, '$nama_kasir', '$no_telp', '$alamat')");
var_dump($hasil);
if(!$hasil){
    echo "<script>alert('Gagal menambahkan data kasir: " . mysqli_error($conn) . "');</script>";
} else {
    echo "<script>alert('Data kasir berhasil ditambahkan.'); window.location.href='../pages/cashiers/list.php'; </script>";
}

