<?php
include "koneksi.php";
$kode_booking=$_POST['a'];
$nama=addslashes($_POST['b']);
$tglp=$_POST['c'];
$tglb=$_POST['d'];
$harga=$_POST['e'];
$tujuan=$_POST['f'];
$pesawat=$_POST['g'];
$ubah="update tb_pes set nama='$nama', tgl_p='$tglp', tgl_b='$tglb', kd_type='$harga', kd_tujuan='$tujuan',
kd_pesawat='$pesawat' WHERE kode_booking='$kode_booking'";
$hasil=mysqli_query($koneksi,$ubah);
if($hasil === false):
    echo "<script>alert('Gagal diubah !!');location.href='ubah.php';</script>";
else :
    echo "<script>alert('berhasil diubah !!');location.href='booking.php';</script>";
endif;
?>