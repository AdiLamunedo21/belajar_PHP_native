<?php
 $siswa = [ "siswa1" => array ("Joko","Medan","12 Agustus 1998"),
            "siswa2" => array ("Rini","Jakarta","22 Juli 1999"),
            "siswa3" => array ("Alex","Bandung","9 Januari 2000"),
            "siswa4" => array ("Joy","Samarinda","4 Maret 1998"),
            "siswa5" => array ("Santi","Palembang","12 Desember 1999") ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 echo $siswa["siswa1"][0];  // Joko
 echo $siswa["siswa1"][1];  // Medan
 echo $siswa["siswa1"][2];  // 12 Agustus 1998
?>
</body>
</html>
