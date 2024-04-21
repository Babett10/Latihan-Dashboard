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

    $pelanggan = mysqli_query($connect,"SELECT * FROM pelanggan WHERE id = '$id'");
    foreach ($pelanggan as $key => $prdk) {
        $nama = $prdk['nama'];
        $jenis_kelamin = $prdk['jenis_kelamin'];
        $telpon = $prdk['telpon'];
        $alamat = $prdk['alamat'];
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
                                    Nama
                                </td>
                                <td>
                                   <?php echo"$nama" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis Kelamin
                                </td>
                                <td>
                                <?php echo"$jenis_kelamin" ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    <?php echo"$telpon"?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td>
                                    <?php echo"$alamat" ?>
                                </td>
                            </tr>
                        </table>
                    <a class="btn btn-primary mb-3" href="index.php" role="button">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>