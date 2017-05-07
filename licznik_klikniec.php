<?php
  function wyswietlKlikniecia(){
    $file = @fopen("count.txt","c+");
    fscanf($file,"%d",$liczba);
    rewind($file);
    fclose($file);
    echo $liczba;
  }
 
  function dodajKlik(){
    $file = @fopen("count.txt","c+");
    fscanf($file,"%d",$liczba);
    $liczba = $liczba + 1;
    rewind($file);
    fputs($file,$liczba);
    fclose($file);
  }
 ?>
 
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="licznik.css">
  <title>Licznik</title>
</head>
 
<body>
  <form action="" method="post">
 
 
      <input type="submit" value="Kliknij" name="button" />
        Licznik kliknięć:
        <?php
              if (isset($_POST["button"]) AND isset($_COOKIE["ciasteczko"])) {
                wyswietlKlikniecia();
                echo "<br><br>Możesz kliknąć tylko raz na 3 sekundy!!!";
              }
              elseif (isset($_POST["button"])) {
                setcookie("ciasteczko", $_POST["button"], time() + 1, "/");
                dodajKlik();
                wyswietlKlikniecia();
              }
        ?>
 </form>
</body>
</html>
