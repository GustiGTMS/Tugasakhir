<?php
include "koneksi.php";
$kode_booking=$_POST['kode_booking'];
$nama=addslashes($_POST['2']);
$tglp=$_POST['3'];
$tglb=$_POST['4'];
$harga=$_POST['5'];
$tujuan=$_POST['6'];
$pesawat=$_POST['7'];
$tambah="insert into tb_pes values ('$kode_booking','$nama','$tglp','$tglb','$harga','$tujuan','$pesawat')";
$hasil=mysqli_query($koneksi,$tambah);
if($hasil === false):
    echo "<script>alert('Gagal disimpan !!');location.href='index.php';</script>";
else :
    echo "<script>alert('berhasil disimpan !!');location.href='booking.php';</script>";
endif;
?>