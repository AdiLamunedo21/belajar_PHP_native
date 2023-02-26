<?php
  $mahasiswa = [ array("01", "Joko", "Akuntansi"),
                 array("02", "Nona", "Psikologi"),
                 array("03", "Lestya", "Matematika"),
                 array("04", "Tasya", "Kedokteran") ];

  while(list($no, $nama, $jurusan) = array_shift($mahasiswa)) {
    echo "$no $nama $jurusan <br>";
  }
