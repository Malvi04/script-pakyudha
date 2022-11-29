<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Siswa</title>
</head>
<body>
    <form action="act_dasis.php" method="post" enctype="multipart/form-data">
        <label>NISN : </label>
        <input type="text" name="nisn">
        <br><br>
        <label>Nama : </label>
        <input type="text" name="nama">
        <br><br>
        <label>Jenkel : </label>
        <input type="radio" name="jenkel" value="L">Laki-laki
        <input type="radio" name="jenkel" value="P">Perempuan
        <br><br>
        <label>Kelas : </label>
        <select name="kelas" id="">
            <option value="0">-Pilih kelas-</option>
            <option value="X RPL">X RPL</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XII RPL">XII RPL</option>
        </select>
        <br><br>
        <label>Hobi : </label>
        <input type="checkbox" name="hobi[]" value="Ngoding">Ngoding
        <input type="checkbox" name="hobi[]" value="Ngopi">Ngopi
        <input type="checkbox" name="hobi[]" value="Ngobar">Ngobar
        <input type="checkbox" name="hobi[]" value="Turu">Turu
        <br><br>
        <label>Foto Profile : </label>
        <input type="file" name="foto">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>