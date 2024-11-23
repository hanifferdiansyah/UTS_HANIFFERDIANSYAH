<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$tanggalPesan = $_POST['tanggalPesan'];

#3. menulis query
$simpan = "INSERT INTO pesanans (nama_pelanggan, produk, jumlah, tanggal_pesan) VALUES ('$nama','$produk','$jumlah','$tanggalPesan')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman menggunakan php
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>