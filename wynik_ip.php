<!DOCTYPE html>
<head>
<title>bez nazwy</title>
</head>

<body>
<?php
$imie = $_GET['imie'];
$ip = $_SERVER['REMOTE_ADDR'];
$tab_ip = explode(".",$ip);
if(($tab_ip[0] == '153') && ($tab_ip[1] == '19') && ($tab_ip[2] == '5')) 
echo "Witaj $imie";
else 
echo "Logujesz sie z poza UG";	
?>
</body>

</html>
