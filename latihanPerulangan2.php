<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil atau Genap</title>
</head>
<body>
    <h2>Ganjil atau Genap</h2>

    <?php
    // Array angka
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    // Menampilkan nilai angka beserta status ganjil atau genap
    foreach ($angka as $nilai) {
        if ($nilai % 2 == 0) {
            echo "Nomor : $nilai  Genap<br>";
        } else {
            echo "Nomor : $nilai  Ganjil<br>";
        }
    }
    ?>
</body>
</html>