<?php
  $a = "___1234_";
  echo trim($a,'_')."<br>";     // '1234';
  echo ltrim($a,'_')."<br>";    // '1234_';
  echo rtrim($a,'_')."<br>";    // '___1234 ';

  $b = "##-#Belajar PHP---##--";
  echo trim($b,'#-')."<br>";    // 'Belajar PHP';
  echo ltrim($b,'#-')."<br>";   // 'Belajar PHP---##--';
  echo rtrim($b,'#-')."<br>";   // '##-#Belajar PHP ';
