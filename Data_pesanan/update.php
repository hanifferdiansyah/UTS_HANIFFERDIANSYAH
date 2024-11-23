<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id =$_POST['id'];
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$tanggalPesan = $_POST['tanggalPesan'];

#3. menulis query
$sunting = "UPDATE pesanans SET nama_pelanggan='$nama', produk='$produk', jumlah='$jumlah', tanggal_pesan='$tanggalPesan' WHERE id_pesanan='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman menggunakan php
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>