<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yang akan di edit
$id = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM pesanans WHERE id_pesanan='$id'";

#4. menjalankan querry
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>

    <?php
    include_once('../navbar.php');
    ?>


    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start"> Form Edit Data Pesanan</h3>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="<?=$data['id_pesanan']?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                                <input type="text" readonly value="<?=$data['nama_pelanggan']?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Produk</label>
                                <select name="produk" id="" class="form-control">
                                    <option value=""><?=$data['produk']?></option>
                                    <option value="AYAM RENDANG">Ayam Rendang</option>
                                    <option value="AYAM LADO">Ayam Lado</option>
                                    <option value="AYAM BAKAR">Ayam Bakar</option>
                                    <option value="AYAM GORENG">Ayam Goreng</option>
                                    <option value="AYAM HIDUP">Ayam Hidup</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="text" value="<?=$data['jumlah']?>" name="jumlah" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Pesan</label>
                                <input type="date" value="<?=$data['tanggal_pesan']?>" name="tanggalPesan" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary" href="index.php">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>

</html>