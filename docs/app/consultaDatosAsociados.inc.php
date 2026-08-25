<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php

// Si existe, recuperamos la información de la sesión
if (!isset($_SESSION)) {
  session_start();
}

// Y recuperamos el nombre de usuario 
if (isset($_SESSION["nombreUsuario"])) {
  $nombreUsuario = $_SESSION["nombreUsuario"] ?? '';
} else {
  echo "No ha sido posible determinar la información del usuario.";
}

// Se crea la conexión a la base de datos.
require("conexionMySQL.inc.php");
$conexion = conexion();

// Se compone la sentencia SQL para la consulta de datos de usuario.
$sql = "SELECT * FROM usuarios WHERE nombreUsuario = " . '"' . htmlspecialchars($nombreUsuario) . '"';

// Se ejecuta la sentencia SQL para la consulta de datos de usuario.
$resultadoUsuario = $conexion->query($sql);

// Se muestra el resultado obtenido en la consulta SQL para los datos de usuario.
$datosUsuario = $resultadoUsuario->fetch_array();

// Se compone la sentencia SQL para la consulta de datos de bodega.
$sql = "SELECT * FROM bodegas WHERE idBodega=" . htmlspecialchars($datosUsuario["idBodega"]);

// Se ejecuta la sentencia SQL para la consulta de datos de bodega.
$resultadoBodega = $conexion->query($sql);

// Se muestra el resultado obtenido en la consulta SQL para los datos de bodega.
$datosBodega = $resultadoBodega->fetch_array();

// Se cierra la conexión.
$conexion->close();
?>