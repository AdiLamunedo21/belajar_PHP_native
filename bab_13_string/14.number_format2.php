<?php
  $harga = 354500.89;
  $harga_format = "Rp. ".number_format($harga,2,',','.').";-";

  echo "Harga barang ini adalah $harga_format";
  // Harga barang ini adalah Rp. 354.500,89;-
