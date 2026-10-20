<?php
$kecamatan = array("Moyudan", "Minggir", "Seyegan", "Godean", "Gamping");
$luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
$jumlah_penduduk = array(31497, 29886, 47129, 72028, 108675);

echo "<html>";
echo "<body>";
echo "<table border='1'>";
echo "<tr><th>kecamatan</th><th>luas</th><th>jumlah_penduduk</th></tr>";

for ($i = 0; $i < count($kecamatan); $i++) {
    echo "<tr>";
    echo "<td>" . $kecamatan[$i] . "</td>";
    echo "<td>" . $luas[$i] . "</td>";
    echo "<td>" . $jumlah_penduduk[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body>";
echo "</html>";
?>