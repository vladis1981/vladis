<html>
<head> </head>

<body>

<?php
$archivos = opendir (".");
$nombre = true;
while ($nombre)
{
  $nombre = readdir ($archivos);
  echo $nombre."<br>";
}

closedir($archivos);
?>

<body>
</html>