<?php
    $nama = "Ajeng";
    $pesan = "Selamat belajar PHP";

    echo $pesan . ", " . $nama . "!";
    echo "<br>";

    $flower = array("Tulip", "Mawar", "Kantil", "Melati");
    echo "Bunga pilihan: " . $flower[1];
    echo "<br>";

    $x = 10;
    $y = 5;

    $x = $x + $y;
    echo "Hasil penjumlahan: " . $x;
    echo "<br>";

    $x += $y;
    echo "Hasil penjumlahan berikutnya: " . $x;
    echo "<br>";

    $kalimat = "Belajar PHP";
    $kalimat = $kalimat . " sangat menarik";
    echo $kalimat;
    echo "<br>";

    $kalimat .= " untuk membuat website";
    echo $kalimat;
?>