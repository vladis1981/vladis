<html>
<head> </head>

<body>
<table>
<?php
$mensualidad=1;
$importe=$_POST["textbox3"];
$resta=$_POST["textbox1"] * $_POST["textbox2"];

echo "<tr font bgcolor='blue' color='white'>";
echo "<td><font color='white'>Numero</font></td>";
echo "<td><font color='white'>Mensualidad</font></td>";
echo "<td><font color='white'>Restante</font></td>";
echo "</tr>";


while ($resta>=0)
{
if($mensualidad % 2 == 0)
{
echo "<td> font bgcolor='green' color='white'>";
}
else
{
echo "<td> font bgcolor='white' color='black'>";
}

if($resta > 500)
{
echo "<td> <font color='red'$resta></font></td>";
}
else
{
echo "<td> <gfont color='black'$resta></font></td>";
}

echo "<td><font color='black'>$mensualidad</font></td>";
echo "<td><font color='black'>$importe</font></td>";
echo "<td><font color='black'>$resta</font></td>";
echo "</tr>";
$resta=$resta-$importe;
$mensualidad++;
}

?>
</table>
<body>
</html>
