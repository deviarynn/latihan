<?php
if (isset($_POST['cari1'])){
    $cari1=$_POST['cari1'];
    $cari=$_POST['cari'];
    $nama=$_POST['nama'];
    $file=fopen("penduduk.txt","r");

    if ($file){
        echo "<table border='1'>";
        echo "<tr><th>No</th></tr> <tr><th>Nama</th></tr> <tr><th>Tanggal lahir</th></tr><tr><th>NIK</th></tr><tr><th>Alamat</th></tr>";

        $no=1;
        while (!feof($file)) {
            $nama= fgetc($file);
            $nik= fgetc($file);
            $tanggal= fgetc($file);
            $alamat= fgetc($file);
          

            if (stripos($nama,$cari) !== false ){
             echo "<tr>";
             echo "<td>$nama</td>";
             echo "<td>$tanggal</td>";
             echo "<td>$nik</td>";
             echo "<td>$alamat</td>";
             echo "<td><a href='tampil.php' nama=$nama tanggal lahir=$tanggal nik=$nik alamat=$alamat>exit</a></td>";
             echo "</tr>";
             $no++;
            }
        }
            
            if ($no== 1){
                echo "<tr><td colspan='6'>Tidak ada hasil yang ditemukan </td></tr>";
            }
        echo "</table>";
        fclose($file); 
        

  }else{

    echo "data tidak ditemukan";

}

}

?>