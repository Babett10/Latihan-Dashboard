<?php

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

    include "../../connection.php";

    mysqli_query($connect,"INSERT INTO `supplier`(`nama`, `telpon`, `alamat`) VALUES ('$nama','$telpon','$alamat');");


    header("Location: ../../supplier.php");

?>