<?php
$file=fopen('penduduk.txt','r');//membuka data penduduk.txt


$i=0;
while(!feof($file)){//mengecek apakah file sudah ada
  $arr[$i]=trim(fgets($file));
  $i++;
}
if (isset($_POST['proses'])){//menginputkan nama,tanggal,nik,dan alamat
  $nama=$_POST['nama'];
  $tanggal=$_POST['tanggal'];
  $nik=$_POST['nik'];
  $alamat=$_POST['alamat'];
}


$file=fopen("penduduk.txt","a");//membuka file penduduk.txt untuk memasukan nama,tanggal,nik,dan alamat
 fwrite($file,"$nama |");
 fwrite($file,"$tanggal |");
 fwrite($file,"$nik |");
 fwrite($file,"$alamat\n");
 fwrite($file,"\n");
 fclose($file);
 echo "Menambah data ke dalam database<hr>";
 echo "Berhasil Menambahkan!<br>";
 echo "<a href='halaman-utama'>Kembali ke Halaman Utama</a>"//hyperlink kembali ke halaman utama

 
?>