<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.autosearch').select2();
    });
    </script>


    <title>Aulia Saputri
        Ongkos Kirim</title>
</head>

<body>
    <div class="container">
        <h2>Cek ongkir</h2>

        <form method="post" action="<?php echo site_url('Main/cekongkir') ?>">

            <div class="form-group">
                <label>Pilih Asal Kota</label>
                <select class="form-control autosearch" name="asal">
                    <option value="">Pilih Kota</option>
                    <?php if ($kota) : ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                    <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name  ?></option>
                    <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>
            <div class="form-group">
                <label>Pilih Tujuan Kota</label>
                <select class="form-control autosearch" name="tujuan">
                    <option value="">Pilih Kota</option>
                    <?php if ($kota) : ?>
                    <?php foreach ($kota->rajaongkir->results as $kt) : ?>
                    <option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name  ?></option>
                    <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Berat Paket</label>

                <input type="text" name="berat" class="form-control">

            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kurir</label>
                <select class="form-control" name="kurir">
                    <option value="">Pilih Kurir</option>
                    <option value="jne">JNE</option>
                    <option value="pos">Post Indonesia</option>
                    <option value="tiki">TIKI</option>
                </select>
            </div>

            <div class="form-group">

                <input type="submit" name="submit" value="Cek Ongkir" class="btn btn-primary">

            </div>

        </form>



    </div>
</body>

</html>
<!-- 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity
="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script> -->