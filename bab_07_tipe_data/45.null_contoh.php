<?php
  $var1 = 0;
  var_dump($var1); // int(0)

  $var2 = '';
  var_dump($var2); // string(0) ""

  $var3 = null;
  var_dump($var3); // NULL

  $var4;
  var_dump($var4); // NULL + Notice: Undefined variable: var4

  $var5 = 100;
  unset($var5);
  var_dump($var5); // NULL + Notice: Undefined variable: var5
