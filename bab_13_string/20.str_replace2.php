<?php
  $kalimat = "Belajar PHP dari PHP Uncover";
  $cari = "PHP";
  $ganti = "CSS";
  $hasil = 0;

  echo str_replace($cari,$ganti,$kalimat,$hasil); // Belajar CSS dari CSS Uncover
  echo "<br>";
  echo $hasil; // 2
