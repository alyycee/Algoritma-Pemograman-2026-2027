<?php
$harga  = 250_000;
$qty    = 1; 
$diskon = 0.15;
$pajak  = 0.10;

$total      = $harga * $qty;
$setelah_diskon = $total - ($total * $diskon);
$pajak_rp   = $setelah_diskon * $pajak; 
$total_bayar = $setelah_diskon + $pajak_rp; 

$ongkir = $total_bayar >= 500_000 ? "Gratis" : "Rp 20,000";

echo "Total belanja = Rp " . number_format($total) . "\n";
echo "Setelah diskon = Rp " . number_format($setelah_diskon) . "\n";
echo "Pajak (10%) = Rp " . number_format($pajak_rp) . "\n";
echo "Total Bayar = Rp " . number_format($total_bayar) . "\n";
echo "Ongkir = " . $ongkir;