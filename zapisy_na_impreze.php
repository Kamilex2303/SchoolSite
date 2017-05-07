<!DOCTYPE html>
<html>
<head>

</head>

<body>
<form>
<p>Podaj imie : </p>
<input type="text" name="imie" /> <br />
<input type="submit" name="ZAPISZ" /> <br />
</form>
<?php
  if (isset($_GET['ZAPISZ']))
  {
  $imie = $_GET['imie'];
  $plik = "zapisy_na_impreze.txt";
  file_put_contents($plik , $imie.PHP_EOL ,FILE_APPEND | LOCK_EX);
  }
  
  echo "<br/>";
  
 
  $miejsce = 1;
  $plik = fopen("zapisy_na_impreze.txt","r");
  while(!feof($plik)){
  echo $miejsce;
  echo '. ';
  echo fgets($plik)."<br/>";
  $miejsce++;
  }
  fclose($plik);
?>

</body>

</html>
