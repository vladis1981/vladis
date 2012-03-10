
<?php
if(file_exists($_REQUEST["archivo"])==true)
{

unlink($_REQUEST["archivo"]);
echo"El archivo ha sido borrado";
}
else
{
echo"El archivo no existe";
}
?>
