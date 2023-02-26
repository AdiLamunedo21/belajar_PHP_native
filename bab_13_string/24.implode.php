<?php
  $array_sumber = array("HTML","CSS","PHP","MySQL","JavaScript");

  $string_hasil=implode($array_sumber);
  echo $string_hasil;   // HTMLCSSPHPMySQLJavaScript

  echo "<br>";

  $string_hasil=implode("#",$array_sumber);
  echo $string_hasil;   // HTML#CSS#PHP#MySQL#JavaScript
