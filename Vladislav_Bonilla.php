<html>

<head></head>

<body>

<?php

$Adultos=$_POST["textbox1"];
$Ni�os=$_POST["textbox2"];

if($Adultos=="" || $Ni�os=="")
{
echo "No se proporciono";
}
else
{
echo "El numero de Adultos es".$_POST["textbox1"];"<br>";
echo "El numero de ni�os es".$_POST["textbox2"];"<br>";
echo "El total es";<"br">
$Total=$_POST($_POST["textbox1"]*60)+($_POST["textbox2"]*35);
echo "$Total"
"<br>";
echo "Fecha de la transaccion";
echo date("d/m/y,h/n");
}
?>
<a href="Vladislav_Bonilla.php">volver</a>
</body>

</html>