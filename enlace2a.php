<html>
<head> </head>

<body>
<a href = 'enlace3a.php?archivo=<?php echo $_REQUEST["archivo"];?>'>Borrar</a><br><br>
<img src='<?php echo $_REQUEST["archivo"];?>'>
<br>

<?php
echo "Escribible ";
if(is_writeable($_REQUEST ["archivo"]))
{
echo "si<br>";
}
else
{
echo "no<br>";
}
echo "Leible ";
if(is_readable($_REQUEST["archivo"]))
{
echo "si<br>";
}
else
{
echo "no<br>";
}
echo"Ejecutable ";
if(is_executable($_REQUEST ["archivo"]))
{
echo"si<br>";
}
else
{
echo"no<br>";
}
echo"Fecha de acceso ";
echo date ("d/m/y",fileatime($_REQUEST ["archivo"]));
echo "<br>";
echo"Fecha de creacion ";
echo date ("d/m/y", filectime($_REQUEST ["archivo"]));
echo "<br>";
echo"Fecha de modoficacion ";
echo date ("d/m/y", filemtime($_REQUEST ["archivo"]));
echo "<br>";


?>
<body>
</html>
