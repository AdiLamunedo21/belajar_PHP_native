<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $alamat_link = ["home.php", "Kategori.php", "artikel.php", "shop.php",
                  "login.php"];

  $judul_link = ["Link ke halaman Home", "Link ke halaman Kategori",
                 "Link ke halaman Artikel", "Link ke halaman Shop",
                 "Link ke halaman Login"];

  echo "<a href=\"$alamat_link[0]\">$judul_link[0]</a>";
?>
</body>
</html>
