<?php
error_reporting(0);

$conexion = mysqli_connect("b3ugov4mt1b8ivqvs1xk-mysql.services.clever-cloud.com","uk87761vk3hhpkqn", "4XFOhfpZbXm56SrDbknv", "b3ugov4mt1b8ivqvs1xk");

if (!$conexion){
exit("Error al intentar contectarse al servidor MysQl.");
}

$fecha = $_POST["fecha"];
$usuario = $_POST["usuario"];
$cantidad = $_POST["cantidad"];
$magnitud = $_POST["magnitud"];
$unitario = $_POST["unitario"];
$porcentaje = $_POST["porcentaje"];
$total = $_POST["total"];

if(empty($cantidad)){
exit("Fallo en el registro, para poder registrarte debes introducir tu direccion email.");
}

$consulta = "insert into compras (fecha,usuario,cantidad,magnitud,unitario,porcentaje,total) values '$fecha','$usuario','$cantidad','$magnitud','$unitario','$porcentaje','$total')";
$resultado = mysqli_query($conexion,$consulta);

$num = mysqli_affected_rows($conexion);
if ($num>0){
echo "Su registro se ha completado. Gracias!";
}
else{
echo "Error! su registro no se ha podido completar.";
}

mysqli_close($conexion);
?>
