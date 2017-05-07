<DOCTYPE HTML>
<html>
<head>
<p> KALKULATOR</p>
</head>

<body>
<form method="get">
<input type="text" name="liczba1" /><br />
<input type="radio" name="znak" value="+" /> + 
<input type="radio" name="znak" value="-" /> - 
<input type="radio" name="znak" value="*" /> * 
<input type="radio" name="znak" value="/" /> / <br/>
<input type="text" name="liczba2" /><br />
<input type="submit" value="==" /><br />
</form>

<?php
$liczba1 = $_GET['liczba1'];
$liczba2 = $_GET['liczba2'];
$znak = $_GET['znak'];
switch($znak) {
  case "+":
    echo $liczba1 + $liczba2; 
    break;
  case "-":
    echo $liczba1 - $liczba2; 
    break;
  case "*":
    echo $liczba1 * $liczba2; 
    break;
  case "/":
    echo $liczba1 / $liczba2; 
    break; 
}
?> 
<br />


</body>


</html>
