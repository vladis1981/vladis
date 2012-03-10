<?php

session_start();

if($_POST["opcion"]=="Refresco")
{
$_SESSION["Refresco"]=$_POST["textbox1"];
}

if($_POST["opcion"]=="Papas")
{
$_SESSION["Papas"]=$_POST["textbox1"];
}

if($_POST["opcion"]=="Galletas")
{
$_SESSION["Galletas"]=$_POST["textbox1"];
}

if($_POST["opcion"]=="Paleta")
{
$_SESSION["Paleta"]=$_POST["textbox1"];
}

if($_POST["opcion"]=="Agua")
{
$_SESSION["Agua"]=$_POST["textbox1"];
}

echo"Refresco".$_SESSION["Refresco"].$_SESSION["Refresco"] * 5;

echo"Papas".$_SESSION["Papas"].$_SESSION["Papas"] * 7;

echo"Galletas".$_SESSION["Galletas"].$_SESSION["Galletas"] * 6;

echo"Paleta".$_SESSION["Paleta"].$_SESSION["Paleta"] * 15;

echo"Agua".$_SESSION["Agua"].$_SESSION["Agua"] * 8;

echo"Total".$_SESSION["Refresco"]+$_SESSION["Papas"]+$_SESSION["Galletas"]+$_SESSION["Paleta"]+$_SESSION["Agua"];

echo '<a href="carrito.html">'."volver".'</a>';

?>
