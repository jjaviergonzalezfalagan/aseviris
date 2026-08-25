<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php

// Se captura el ID de la Bodega a mostrar.
if (isset($_COOKIE['idBodega'])) {
  $idBodega = $_COOKIE['idBodega'];
} else {
  echo "No ha sido posible determinar la información de la bodega a mostrar.";
}

// Se crea la conexión a la base de datos.
require("conexionMySQL.inc.php");
$conexion = conexion();

// Se compone la sentencia SQL.
$sql = "SELECT * FROM bodegas WHERE idBodega=" . htmlspecialchars($idBodega);

// Se ejecuta la sentencia SQL.
$resultado = $conexion->query($sql);

// Se muestra el resultado obtenido en la consulta SQL.
$datosBodega = $resultado->fetch_array();

// Se cierra la conexión.
$conexion->close();
?>