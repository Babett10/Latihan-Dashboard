<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"crossorigin="anonymous"></script>
    <title>Tambah Data Produk</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

<?php
    //panggil DB
    include("../../connection.php");
    $query = mysqli_query($connect,"SELECT * FROM `supplier` ORDER BY id ASC");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Tambah Data Produk</h3>
                <form action="../../backend/tambah/proses_produk.php" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Kode Produk
                                </td>
                                <td>
                                    <input type="number" name="kode_produk" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama Produk
                                </td>
                                <td>
                                    <input type="text" name="nama_produk" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Harga
                                </td>
                                <td>
                                    <input type="number" name="harga" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Stok
                                </td>
                                <td>
                                    <input type="number" name="stok" class ="form-control" required="" autocomplete="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Satuan
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="satuan" value="pcs" checked="">
                                        <label class="form-check-label">
                                            Pcs
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Supplier
                                </td>
                                <td>
                                    <div class="input-group mb-3">
                                        <select class="form-select" name="supplier_id">      
                                            <?php
                                                while ($product = mysqli_fetch_array($query)) {?>
                                                    <option value="<?php echo $product['id']; ?>"> <?php echo $product['nama']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
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