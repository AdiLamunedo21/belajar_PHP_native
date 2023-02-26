<?php
  $siswa = array("andi", "gina", "joko", "santi");

  $satu_siswa = array_pop($siswa);
  echo $satu_siswa; // santi 
  print_r($siswa);  // Array ( [0] => andi [1] => gina [2] => joko )
