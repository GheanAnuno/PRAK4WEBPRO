<?php
function nilai() {
    echo "<h2>Praktik 3: </h2>";
    echo "<br>";

    $matkul = array(
        "Pemrograman Web",
        "Desain Analisis Algoritma",
        "Analisis Perancangan Sistem",
        "Rekayasa Perangkat Lunak",
        "Jaringan Komputer"
    );

    echo "Nama Mata Kuliah (sebelum diurutkan)<br>";
    foreach ($matkul as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    // Mengurutkan array
    sort($matkul);

    echo "<br>";
    echo "Nama Mata Kuliah (setelah diurutkan)<br>";
    foreach ($matkul as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
}

// Memanggil fungsi
nilai();
?>