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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Supplier</h3>
                <form action="../../backend/tambah/proses_supplier.php" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    <input type="text" name="nama" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Telepon
                                </td>
                                <td>
                                    <input type="number" name="telpon" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Alamat
                                </td>
                                <td>
                                    <textarea class="form-control" name="alamat" rows="5"></textarea>
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