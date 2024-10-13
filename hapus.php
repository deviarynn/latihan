<?php
$x='penduduk.txt';//penampungan file penduduk.txt

define('BK', $x);
$database = file(BK, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$i = 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteData'])) {
    $deleteIndex = $_POST['deleteData'];//rikues penghapusan data

    
    unset($database[$deleteIndex]);//penghapusan data base

    
    file_put_contents(BK, implode("\n", $database));
}

echo "<table border='1'>";//file input nama,tanggal lahir nik dan alamat

            echo "<tr>";
            echo "<td>Nama</td>";
            echo  "<td>Tgl lahir</td>";
            echo  "<td>Alamat</td>";
            echo  "<td>NIK</td>";
            echo  " </tr>";
            
foreach ($database as $data) {//pemberian nama alias
    $exp = explode("|", $data);
    if (isset($exp[1])) {//fungsi pemanggilan data
        $nama = $exp[0];
        $tanggal = $exp[1];
        $alamat = $exp[2];
        $nik= $exp[3];

        echo "<tr>";//mencetak nama tanggal lahir nik dan alamat
        echo "<td>$nama</td>";
        echo "<td>$tanggal</td>";
        echo "<td>$alamat</td>";
        echo "<td>$nik</td>";
        echo "<td><form method='POST'><input type='hidden' name='deleteData' value='$i'><input type='submit' value='Hapus'></form></td>";
        echo "</tr>";
    }
    $i++;
}
echo "</table>";
echo "<hr><a href='halaman-utama.php'>Kembali ke halaman utama</a><br>";//hyperlink kembali e halaman utama
?>