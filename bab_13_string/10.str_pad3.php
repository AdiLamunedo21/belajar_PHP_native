<?php
  $a = "123";
  echo str_pad($a,8,'0',STR_PAD_LEFT)."<br>"  // '00000123'

  $a = "12345";
  echo str_pad($a,8,'0',STR_PAD_LEFT)."<br>"  // '00012345'

  $a = "12345789";
  echo str_pad($a,8,'0',STR_PAD_LEFT);        // '12345789'
