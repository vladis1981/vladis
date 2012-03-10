<html>

<head></head>

<body>

<?php
if(move_uploaded_file($_FILES["archivo"]["tmp_name"],$_FILES["archivo"]["name"])==true)
{
 echo"El archivo ha sido cargado correctamente";
 }
else
{
 echo"Ocurrio un error al subir el fichero, No pudo guardarse.";
 }
?>
</body>

</html>
