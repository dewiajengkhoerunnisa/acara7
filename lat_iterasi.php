<?php
    $colors = array("Merah", "Kuning", "Hitam", "Pink");

    echo "<h3>Daftar Warna Favorit</h3>";

    echo "<b>1. Menggunakan Foreach</b><br>";
    foreach ($colors as $value) {
        echo "- " . $value . "<br>";
    }

    echo "<br><b>2. Menggunakan For</b><br>";
    for ($i = 0; $i < count($colors); $i++) {
        echo ($i + 1) . ". " . $colors[$i] . "<br>";
    }

    echo "<br><b>3. Mengulang Daftar Warna</b><br>";
    for ($i = 0; $i < 8; $i++) {
        echo $colors[$i % count($colors)] . "<br>";
    }

    echo "<br>Program selesai dijalankan.";
?>