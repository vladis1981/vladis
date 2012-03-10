<html>
<head> </head>

<body>

<?php
$id=$_POST["textbox1"];
$nombre=$_POST["textbox2"];
if($id=="" || $nombre=="")
{
echo "Error";
}
else
{
$instruccion="INSERT INTO personas VALUES(".$id.",'".$nombre."')";
$enlace=Mysql_connect("localhost","root","");
mysql_select_db("ejemplo",$enlace);
mysql_query($instruccion,$enlace);
mysql_close($enlace);
echo "Los datos fueron almacenados correctamente";
}
?>

<body>
</html>