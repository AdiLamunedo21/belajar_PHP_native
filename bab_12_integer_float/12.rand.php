<?php
  // menampilkan nilai maksimal fungsi rand() jika tanpa argumen
  echo getrandmax()."<br>";    // 2147483647
  echo rand()."<br>";          // 1378300794
  echo rand()."<br>";          // 1625543396

  // angka acak dengan batas nilai
  echo rand(0,1)."<br>";       // 1
  echo rand(0,100)."<br>";     // 89

  //untuk membuat angka acak pecahan
  echo rand(0,100)/100;        // 0.57
