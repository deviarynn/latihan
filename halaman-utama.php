<?php
   $username=$_POST['user'];//pemanggilan user
   $password=$_POST['pass'];//pemanggilan pasword
    $file=fopen("pengguna.txt","a");//pemanggilan form pengguna.txt

    fwrite($file , "Username :");//pemanggilan username sebagai file
    fwrite($file , $username . "\n");
    fwrite($file , "Password :");//pemanggilan pasword sebagai file
    fwrite($file , $password . "\n");
    fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
body{
width: auto;
height:95wh;
font-family:'Poppins', sans-serif;
background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/bg2.jpg);
background-size: cover;
background-position: center;
}
h2{
    text-align:center;
    color: #fff;
    font-size: 50px;
}
.border-link1{
    position: relative;
    width: 250px;
    height: 85px;
    top:40px;
    left:50px;
    border:2px solid #fff;
    border-radius: 40px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
}
.border-link1 p{
    color: #fff;
    font-size: 18px;
}
.border-link2{
    position: relative;
    width: 250px;
    height: 85px;
    bottom:70px;
    left:900px;
    border:2px solid #fff;
    border-radius:40px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
}
.border-link2 p{
    color:#fff;
    font-size:19px
}
.border-link3{
    position: relative;
    width: 250px;
    height: 85px;
    bottom:100px;
    left:40%;
    border:2px solid #fff;
    border-radius: 40px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
}
.border-link3 p{
    color: #fff;
    font-size:19px;
}
.border-link4{
    position: relative;
    width: 250px;
    height: 85px;
    bottom:20px;
    left:70px;
    border:2px solid #fff;
    border-radius:40px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
}
.border-link4 p{
    color:#fff;
    font-size:19px
}
.border-link5{
    position: relative;
    width: 250px;
    height: 85px;
    bottom:150px;
    left:900px;
    border:2px solid #fff;
    border-radius:40px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
}
.border-link5 p{
    color:#fff;
    font-size:19px
}
</style>
<h2><center>Selamat Datang di Halaman Utama</center></h2> <!--judul pada halaman utama-->
<form action="proses_cari.php" method="POST"> <!--hyperlink berupa proses_cari.php-->
    <input type="text" name="cari" placeholder="Cari nama penduduk">
<input type="submit" name="cari1"><br><hr>
  </form>
<div class="box"> 
<i class="fa-solid fa-magnifying-glass">
</div>
<body>
<div class="border-link1" onclick="location.href='database.php';">
    <p>Data base penduduk</p>
</div>
    <div class="border-link2" onclick="location.href='tambah.php';">
    <p>Menambah data penduduk</p>
</div>
    <div class="border-link3" onclick="location.href='ubah.php';">
    <p>Mengubah data penduduk</p>
</div>
    <div class="border-link4" onclick="location.href='hapus.php';">
    <p>Menghapus data penduduk</p>
</div>
    <div class="border-link5" onclick="location.href='tampil.php';">
    <p>Menampilkan data penduduk</p>
</div>
</body>
</html>
