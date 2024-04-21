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
                    <a class="nav-link active" href="supplier.php"><h4>Supplier</h4></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="produk.php"><h4>Produk</h4></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        </div>
    <div class="container-md col-md-12">
    <h1>Data Supplier </h1>
    <a class="btn btn-primary mb-3" href="form/tambah/tambah_supplier.php" role="button">Tambah Data Pelanggan</a>
        <table id="myTable" class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //panggil DB
                    include("connection.php");
                    $query = mysqli_query($connect,"SELECT * FROM `supplier` ORDER BY id DESC");

                //cetak jumlah tabel
                while ($data = mysqli_fetch_array($query)) {
                ?>
             
                <tr>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["telpon"] ?></td>
                    <td><?php echo $data["alamat"] ?></td>
                    <td>
                        <a href="form/edit/edit_supplier.php?id=<?php echo $data['id']?>" class="btn btn-warning">Edit</a>
                        <a href="Backend/delete/proses_delete_supplier.php?id=<?php echo $data['id']?>" class="btn btn-danger">Delete</a>
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