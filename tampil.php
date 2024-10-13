<?php
$file = fopen("penduduk.txt","r");//membuka file penduduk.txt
 $arr = array();//penampungan array sementara

 $i="";
 while(!feof($file)){//pengecekan adanya file atau tidak
   $arr[$i]=trim(fgets($file));//pemanggilan array
   $i++;
 } fclose($file);//penutupan file txtx
 echo "<h2>Menampilkan database</h2><hr>";
 
 
 foreach ($arr as $data){
   echo "$data <br>";
 }
 echo "<a href='halaman-utama.php'>Kembai ke-halaman awal<a><br>"//hyperlink kembali ke halaman utama
 
 
?>