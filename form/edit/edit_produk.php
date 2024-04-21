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

<!-- query -->
<?php
    include("../../connection.php");
    $id = $_GET['id'];

    $prdk = mysqli_query($connect,"SELECT produk.id,kode_produk,nama_produk,harga,stok,stok,satuan,nama,supplier.id FROM `produk`
    INNER JOIN supplier ON produk.supplier_id = supplier.id
    WHERE produk.id = '$id'");
    foreach ($prdk as $key => $prdk) {
        $kode_produk = $prdk['kode_produk'];
        $nama_produk = $prdk['nama_produk'];
        $harga = $prdk['harga'];
        $stok = $prdk['stok'];
        $satuan = $prdk['satuan'];
    }
?>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-3">Edit Data Produk</h3>
                <form action="../../backend/edit/proses_edit_produk.php?id=<?php echo $id?>" method="post">
                    <table class="table">
                            <tr>
                                <td>
                                    Kode Produk
                                </td>
                                <td>
                                    <input type="number" name="kode_produk" class ="form-control" required="" autocomplete="" value="<?php echo "$kode_produk"?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nama Produk
                                </td>
                                <td>
                                    <input type="text" name="nama_produk" class ="form-control" required="" autocomplete="" value="<?php echo "$nama_produk"?>">
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Harga
                                </td>
                                <td>
                                    <input type="number" name="harga" class ="form-control" required="" autocomplete="" value="<?php echo "$harga"?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Stok
                                </td>
                                <td>
                                    <input type="number" name="stok" class ="form-control" required="" autocomplete="" value="<?php echo "$stok"?>">
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
                                                //panggil DB
                                                include("../../connection.php");
                                                $query = mysqli_query($connect,"SELECT * FROM `supplier` ORDER BY id ASC");
                                           
                                                while ($spplr = mysqli_fetch_array($query)) {
                                                    if ($spplr ["id"] == $prdk["id"]) {
                                                        $selected = "selected";}
                                                    else $selected = "";
                                                    ?>
                                                    <option <?php echo $selected ?> value="<?php echo $spplr['id']; ?>"> <?php echo $spplr['nama']; ?></option>
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
