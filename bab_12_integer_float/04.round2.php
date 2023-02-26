<?php
  echo round(9.5, 0, PHP_ROUND_HALF_UP)."<br>";   // 10
  echo round(9.5, 0, PHP_ROUND_HALF_DOWN)."<br>"  // 9
  echo round(9.5, 0, PHP_ROUND_HALF_EVEN)."<br>"  // 10
  echo round(9.5, 0, PHP_ROUND_HALF_ODD)."<br>"   // 9

  echo round(8.5, 0, PHP_ROUND_HALF_UP)."<br>"    // 9
  echo round(8.5, 0, PHP_ROUND_HALF_DOWN)."<br>"  // 8
  echo round(8.5, 0, PHP_ROUND_HALF_EVEN)."<br>"  // 8
  echo round(8.5, 0, PHP_ROUND_HALF_ODD)."<br>"   // 9
