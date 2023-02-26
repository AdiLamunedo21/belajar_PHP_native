<?php
  $zoo = [
          "ayam" => ["kampung","buras","kate","hutan"],
          "kucing" => ["persia","himalaya","anggora","kampung","hutan"]
         ];
  echo count($zoo); // 2
  echo "<br>";
  echo count($zoo,COUNT_RECURSIVE); // 11
