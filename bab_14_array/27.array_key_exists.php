<?php
  $nilai = array("anton" => 82, "rudy" => 81,"rini" => 95);

  $cek = array_key_exists("rudy",$nilai);
  var_dump($cek); // bool(true)
  
  $cek = array_key_exists("joko",$nilai);
  var_dump($cek); // bool(false)
