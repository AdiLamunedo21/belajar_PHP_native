<?php
  $siswa = array("andi", "gina", "joko", "santi");

  $satu_siswa = next($siswa);
  echo $satu_siswa."<br>";       // gina

  $satu_siswa = next($siswa);
  echo $satu_siswa."<br>";       // joko

  $satu_siswa = end($siswa);
  echo $satu_siswa."<br>";       // santi

  $satu_siswa = reset($siswa); 
  echo $satu_siswa;              // andi
