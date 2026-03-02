<?php

// Input
$kartuMember = true; // true = punya kartu, false = tidak punya
$totalBelanja = 334000;

// Proses
$diskon = 0;

if ($kartuMember == true) {
    
    if ($totalBelanja > 500000) {
        $diskon = 0.15 * $totalBelanja;
    } elseif ($totalBelanja > 100000) {
        $diskon = 0.10 * $totalBelanja;
    }

} else {

    if ($totalBelanja > 100000) {
        $diskon = 0.05 * $totalBelanja;
    }

}

$totalBayar = $totalBelanja - $diskon;

// Output
echo "Apakah ada kartu member: ";
echo $kartuMember ? "Ya" : "Tidak";
echo "<br>";

echo "Total Belanja: Rp " . number_format($totalBelanja,0,",",".");
echo "<br>";

echo "Diskon: Rp " . number_format($diskon,0,",",".");
echo "<br>";

echo "Total Bayar: Rp " . number_format($totalBayar,0,",",".");

?>