<?php
#1. koneksikan file ini
include("../koneksi.php");

#2.  mengambil id dari tombol hapus
$id_buku = $_GET['abc'];


#3. menulis query
$hapus = "DELETE FROM BUKU WHERE id_buku ='$id_buku'";

#4. jalankan query
$proses = mysqli_query($koneksi,$hapus);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location = "index.php";
</script>