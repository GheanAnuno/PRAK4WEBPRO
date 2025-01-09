<?php
echo "Bilangan kelipatan 3 (0-100):<br>";
for ($I = 0; $I <= 100; $I++) {
    if ($I % 3 == 0) { // Memeriksa apakah $I adalah kelipatan 3
        echo "$I<br>"; // Menampilkan kelipatan 3
    }
}
?>