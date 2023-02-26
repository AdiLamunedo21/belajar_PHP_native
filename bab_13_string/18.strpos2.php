<?php
  $kalimat = "Belajar PHP dari PHP Uncover";
  $cari = "PHP";
  echo strpos($kalimat,$cari,9);    // 17
  echo "<br>";
  var_dump(strpos($kalimat,"CSS")); // bool(false)
