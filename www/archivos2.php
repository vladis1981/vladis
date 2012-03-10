<html>
<head> </head>

<body>

<?php
$nombre=$_POST["textbox1"];
if($_POST["opcion"]=="crear")
{
if(file_exists($nombre))
echo "El fichero $nombre existe";
else
{
 mkdir($nombre);   
}

}
if($_POST["opcion"]=="borrar")
{
rmdir($nombre);
}
?>

</form>
<body>
</html>