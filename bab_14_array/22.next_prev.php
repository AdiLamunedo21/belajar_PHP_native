<?php
  $siswa = array("andi", "gina", "joko", "santi");

  $satu_siswa = current($siswa);
  echo $satu_siswa."<br>";     // andi

  $satu_siswa = next($siswa);
  echo $satu_siswa."<br>";     // gina

  $satu_siswa = next($siswa); 
  echo $satu_siswa."<br>";     // joko

  $satu_siswa = prev($siswa);
  echo $satu_siswa;            // gina
