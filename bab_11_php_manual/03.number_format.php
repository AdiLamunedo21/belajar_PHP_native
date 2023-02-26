<?php
  echo number_format(12500)."<br>";              // 12,500
  echo number_format(3250400)."<br>";            // 3,250,400
  echo number_format(3250400,2)."<br>";          // 3,250,400.00
  echo number_format(3.3333333,3)."<br>";        // 3.333

  echo number_format(3250400,2,",",".")."<br>";  // 3.250.400,00
  echo number_format(3250400,2,":"," ")."<br>";  // 3 250 400:00
  
