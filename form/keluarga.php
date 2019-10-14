<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keluarga</title>
</head>
<body>
    <fieldset>
    <legend>Form Keluarga</legend>
    <form action="" method="POST">
    <label for="">Masukan Jumlah Keluarga : <br></label>
    <input type="number" name="keluarga"><br><br>
    <input type="submit" name="smp" value="Simpan">
    </form>
   </fieldset><br>
    <?php 
    if (isset($_POST['smp'])) {
        $keluarga = $_POST['keluarga'];
        for ($a = 1; $a <= $keluarga; $a++) {
            ?>
    <form action="keluargapro.php" method="POST">
    <label>Nama : </label>
    <input type="text" name="nama[]">
    <label>NIK : </label>
    <input type="number" name="nik[]">
    <label>Alamat : </label>
    <input type="text" name="alamat[]">
    <label>Umur : </label>
    <input type="number" name="umur[]"><br><br>
      <?php 
    } ?>
    <input type="submit" name="smpa" value="Simpan">
    </form>
    <?php 
}
?>
</body>
</html>