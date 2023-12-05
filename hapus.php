<?php
include"koneksi.php";
$kode=$_GET['kode_booking'];
$hapus="DELETE FROM tb_pes WHERE kode_booking='$kode'";
$hasil=mysqli_query($koneksi,$hapus);
if($hasil === false):
    echo "<script>alert('gagal dihapus !!');location.href='booking.php';</script>";
else :
    echo "<script>alert('berhasil berhasil !!');location.href='booking.php';</script>";
endif;
?>