<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <title>Sesi 29</title>
</head>
<body>
    <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php"><h4>Pelanggan</h4></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="supplier.php"><h4>Supplier</h4></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="produk.php"><h4>Produk</h4></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-md col-md-12">
    <h1>Data Produk </h1>
    <a class="btn btn-primary mb-3" href="form/tambah/tambah_produk.php" role="button">Tambah Data Pelanggan</a>
        <table id="myTable" class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //panggil DB
                    include("connection.php");
                    $query = mysqli_query($connect,"SELECT produk.id,kode_produk,nama_produk,harga,stok,stok,satuan,nama FROM `produk`
                    INNER JOIN supplier ON produk.supplier_id = supplier.id
                    ORDER BY produk.id DESC;");

                //cetak jumlah tabel
                while ($data = mysqli_fetch_array($query)) {
                ?>
             
                <tr>
                    <td><?php echo $data["kode_produk"] ?></td>
                    <td><?php echo $data["nama_produk"] ?></td>
                    <td><?php echo $data["harga"] ?></td>
                    <td><?php echo $data["stok"] ?></td>
                    <td><?php echo $data["satuan"] ?></td>
                    <td><?php echo $data["nama"] ?></td>
               
                    <td>
                        <a href="form/edit/edit_produk.php?id=<?php echo $data['id']?>" class="btn btn-warning">Edit</a>
                        <a href="Backend/delete/proses_delete_produk.php?id=<?php echo $data['id']?>" class="btn btn-danger">Delete</a>
                        <a href="viewProduk.php?id=<?php echo $data['id']?>" class="btn btn-info">View</a>
                    </td>
                        
                </tr>

                <?php   
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>