<?php
  $alamat_link = ["home.php", "Kategori.php", "artikel.php", "shop.php",
                  "login.php"];

  $judul_link = ["Link ke halaman Home", "Link ke halaman Kategori",
                 "Link ke halaman Artikel", "Link ke halaman Shop",
                 "Link ke halaman Login"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  for ($i=0; $i<count($alamat_link); $i++) {
?>
  <a href="<?php echo $alamat_link[$i] ?>"><?php echo $judul_link[$i] ?></a>
  <br>
<?php
  }
?>
</body>
</html>
