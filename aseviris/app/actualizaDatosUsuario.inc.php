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
  if (isset($_POST["actualizarDatosUsuario"])) {
    $nombreUsuario = $_SESSION["nombreUsuario"] ?? '';
    $nombre = $_POST["nombre"] ?? '';
    $apellidos = $_POST["apellidos"] ?? '';
    $dni = $_POST["dni"] ?? '';
    $direccion = $_POST["direccion"] ?? '';
    $codPostal = $_POST["codPostal"] ?? '';
    $localidad = $_POST["localidad"] ?? '';
    $provincia = $_POST["provincia"] ?? '';
    $email = $_POST["email"] ?? '';
    $telefono = $_POST["telefono"] ?? '';
  } else {
    echo "No ha sido posible determinar la información del usuario.";
  }
  require "conexionMySQL.inc.php";
  $conexion = conexion();
  $sql = "UPDATE usuarios SET 
  nombre = '$nombre', 
  apellidos = '$apellidos', 
  dni = '$dni', 
  direccion = '$direccion', 
  codPostal = '$codPostal', 
  localidad = '$localidad', 
  provincia = '$provincia', 
  email = '$email', 
  telefono = '$telefono'
  WHERE nombreUsuario = '$nombreUsuario'";
  if ($conexion->query($sql)) {
    header('Location: ../content/asociados.php');
    exit;
  } else {
    echo "<p>Error al actualizar: {$conexion->error}</p>";
    echo "<p><a href='../content/index.php'>Volver a la página de inicio</a></p>";
  }
  $conexion->close();
}
?>