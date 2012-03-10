<html>
<head> </head>

<body>

<?php
$id=$_POST["textbox1"];
$nombre=$_POST["textbox2"];

$instruccion="DELETE from personas where id=$id";

$enlace=Mysql_connect("localhost","root","");
mysql_select_db("ejemplo",$enlace);
mysql_query($instruccion,$enlace);
mysql_close($enlace);
echo "El registro ha sido borrado";

?>

<body>
</html>