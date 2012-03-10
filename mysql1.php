<html>

<head> </head>
<body>
<?php
$enlace=mysql_connect("localhost","root","");
mysql_select_db("ejemplo",$enlace);
$resultado=mysql_query("SELECT * FROM personas ORDER BY ID",$enlace);
while($renglon=mysql_fetch_row($resultado))
{
echo $renglon[0]." ".$renglon[1];

}
mysql_close($enlace);
?>
</body>
</html>
