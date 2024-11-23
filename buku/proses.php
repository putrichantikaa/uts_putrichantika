<?php
#1. koneksikan file ini
include("../koneksi.php");

#2.  mengambil value dari form
$id_buku =$_POST["id_buku"];
$judul_buku =$_POST["judul_buku"];
$pengarang =$_POST["pengarang"];
$tahun_terbit =$_POST["tahun_terbit"];
$kategori =$_POST["kategori"];

#3. menulis query
$simpan = "INSERT INTO buku (id_buku,judul_buku,pengarang,tahun_terbit,kategori) VALUES('$id_buku','$judul_buku','$pengarang','$tahun_terbit','$kategori')";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location = "index.php";
</script>