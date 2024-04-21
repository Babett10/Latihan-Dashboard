<?php

    $id = $_GET['id'];
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $satuan = $_POST['satuan'];
    $supplier_id = $_POST['supplier_id'];

    include "../../connection.php";

    mysqli_query($connect,"UPDATE `produk` SET `kode_produk`='$kode_produk',`nama_produk`='$nama_produk',`harga`='$harga',`stok`='$stok',`satuan`='$satuan',`supplier_id`='$supplier_id' WHERE id = '$id';");


    header("Location: ../../produk.php");

?>