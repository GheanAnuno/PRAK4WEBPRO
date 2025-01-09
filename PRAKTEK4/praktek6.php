<html>
<head>
    <title>Praktik 2</title>
</head>
<body>
<table border="1">
<tr>
    <td>Nama</td>
    <td>Jurusan</td>
    <td>Jenis Kelamin</td>
    <td>Usia</td> <!-- Menambahkan kolom untuk usia -->
</tr>
<?php
    $mahasiswa = array(
        array("Fitri", "Teknik Informatika", "Perempuan", 20),
        array("Salam", "Sistem Komputer", "Laki-laki", 20),
        array("Vina", "Bahasa Inggris", "Perempuan", 21),
        array("Rudi", "Agribisnis", "Laki-laki", 20),
        array("Wati", "Manajemen", "Perempuan", 24)
    );

    // Menggunakan count() untuk jumlah baris
    for ($rows = 0; $rows < count($mahasiswa); $rows++) {
        echo "<tr>";
        for ($col = 0; $col < count($mahasiswa[$rows]); $col++) {
            echo "<td>" . $mahasiswa[$rows][$col] . "</td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>