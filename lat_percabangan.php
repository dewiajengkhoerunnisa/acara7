<?php
    $nama = "Ajeng";
    $nilai = 85;
    $kehadiran = 90;

    echo "<h3>Program Penilaian Sederhana</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Kehadiran: " . $kehadiran . "%<br><br>";

    if ($nilai >= 90 || $kehadiran >= 95) {
        echo "Predikat: Sangat Baik";
    } elseif ($nilai >= 75) {
        echo "Predikat: Baik";
    } else {
        echo "Predikat: Perlu Ditingkatkan";
    }

    echo "<br><br>Program selesai dijalankan.";
?>