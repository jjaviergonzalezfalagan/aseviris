<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php
// Se recupera la sesión
session_start();

// Se vacían todas las variables de sesión
session_unset();

// Se destruye la sesión
session_destroy();

// Se vuelve al formulario de inicio de sesión 
header("Location: index.php");
exit;
?>
