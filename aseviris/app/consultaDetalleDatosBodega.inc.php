<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php
if (isset($_COOKIE['idBodega'])) {
  $idBodega = $_COOKIE['idBodega'];
} else {
  echo "No ha sido posible determinar la información de la bodega a mostrar.";
}
require "conexionMySQL.inc.php";
$conexion = conexion();
$sql = "SELECT * FROM bodegas WHERE idBodega=" . htmlspecialchars($idBodega);
$resultado = $conexion->query($sql);
$datosBodega = $resultado->fetch_array();
$conexion->close();
?>