<?php
  $siswa = array("andi", "gina", "joko", "santi", "rini", "rika", "joy");
  $key_siswa = array_rand($siswa);

  echo $key_siswa."<br>";     // 5
  echo $siswa[$key_siswa];    // rika
