<?php

function pangkat($nilai_dasar, $nilai_pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $nilai_pangkat; $i++){
      $hasil = $hasil * $nilai_dasar;
    }
    return $hasil;
}

echo pangkat(5,3)."<br>"; // 125

echo pangkat(nilai_dasar:7,nilai_pangkat:2)."<br>";  // 49
echo pangkat(nilai_pangkat:3,nilai_dasar:4)."<br>";  // 64
