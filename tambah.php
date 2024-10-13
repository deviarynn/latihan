<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah</title><!--tabel untuk menambah data penduduk-->
</head>
<body>
  <form method="POST" action="output-tambah.php"> <!--hyperlink melihat output tambah data penduduk-->
    <h2>Menambahkan data penduduk</h2>
  <label>Nama : </label><br>
  <input type="text" name="nama" placeholder="nama" style="width:200px"><br>
  <label>Tanggal lahir: </label><br>
  <input name="tanggal" type="date" style="width:200px"><br>
  <label>NIK: </label><br>
  <input name="nik" type="number" style="width:200px"><br>
    <label>Alamat : </label><br>
  <textarea name="alamat" type="text" placeholder="masukan Alamat" cols="50" rows="3"></textarea><br><br>
  <button name="proses">Tambah</button> <!--button menambah data-->
  </form>
</body>
</html>