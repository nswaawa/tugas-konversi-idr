<?php

function konversiKeIDR($nominal, $mataUang) {

    // 1. Pengecekan nominal
    if ($nominal <= 0) {
        return "Nominal harus lebih dari 0!";
    } else {

        // 2. Konversi mata uang
        switch ($mataUang) {
            case "USD":
                $hasil = $nominal * 17884;
                break;

            case "SGD":
                $hasil = $nominal * 13500;
                break;

            case "JPY":
                $hasil = $nominal * 115;
                break;

            default:
                return "Mata uang tidak dikenali!";
        }

        // 3. Return hasil
        return "Rp " . $hasil;
    }
}

// Contoh test output
$usd = 100;

echo konversiKeIDR($usd, "USD");

?>