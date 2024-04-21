<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Supplier</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<!-- query -->
<?php
    include("../../connection.php");
    $id = $_GET['id'];

    $supplier = mysqli_query($connect,"SELECT * FROM supplier WHERE id = '$id'");
    foreach ($supplier as $key => $spplr) {
        $nama = $spplr['nama'];
        $telpon = $spplr['telpon'];
        $alamat = $spplr['alamat'];
    }
?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Edit Data Supplier</h3>
                <form action="../../backend/edit/proses_edit_supplier.php?id=<?php echo $id?>" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    <input type="text" name="nama" class ="form-control" required="" autocomplete="" value="<?php echo "$nama"?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    <input type="number" name="telpon" class ="form-control" required="" autocomplete="" value="<?php echo "$telpon"  ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td>
                                    <textarea class="form-control" name="alamat" rows="5"><?php echo "$alamat"  ?></textarea>
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