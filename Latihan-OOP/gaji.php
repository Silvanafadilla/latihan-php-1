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
    <legend>Data</legend>
    <form action="gajipro.php" method="post">
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="">NIP</label>
        <input type="number" name="nip" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Hari Kerja</label>
        <input type="number"  max="30" name="hk" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="simpan" value="Simpan">
    </div>
    </form>
    </fieldset>
</body>
</html>