<?php
  $a = "a";
  echo str_pad($a,8,'#')."<br>";    // 'a#######'

  $a = "abc";
  echo str_pad($a,8,'#')."<br>";    // 'abc#####'

  $a = "abcde";
  echo str_pad($a,8,'#')."<br>";    // 'abcde###'

  $a = "abcdefghij";
  echo str_pad($a,8,'#');           // 'abcdefghij'
