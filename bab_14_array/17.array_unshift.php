<?php
  $siswa = array("andi", "gina", "joko", "santi");
  $var = array_unshift($siswa,"rani");

  echo $var; // 5
  print_r($siswa);
  // Array ( [0] => rani [1] => andi [2] => gina [3] => joko [4] => santi )
