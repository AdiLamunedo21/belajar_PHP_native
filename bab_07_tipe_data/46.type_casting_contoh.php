<?php
  $angka_int = 100;
  var_dump($angka_int);   // int(100)
  echo "<br>";

  $angka_str = (string) $angka_int;
  var_dump($angka_str);   // string(3) "100"
  echo "<br>";

  $angka_bool = (bool) $angka_int;
  var_dump($angka_bool);   // bool(true)
