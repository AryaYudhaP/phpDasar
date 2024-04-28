<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka</h2>
    <form method="post" action="">
        Masukkan angka (1-9):
        <input type="text" name="angka">
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Fungsi untuk konversi angka menjadi huruf
    function konversiTerbilang($angka) {
        switch ($angka) {
            case 1:
                return "satu";
                break;
            case 2:
                return "dua";
                break;
            case 3:
                return "tiga";
                break;
            case 4:
                return "empat";
                break;
            case 5:
                return "lima";
                break;
            case 6:
                return "enam";
                break;
            case 7:
                return "tujuh";
                break;
            case 8:
                return "delapan";
                break;
            case 9:
                return "sembilan";
                break;
            default:
                return "Angka tidak valid";
        }
    }

    // Proses konversi jika tombol submit ditekan
    if (isset($_POST['submit'])) {
        // Ambil angka dari input
        $angka = $_POST['angka'];

        // Validasi input
        if (!is_numeric($angka) || $angka < 1 || $angka > 9) {
            echo "<p>Maaf, angka yang dimasukkan harus antara 1 sampai 9.</p>";
        } else {
            // Konversi angka menjadi huruf
            $terbilang = konversiTerbilang($angka);
            echo "<p>Angka $angka Dikonversi menjadi \"$terbilang\".</p>";
        }
    }
    ?>
</body>
</html>
