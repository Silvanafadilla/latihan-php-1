<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <form action="" method="post">
    <div form-group>
        <label for="">Masukan Jumlah Anggota</label>
        <input type="number" name="jml" class="form-control">
        <br>
        <input type="submit" name="pr" value="Proses">
    </div>
    </form>
    </fieldset>
    <br>

    <div class="card-body">
        <?php
            if (isset($_POST['pr'])) {
                $jumlah = $_POST['jml'];
                for ($i=1; $i <= $jumlah ; $i++) { 
                    ?>
            <form action="datapro.php" method="post">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="number" name="nik[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="textarea" name="alamat[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" name="umur[]" class="form-control">
                </div>
                <hr style="color:red">
                <?php } ?>
                    <input type="submit" name="proses" value="Simpan">
            </form>    
        <?php    }
        ?>
    </div>
</body>
</html>