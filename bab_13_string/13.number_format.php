<?php
  echo number_format(39999.99,0,',','.')."<br>";   // 40.000
  echo number_format(39999.99,2,',','.')."<br>";   // 39.999,99
  echo number_format(39999.99,4,',','.')."<br>";   // 39.999,9900
  echo number_format(1499999,2,',','.')."<br>";    // 1.499.999,00
  echo number_format(135000,2,' ',' ')."<br>";     // 135 000 00
