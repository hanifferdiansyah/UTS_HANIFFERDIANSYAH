<?php
#1. Koneksikan file ini
include("../koneksi.php");

#2. mengambil id dari tombol hapus
$id = $_GET['id_pesanan'];

#3. menulis query
$hapus = "DELETE FROM pesanans WHERE id_pesanan='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $hapus);

#5. mengalihkan halaman menggunakan php
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>