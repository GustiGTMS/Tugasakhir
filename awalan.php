<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {

        }
        .card{
            margin-top: 70px;
        }

        #myCarousel {
            margin-top: 10px;
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

<body class="bg-dark">
    <br>

    <form class="card" action="prosesinput.php" method="post">
        <div class="bg-dark text-white" class="card-body">
                <center>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Kode Booking</label>
                        <input type="number" class="form-control" name="1">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="2">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" name="3">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Tanggal Berangkat</label>
                        <input type="date" class="form-control" name="4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Harga Tiket</label>
                        <select name="5">
                            <?php
                            include "koneksi.php";
                            $type = "select * from tb_type";
                            $query = mysqli_query($koneksi, $type);
                            while ($data_type = mysqli_fetch_array($query)) {
                                $i++;
                                ?>
                                <option value="<?php echo $data_type['kd_type']; ?>">
                                    <?php echo $data_type['type']; ?>
                                    <?php echo $data_type['harga']; ?>
                                </option>
                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div>
                        <label for="inputCity" class="form-label">Tujuan</label>
                        <select name="6">
                            <?php
                            include "koneksi.php";
                            $tujuan = "select * from tb_tujuan";
                            $query = mysqli_query($koneksi, $tujuan);
                            while ($data_tujuan = mysqli_fetch_array($query)) {
                                $i++;
                                ?>
                                <option value="<?php echo $data_tujuan['kd_tujuan']; ?>">
                                    <?php echo $data_tujuan['tujuan']; ?>
                                </option>
                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div>
                        <label for="inputCity" class="form-label">Pesawat</label>
                        <select name="7">
                            <?php
                            include "koneksi.php";
                            $pesawat = "select * from tb_pesawat";
                            $query = mysqli_query($koneksi, $pesawat);
                            while ($data_pesawat = mysqli_fetch_array($query)) {
                                $i++;
                                ?>
                                <option value="<?php echo $data_pesawat['kd_pesawat']; ?>">
                                    <?php echo $data_pesawat['pesawat']; ?>
                                </option>
                                <?php
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
<?php
include 'templates/footer.php'
    ?>

</html>