<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php
if (!isset($_SESSION)) {
  session_start();
}
if (isset($_SESSION["nombreUsuario"])) {
  $nombreUsuario = $_SESSION["nombreUsuario"] ?? '';
} else {
  echo "No ha sido posible determinar la información del usuario.";
}
require "conexionMySQL.inc.php";
$conexion = conexion();
$sql = "SELECT * FROM usuarios WHERE nombreUsuario = " . '"' . htmlspecialchars($nombreUsuario) . '"';
$resultadoUsuario = $conexion->query($sql);
$datosUsuario = $resultadoUsuario->fetch_array();
$sql = "SELECT * FROM bodegas WHERE idBodega=" . htmlspecialchars($datosUsuario["idBodega"]);
$resultadoBodega = $conexion->query($sql);
$datosBodega = $resultadoBodega->fetch_array();
$conexion->close();
?>