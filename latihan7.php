<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . "<br>";

// tampilkan Mangga
echo "Saya suka " . $namaBuah[1] . "<br>";
// tampilkan Jeruk
echo "Saya suka " . $namaBuah[2] . "<br>";
// tampilkan Apel
echo "Saya suka " . $namaBuah[3] . "<br>";
// tampilkan Melon
echo "Saya suka " . $namaBuah[4] . "<br>";

// array dengan spesifik index
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "46 Tahun");
$umur['Ahmad'] = "50 Tahun";
echo "Umur Andi adalah " . $umur["Andi"] . "<br>";

// tampilkan semua umur
foreach ($umur as $nama => $nilai) {
    echo "Umur $nama adalah $nilai<br>";
}
?>