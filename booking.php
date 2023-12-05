<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {}

        #myCarousel {
            margin-top: 20px;
        }

        .carousel-item img {
            max-height: 350px;
            /* Set the maximum height of your images */
            margin: 0 auto;
            /* Center the images horizontally */
        }

        .card {
            margin-bottom: 69px;
        }

        table{
            background-color: white;
        }
        
    </style>

    <?php
    include 'templates/navbar.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookingan Tiket Anda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <a class="text-white" >
        <center>Pesanan Tiket Anda</center>
    </a>
    <br>
    <table border="2" align="center">
        <tr>
            <th>No</th>
            <th>Kode Booking</th>
            <th>Nama</th>
            <th>Tanggal Pesanan</th>
            <th>Tanggal Berangkat</th>
            <th>Harga Tiket</th>
            <th>Tujuan Anda</th>
            <th>Pesawat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "koneksi.php";
        $pes = "SELECT *
        FROM tb_pes
        INNER JOIN tb_tujuan ON tb_pes.kd_tujuan = tb_tujuan.kd_tujuan
        INNER JOIN tb_type ON tb_pes.kd_type = tb_type.kd_type
        INNER JOIN tb_pesawat ON tb_pes.kd_pesawat = tb_pesawat.kd_pesawat;
        ";
        $query = mysqli_query($koneksi, $pes);
        $nomor = 1;
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td align="center">
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['kode_booking']; ?>
                </td>
                <td>
                    <?php echo $data['nama']; ?>
                </td>
                <td>
                    <?php echo $data['tgl_p']; ?>
                </td>
                <td>
                    <?php echo $data['tgl_b']; ?>
                </td>
                <td>
                    <?php echo $data['type']; ?>
                    <?php echo $data['harga']; ?>
                </td>
                <td>
                    <?php echo $data['tujuan']; ?>
                </td>
                <td>
                    <?php echo $data['pesawat']; ?>
                </td>
                
                <td>
                    <a href="ubah.php?kode_booking=<?php echo $data['kode_booking']; ?>">
                        ubah</a>|
                    <a href="hapus.php?kode_booking=<?php echo $data['kode_booking']; ?>">
                        hapus</a>|
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
<?php
include 'templates/footer.php'
    ?>

</html>