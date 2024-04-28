<?php

function hitungPecahan($jumlah) {
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    $jumlah_pecahan = array();

    foreach ($pecahan as $nilai) {
        $jumlah_pecahan[$nilai] = floor($jumlah / $nilai);
        $jumlah %= $nilai;
    }

    return $jumlah_pecahan;
}

$jumlah_uang = 1387500;
$pecahan_diperoleh = hitungPecahan($jumlah_uang);

echo "Nominal yang di ambil : Rp. " . number_format($jumlah_uang) . "<br><br>";
foreach ($pecahan_diperoleh as $nilai => $jumlah) {
    echo "Nominal Rp. " . number_format($nilai) . " : " . $jumlah . " lembar<br>";
}
?>
