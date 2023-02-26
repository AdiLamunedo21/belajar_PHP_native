<?php
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  $key_siswa = array_rand($siswa,2);

  print_r($key_siswa); // Array ( [0] => 3 [1] => 4 )

  echo $siswa[$key_siswa[0]];    // santi
  echo "<br>";
  echo $siswa[$key_siswa[1]];    // rini 
