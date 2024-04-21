<?php

    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $supplier_id = $_POST['supplier_id'];
    

    include "../../connection.php";

    mysqli_query($connect,"INSERT INTO `produk`(`kode_produk`, `nama_produk`, `harga`, `stok`, `satuan`, `supplier_id`) VALUES ('$kode_produk','$nama_produk','$harga','$stok','$satuan','$supplier_id');");


    header("Location: ../../produk.php");

?>