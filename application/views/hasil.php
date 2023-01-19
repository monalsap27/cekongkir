<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <title>Hasil Cek Ongkir</title>
</head>

<body>

    <div class="container col-5 mt-5">
        <h3>Hasil Ongkos Kirim</h3>

        <strong>Pengiriman Dari :</strong>
        <?php echo $hasil->rajaongkir->origin_details->city_name ?>, <br>
        <?php echo $hasil->rajaongkir->origin_details->province ?>,<br>

        <strong>Tujuan Ke :</strong>
        <?php echo $hasil->rajaongkir->destination_details->city_name ?>,<br>
        <?php echo $hasil->rajaongkir->destination_details->province ?>,<br>

        <strong>Menggunakan jasa kurir :</strong>
        <?php echo $hasil->rajaongkir->results[0]->name ?><br>

        <strong>Berat Paket :</strong>
        <?php echo ($hasil->rajaongkir->query->weight / 1000) ?> Kg <br>

        <strong>Ongkos Kirim </strong>
        <?php foreach ($hasil->rajaongkir->results[0]->costs as $biaya) : ?><br>
        <?php echo $biaya->service ?> : <?php echo $biaya->cost[0]->value ?> (<?php echo $biaya->cost[0]->etd ?>hari)
        <?php endforeach ?>

    </div>


</body>










</html>