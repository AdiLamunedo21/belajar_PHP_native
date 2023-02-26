<?php
  $hari = 4;

  $hasil = match ($hari) {
    1 => "Hari Senin",
    2 => "Hari Selasa",
    3 => "Hari Rabu",
    4 => "Hari Kamis",
    5 => "Hari Jumat",
    6 => "Hari Sabtu",
    7 => "Hari Minggu",
  };

echo $hasil;  // Hari Kamis