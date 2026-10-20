<?php
    /*
    $i = 1;

    while ($i < 6) {
        echo $i;
        $i = $i + 1; // $i++;
    }
    */

    /*
    for ($i = 1; $i < 100; $i++) {
        echo $i . "<br>";
    }
    */

    $colors = array("red", "yellow", "black", "pink");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    for ($i = 0; $i <= 3; $i++) {
        echo $colors[$i] . "<br>";
    }

    for ($i = 0; $i <= 10; $i++) {
        echo $colors[$i % count($colors)] . "<br>";
    }
?>