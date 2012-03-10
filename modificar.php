<html>
<head> </head>

<body>

<?php
$id=$_POST["textbox1"];
$nombre=$_POST["textbox2"];

$instruccion="UPDATE personas SET nombre='".$nombre."' where id=".$id;

$enlace=Mysql_connect("localhost","root","");
mysql_select_db("ejemplo",$enlace);
mysql_query($instruccion,$enlace);
mysql_close($enlace);
echo "Registro modificado";

?>

<body>
</html>