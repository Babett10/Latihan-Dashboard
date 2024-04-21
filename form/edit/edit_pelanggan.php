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
    include("../../connection.php");
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
                <h3 class="mt-3">Edit Data Pelanggan</h3>
                <form action="../../backend/edit/proses_edit_pelanggan.php?id=<?php echo $id?>" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    <input type="text" name="nama" class ="form-control" required="" autocomplete="" value="<?php echo"$nama" ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis Kelamin
                                </td>
                                <td>
                                    <div class="form-check">
                                    <?php
                                        if ($jenis_kelamin == "Pria") {
                                            echo'<input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" checked="">';
                                        }
                                        else {
                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria">';
                                        }
                                    ?>                                      
                                        <label class="form-check-label">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="form-check">
                                    <?php
                                        if ($jenis_kelamin == "Wanita") {
                                            echo'<input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" checked="">';
                                        }
                                        else {
                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita">';
                                        }
                                    ?>                                              
                                        <label class="form-check-label">
                                            wanita
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    <input type="number" name="telpon" class ="form-control" required="" autocomplete="" value="<?php echo"$telpon" ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td>
                                    <textarea class="form-control" name="alamat" rows="5"><?php echo"$alamat" ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit" class ="btn btn-primary">
                                </td>
                            </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>