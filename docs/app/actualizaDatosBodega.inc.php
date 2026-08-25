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

$nombreUsuario = $_SESSION["nombreUsuario"] ?? '';

// Se crea la conexión a la base de datos.
include("conexionMySQL.inc.php");
$conexion = conexion();

// Se compone la sentenia SQL para la consulta del idBodega del usuario.
$sql = "SELECT idBodega FROM usuarios WHERE nombreUsuario = '$nombreUsuario'";

// Se ejecuta la sentencia SQL para la consulta del idBodega del usuario.
$resultadoConsulta = $conexion->query($sql);

// Se muestra el resultado obtenido en la consulta SQL para el idBodega del usuario.
$idBodega = intval($resultadoConsulta->fetch_array()[0]);

// Recuperamos los datos enviados mediante POST 
if (isset($_POST["actualizarDatosBodega"])) {
  $nombre = $_POST["nombreBodega"] ?? '';
  $zona = $_POST["zona"] ?? '';
  $superficie = $_POST["superficie"] ?? '';
  $produccion = $_POST["produccion"] ?? '';
  $variedadesDeUva = $_POST["variedadesDeUva"] ?? '';
  $marcasComerciales = $_POST["marcasComerciales"] ?? '';
  $premios = $_POST["premios"] ?? '';
  $direccionBodega = $_POST["direccionBodega"] ?? '';
  $web = $_POST["web"] ?? '';
  $emailBodega = $_POST["emailBodega"] ?? '';
  $telefonoBodega = $_POST["telefonoBodega"] ?? '';
  $personaContactoBodega = $_POST["personaContactoBodega"] ?? '';
} else {
  echo "No ha sido posible determinar la información del usuario.";
}

// Se compone la sentencia SQL.
$sql = "UPDATE bodegas SET 
  nombre = '$nombre', 
  zona = '$zona', 
  superficie = '$superficie', 
  produccion = '$produccion', 
  variedadesDeUva = '$variedadesDeUva', 
  marcasComerciales = '$marcasComerciales', 
  premios = '$premios',
  direccion = '$direccionBodega',
  web = '$web',
  email = '$emailBodega', 
  telefono = '$telefonoBodega',
  personaContacto = '$personaContactoBodega'
WHERE idBodega = '$idBodega'";

// Se ejecuta la sentencia SQL.
if ($conexion->query($sql)) {
  header('Location: ../content/asociados.php');
  exit;
} else {
  echo "<p>Error al actualizar: {$conexion->error}</p>";
  echo "<p><a href='../content/index.php'>Volver a la página de inicio</a></p>";
}

// Se cierra la conexión.
$conexion->close();
?>