<?php
// Array nama-nama hari
$nama_hari = array(
    "Minggu" => 1,
    "Senin" => 2,
    "Selasa" => 3,
    "Rabu" => 4,
    "Kamis" => 5,
    "Jumat" => 6,
    "Sabtu" => 7
);

// Menampilkan nama-nama hari
foreach ($nama_hari as $hari => $urutan) {
    echo "Hari ke-$urutan: $hari <br>";
}
?>
