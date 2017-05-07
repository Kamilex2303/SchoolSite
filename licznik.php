<!DOCTYPE html>
<html>
<head>
</head>
<p>LICZNIK</p>
<body>
<?php
  $plik = fopen("licznik.txt","r");
  $licznik = fgets($plik);
  fclose($plik);
  $licznik++;
  
  $plik = fopen("licznik.txt","w");
  fwrite($plik, $licznik);
  fclose($plik);
  echo "Licznik odwiedzin: $licznik";
?>
</body>

</html>
