<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php

// Comprobamos si ya se ha enviado el formulario 
if (isset($_POST["entrar"])) {
  $nombreUsuario = $_POST["nombreUsuario"] ?? '';
  $contrasenia = $_POST["contrasenia"] ?? '';

  // Validamos que recibimos ambos parámetros
  if (empty($nombreUsuario) || empty($contrasenia)) {
    $error = "Debes introducir un usuario y contraseña";
    include "acceso.php";
    exit;
  } else {

    // Se crea la conexión a la base de datos.
    require "../app/conexionMySQL.inc.php";
    $conexion = conexion();

    // Se compone la sentencia SQL para la consulta de datos de usuario.
    $sql = "SELECT * FROM usuarios WHERE nombreUsuario = " . '"' . htmlspecialchars($nombreUsuario) . '"';

    // Se ejecuta la sentencia SQL para la consulta de datos de usuario.
    $resultadoUsuario = $conexion->query($sql);

    // Se muestra el resultado obtenido en la consulta SQL para los datos de usuario.
    $datosUsuario = $resultadoUsuario->fetch_array();

    if ($nombreUsuario && password_verify($contrasenia, $datosUsuario['contrasenia'])) {

      // Almacenamos el usuario en la sesión
      session_start();
      $_SESSION["nombreUsuario"] = $nombreUsuario;

      // Cargamos la página de Asociados
      header("Location: asociados.php");
      exit;
    } else {

      // Si las credenciales no son válidas, se vuelven a pedir 
      $error = "Usuario o contraseña no válidos!";
      include "acceso.php";
      exit;
    }
  }
}
?>