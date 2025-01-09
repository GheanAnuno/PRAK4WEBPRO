<?php

function judul() {
    echo "<h2>Praktik 2</h2>";
}

judul();

$matakuliah = array(
    "Pemrograman Web",
    "Desain Analisis Algoritma",
    "Analisa Perancangan Sistem",
    "Rekayasa Perangkat Lunak",
    "Jaringan Komputer"
);

echo "Nama Mata Kuliah Teknik Informatika:<br>";
for ($i = 0; $i < count($matakuliah); $i++) {
    echo $matakuliah[$i] . "<br>";
}

$dosen = array(
    "Pemrograman Web" => "Nadi Pandu Husna",
    "Desain Analisis Algoritma" => "Sri Leswari",
    "Analisa Perancangan Sistem" => "Kurnia Kartika",
    "Rekayasa Perangkat Lunak" => "Hidayah Hartani Ismi",
    "Jaringan Komputer" => "Chusnul"
);

echo "Daftar Dosen TI Unisda Siliw <br>";
foreach ($dosen as $matkul => $nama) {
    echo $matkul . ": " . $nama . "<br>";
}

?>