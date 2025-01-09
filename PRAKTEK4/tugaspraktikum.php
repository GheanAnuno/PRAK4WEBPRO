<html>
<head>
    <title>Operasi Matriks 2x2</title>
</head>
<body>
    <h2>Operasi Matriks 2x2</h2>

    <h3>Input Matriks Pertama</h3>
    <form method="post">
        <label for="a11">A[1][1]:</label>
        <input type="number" name="a11" required>
        <label for="a12">A[1][2]:</label>
        <input type="number" name="a12" required><br>

        <label for="a21">A[2][1]:</label>
        <input type="number" name="a21" required>
        <label for="a22">A[2][2]:</label>
        <input type="number" name="a22" required><br>

        <h3>Input Matriks Kedua</h3>
        <label for="b11">B[1][1]:</label>
        <input type="number" name="b11" required>
        <label for="b12">B[1][2]:</label>
        <input type="number" name="b12" required><br>

        <label for="b21">B[2][1]:</label>
        <input type="number" name="b21" required>
        <label for="b22">B[2][2]:</label>
        <input type="number" name="b22" required><br>

        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Matriks Pertama
        $A = array(
            array($_POST['a11'], $_POST['a12']),
            array($_POST['a21'], $_POST['a22'])
        );

        // Matriks Kedua
        $B = array(
            array($_POST['b11'], $_POST['b12']),
            array($_POST['b21'], $_POST['b22'])
        );

        // Operasi Perkalian Matriks
        function multiplyMatrices($A, $B) {
            $result = array();
            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 2; $j++) {
                    $result[$i][$j] = $A[$i][0] * $B[0][$j] + $A[$i][1] * $B[1][$j];
                }
            }
            return $result;
        }

        // Menghitung Determinan
        function determinant($matrix) {
            return $matrix[0][0] * $matrix[1][1] - $matrix[0][1] * $matrix[1][0];
        }

        // Hasil Perkalian
        $result = multiplyMatrices($A, $B);
        echo "<h3>Hasil Perkalian Matriks:</h3>";
        echo "<table border='1'>";
        echo "<tr><td>" . $result[0][0] . "</td><td>" . $result[0][1] . "</td></tr>";
        echo "<tr><td>" . $result[1][0] . "</td><td>" . $result[1][1] . "</td></tr>";
        echo "</table>";

        // Menghitung Determinan Matriks Pertama
        $detA = determinant($A);
        echo "<h3>Determinan Matriks Pertama: $detA</h3>";

        // Menghitung Determinan Matriks Kedua
        $detB = determinant($B);
        echo "<h3>Determinan Matriks Kedua: $detB</h3>";
    }
    ?>
</body>
</html>