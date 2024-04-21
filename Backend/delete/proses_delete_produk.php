<?php

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

    include "../../connection.php";

    mysqli_query($connect,"DELETE FROM `produk` WHERE id = '$id';");


    header("Location: ../../produk.php");

?>