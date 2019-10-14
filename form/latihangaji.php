<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaji</title>
</head>
<body>
    <fieldset>
    <legend><h1>Data Diri</h1></legend>
    <form action="latihangajipro.php" method="POST">
    <label>Nama : </label><br>
    <input type="text" name="nama">
    <label><br>NIP : </label><br>
    <input type="number" name="nip">
    <label><br>Alamat : </label><br>
    <textarea cols="20" name="alamat"></textarea>
    <label><br>Jumlah Hari Kerja : </label><br>
    <input type="number" name="jmlh" max="30">
    <input type="submit" name="simpan" value="Simpan">
    </form>
    </fieldset>
</body>
</html>