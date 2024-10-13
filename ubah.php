<?php

$x="penduduk.txt";//pemberian nama untuk menampung sementara file penduduk.txt
define('BK', $x);

$database = file(BK, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$i = 0;//file pertama dimulai dari nol


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editData'])) {
    $editIndex = $_POST['editData'];//memosting file pengeditan data

    
    $editData = explode("|", $database[$editIndex]);
    $editNama = $editData[0];
    $editTanggal = $editData[1];
    $editAlamat = $editData[2];

    
    echo "<form method='POST'>";//mencetak proses eddit nama,tanggal,dan alamat
    echo "<input type='hidden' name='editIndex' value='$editIndex'>";
    echo "<label for='editNama'>Nama:</label>";
    echo "<input type='text' name='editNama' value='$editNama'><br><br>";
    echo "<label for='editTanggal'>Tanggal:</label>";
    echo "<input type='date' name='editTanggal' value='$editTanggal'><br><br>";
    echo "<label for='editAlamat'>Alamat:</label>";
    echo "<textarea name='editAlamat' value='$editAlamat' cols='50' rows='3'></textarea><br><br>";
    

    echo "<input type='submit' value='Simpan Perubahan'>";//button penyimpanan perubahan
    echo "</form>";
} else {
  
    echo "<table border='1'>";//border output nama,tanggal lahir,dan alamat
    
            echo "<tr>";
            echo "<td>Nama</td>";
            echo  "<td>Tgl lahir</td>";
            echo  "<td>Alamat</td>";
            echo  " </tr>";
    
    foreach ($database as $data) {//pemberian nama istilah dan pemanggilan data dengan mana istilah
        $exp = explode("|", $data);
        if (isset($exp[1])) {
            $nama = $exp[0];
            $tanggal = $exp[1];
            $alamat = $exp[2];
            
            echo "<tr>";
            echo "<td>$nama</td>";
            echo "<td>$tanggal</td>";
            echo "<td>$alamat</td>";
            echo "<td><form method='POST'><input type='hidden' name='editData' value='$i'><input type='submit' value='Edit'></form></td>";
            echo "</tr>";
        }
        $i++;
    }
    echo "</table>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editIndex'])) {
    $editIndex = $_POST['editIndex'];
    $editNama = $_POST['editNama'];
    $editTanggal = $_POST['editTanggal'];
    $editAlamat = $_POST['editAlamat'];

    
    $newData = "$editNama|$editTanggal|$editAlamat";

    
    $database[$editIndex] = $newData;
    file_put_contents(BK, implode("\n", $database));

    
    
}
echo "<hr><a href='halaman-utama.php'>Kembali ke halaman utama</a><br>";//button kembali ke halaman utama
?>