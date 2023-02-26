<?php
  $siswa = array("siswa1", "siswa20", "siswa2", "siswa11", "siswa5");
  sort($siswa, SORT_NATURAL);
  print_r($siswa);
  // Array ( [0] => siswa1 [1] => siswa2 [2] => siswa5
  //         [3] => siswa11 [4] => siswa20 )
