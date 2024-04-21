<?php

    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];


    include "../../connection.php";

    mysqli_query($connect,"DELETE FROM `supplier` WHERE id = '$id';");


    header("Location: ../../supplier.php");

?>