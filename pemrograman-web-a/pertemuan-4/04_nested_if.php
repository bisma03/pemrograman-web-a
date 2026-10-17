<?php declare(strict_types=1);

$sudahLogin = true;
$peran = 'admin';

if ($sudahLogin) {
    if ($peran === 'admin') {
        echo "Selamat datang, Admin. Akses penuh.<br>\n";
    } elseif ($peran === 'operator') {
        echo "Selamat datang, Operator. Akses terbatas.<br>\n";
    } else {
        echo "Peran tidak dikenal.<br>\n";
    }
} else {
    echo "Silakan login terlebih dahulu.<br>\n";
}

// Alternatif datar dengan &&
$terverifikasi = true;
$saldo = 120000;

if ($sudahLogin && $terverifikasi && $saldo >= 100000) {
    echo "Transaksi besar diizinkan.<br>\n";
}
