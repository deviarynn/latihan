<?php
if (!file_exists("penduduk.txt")){//penulisan file penduduk.txt
  $file=fopen("penduduk.txt","w");//membuka dan menuliskan file penduduk.txt
  echo "Berhasil membuat file Database<br>";//tampilan jika file berhasil dibuat
}else{
  echo "File Database sudah ada <br>";//tampilan bila data sudah ada
}

echo "<a href='halaman-utama.php'> Kembali ke halaman awal </a><br>"; //hyperlink kembali kehalaman utama
?>