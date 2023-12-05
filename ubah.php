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
    </style>

    <?php
    include 'templates/navbar.php';
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-primary">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://1.bp.blogspot.com/-MvC0DfV-VFE/WrndlXJKsQI/AAAAAAAAFT8/texP1ODW0NcVqs_yemLzupfSKQGfcmoEwCEwYBhgL/w1200-h630-p-k-no-nu/pesawat.JPG"
                    class="d-block w-40" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="Image2.jpg" class="d-block w-40" alt="Slide 2">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <?php
    include "koneksi.php";
    $pes = $_GET['kode_booking'];
    $pes1 = "select * from tb_pes
        INNER JOIN tb_tujuan ON tb_pes.kd_tujuan = tb_tujuan.kd_tujuan
        INNER JOIN tb_type ON tb_pes.kd_type = tb_type.kd_type
        INNER JOIN tb_pesawat ON tb_pes.kd_pesawat = tb_pesawat.kd_pesawat
        and kode_booking = '$pes'";
    $sql = mysqli_query($koneksi, $pes1);
    while ($data = mysqli_fetch_array($sql)) {

        ?>

        <form class="card" action="prosesubah.php" method="post">
            <div class="bg-dark text-white" class="card-body">
                <center>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Kode Booking</label>
                        <input name="a" type="number" class="form-control" value="<?php echo $data['kode_booking'] ?>"
                            readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input name="b" type="text" class="form-control" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Tanggal Pemesanan</label>
                        <input name="c" type="date" class="form-control" value="<?php echo $data['tgl_p'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Tanggal Berangkat</label>
                        <input name="d" type="date" class="form-control" value="<?php echo $data['tgl_b'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Harga Tiket</label>
                        <select name="e">
                            <?php
                            $type = "select * from tb_type";
                            $query = mysqli_query($koneksi, $type);
                            while ($data_type = mysqli_fetch_array($query)) {
                                if ($data['kd_type'] == $data_type['kd_type']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option value=" . $data_type['kd_type'] . " $select>"
                                    . $data_type['type'] . "  " . $data_type['harga'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <div>
                        <label for="inputCity" class="form-label">Tujuan</label>
                        <select name="f">
                            <?php
                            $tujuan = "select * from tb_tujuan";
                            $query = mysqli_query($koneksi, $tujuan);
                            while ($data_tujuan = mysqli_fetch_array($query)) {
                                if ($data['kd_tujuan'] == $data_tujuan['kd_tujuan']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option value=" . $data_tujuan['kd_tujuan'] . " $select>"
                                    . $data_tujuan['tujuan'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <div>
                        <label for="inputCity" class="form-label">Pesawat</label>
                        <select name="g">
                            <?php
                            $pesawat = "select * from tb_pesawat";
                            $query = mysqli_query($koneksi, $pesawat);
                            while ($data_pesawat = mysqli_fetch_array($query)) {
                                if ($data['kd_pesawat'] == $data_pesawat['kd_pesawat']) {
                                    $select = "selected";
                                } else {
                                    $select = "";
                                }
                                echo "<option value=" . $data_pesawat['kd_pesawat'] . " $select>"
                                    . $data_pesawat['pesawat'] . "</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </div>
            </center>
        </form>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
<?php
include 'templates/footer.php'
    ?>

</html>