<?php
  $a = " abcd   ";
  echo strlen($a)."<br>";        // 8

  $trim_a = trim($a);
  echo $trim_a."<br>";           // 'abcd';
  echo strlen($trim_a)."<br>";   // 4

  $ltrim_a = ltrim($a);
  echo $ltrim_a."<br>";          // 'abcd   ';
  echo strlen($ltrim_a)."<br>";  // 7

  $rtrim_a = rtrim($a);
  echo $rtrim_a."<br>";          // ' abcd';
  echo strlen($rtrim_a);         // 5
