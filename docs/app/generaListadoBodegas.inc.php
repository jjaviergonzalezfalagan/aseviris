<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php

// Se crea la conexión a la base de datos.
include("conexionMySQL.inc.php");
$conexion = conexion();

// Se compone la sentencia SQL.
$sql = "SELECT * FROM bodegas ORDER BY nombre";

// Se ejecuta la sentencia SQL.
$resultado = $conexion->query($sql);

// Se muestran los resultados obtenidos en la consulta SQL.
while ($registro = $resultado->fetch_array()) {
  echo "<tr><td><span class='ff-sackers fc-primary'>" . $registro["nombre"] . "</span></td>";
  //echo "<td>" . $registro["localizacion"] . "</td>";
  //echo "<td>" . $registro["direccion"] . "</td>";
  echo "<td>" . "<a href=" . $registro["web"] . " target='_blank'>" . $registro["web"] . "</a></td>";
  echo "<td>" . $registro["email"] . "</td>";
  echo "<td>" . $registro["telefono"] . "</td>";
  echo '<td> <a href="detalleBodega.php" class="ml-10" ';
  echo 'onclick="document.cookie=';
  echo "'idBodega=" . $registro["idBodega"] . "'; ";
  echo "window.open(this.href, 'Detalle de Bodega', 'width=950, height=630, left=200, top=35'); return false;";
  echo '">';
  echo '<span data-i18n="boton_ver">Ver</span>';
  echo "&nbsp;";
  echo '<i class="bi bi-box-arrow-up-right"></i></a>';
  echo "</td></tr>";
}

// Se cierra la conexión.
$conexion->close();
?>