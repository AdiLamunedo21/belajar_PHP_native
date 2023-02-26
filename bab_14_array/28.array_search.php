<?php
  $siswa = array("andi", "gina", "joko", "santi");

  $key = array_search("joko",$siswa);
  var_dump($key); // int(2)
  
  echo "<br>";

  $key = array_search("alex",$siswa);
  var_dump($key); // bool(false)
