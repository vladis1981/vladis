<?php
if($_POST["textbox1"]=="Juanolas"&& $_POST["textbox2"]=="orale")
{ session_start();
   $_SESSION["usuario"]=$_POST["textbox1"];
header("Location: sesion3.php");
}
else
{
echo"Usuario invalido";
}
?>