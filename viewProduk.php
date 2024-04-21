<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Pelanggan</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<!-- query -->
<?php
    include("connection.php");
    $id = $_GET['id'];

    $produk = mysqli_query($connect,"SELECT produk.id,kode_produk,nama_produk,harga,stok,stok,satuan,nama FROM `produk`
    INNER JOIN supplier ON produk.supplier_id = supplier.id
    ORDER BY produk.id DESC;");
    foreach ($produk as $key => $prdk) {
        $kode_produk = $prdk['kode_produk'];
        $nama = $prdk['nama_produk'];
        $harga = $prdk['harga'];
        $stok = $prdk['stok'];
        $satuan = $prdk['satuan'];
    }
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Informasi Data Pelanggan</h3>
                    <table class="table">
                            <tr>
                                <td>
                                    kode_produk
                                </td>
                                <td>
                                   <?php echo"$kode_produk" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    harga
                                </td>
                                <td>
                                <?php echo"$harga" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    stok
                                </td>
                                <td>
                                    <?php echo"$stok"?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    satuan
                                </td>
                                <td>
                                    <?php echo"$satuan" ?>
                                </td>
                            </tr>
                        </table>
                    <a class="btn btn-primary mb-3" href="produk.php" role="button">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>