<!DOCTYPE html>
<head>
</head>

<body>
<?php 
if (isset($_GET['Click'])){
	
if(isset($_COOKIE['time']))
{
echo " Klikasz za szybko !  "; 
}
else
{
setcookie("time", $_GET['Click'], time() + 1, "/");
$fp=fopen("click.txt","r"); 
$dane=fgets($fp); 
$dane++; 
fclose($fp); 
$fp=fopen("click.txt","w"); 
fwrite($fp,$dane); 
fclose($fp); 
echo "Licznik : $dane ";
}
}
?>

<form>
<button type="submit" name="Click">Click</button><br />
</form>

</body>

</html>
