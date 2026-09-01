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

// Y comprobamos que el usuario se haya autentificado 
if (!isset($_SESSION["nombreUsuario"])) {
  header("Location: acceso.php");
  exit;
}

// Recuperación de datos de usuario y bodega desde la base de datos
require "../app/consultaDatosAsociados.inc.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Title" content="Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Author" content="Javier González Falagán">
  <meta name="description" content="Página de la Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Keywords" content="Ribeira Sacra, Asociación de Empresarios, Vino">
  <meta name="Language" content="Spanish">
  <title data-i18n="pgAsociados_titulo"> AsEViRiS / Asociados </title>
  <link rel="preload" href="../css/styles.css" as="style">
  <link rel="preload" href="../css/bootstrap-icons.css" as="style">
  <link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap-icons.css">
  <link rel="icon" type="image/png" href="../images/favicon.png">
</head>

<body>

  <!-- Mensaje que se mostrará en caso de que el navegador no soporte JavaScript -->
  <?php
  include "include/advertenciaNoScript.inc.html";
  ?>

  <span class="fade"></span>
  <main>

    <!-- CABECERA -->
    <!-- Fondo con animación de imágenes -->
    <section class="sub-slider"
      style="background-image: url('../images/slideImage26.jpg'); background-position: bottom;">
      <div class="slider-contained">
        <div class="slider-title fc-white">

          <!-- Logo e identificación -->
          <h1 class="ff-sackers">
            <a href="index.php" class="logo-back-to-index fc-white">
              <img src="../images/logo-aseviris.gif" class="logo-aseviris" alt="Logo AsEViRiS">
            </a>
          </h1>
          <p class="fw-normal fc-white" style="font-size: 1.38em;" data-i18n="logo_titulo">
            Asociación de Empresarios del Vino de la Ribeira Sacra </p>
          <p class="fw-normal fc-white" style="font-size: 1.38em;" data-i18n="advertencia_consumo">
            ¡Bebe de manera responsable! Tu bienestar es lo primero </p>
        </div>
      </div>

      <!-- Enlaces a redes sociales -->
      <?php
      include "include/redesSociales.inc.html";
      ?>
    </section>

    <!-- Menú de navegación -->
    <nav>

      <!-- Derechos de autor -->
      <div class="derechosAutor">
        <span class="pr-25 pt-2 fs-derechosAutor">
          <a href="https://pixabay.com/es/users/hobbel-9760576/" class="fc-secondary fc-blue" target="_blank">Hobbel</a>.
          <a href="https://pixabay.com/es/photos/uva-uvas-tros-racimo-de-uvas-3606275/" class="fc-secondary fc-blue fs-italic" target="_blank">Uva, Uvas y Tros</a>
           (2018). Licencia 
          <a href="https://pixabay.com/service/license-summary/" class="fc-secondary fc-blue" target="_blank">Pixabay</a>.
        </span>
      </div>

      <div class="contained">

        <!-- Selector de idioma -->
        <?php
        include "include/selectorIdioma.inc.html";
        ?>

        <!-- Opciones de navegación -->
        <label for="tablet-mobile-menu" style="color: transparent; width: 55px;">
          Menú de navegación </label>
        <input type="checkbox" id="tablet-mobile-menu" name="tablet-mobile-menu" class="tab-mob-menu">
        <div class="navigation-container">
          <a href="index.php" class="nav-menu" data-i18n="menu_navegacion_inicio">
            Inicio </a>
          <a href="asociacion.php" class="nav-menu" data-i18n="menu_navegacion_asociacion">
            La Asociación </a>
          <a href="actualidad.php" class="nav-menu" data-i18n="menu_navegacion_actualidad">
            Actualidad </a>
          <a href="denominacion.php" class="nav-menu" data-i18n="menu_navegacion_denominacion">
            Denominación </a>
          <a href="bodegas.php" class="nav-menu" data-i18n="menu_navegacion_bodegas">
            Bodegas </a>
          <a href="enoturismo.php" class="nav-menu" data-i18n="menu_navegacion_enoturismo">
            Enoturismo </a>
          <a href="acceso.php" class="nav-menu" data-i18n="menu_navegacion_acceso">
            Acceso </a>
          <a href="asociados.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_asociados">
            Asociados </a>
          <a href="contacto.php" class="nav-menu" data-i18n="menu_navegacion_contacto">
            Contacto </a>
        </div>
      </div>
    </nav>

    <!-- Botones para volver arriba y a la página de inicio -->
    <?php
    include "include/botonesInicioArriba.inc.html";
    ?>

    <section class="reset">
      <div class="row broken-float">

        <!-- Menú de navegación vertical -->
        <div class="col-twenty order-tab-1">
          <div class="card-side card-side-navigation">
            <h2 class="no-margin ff-sackers fs-h2 fc-white">
              <span data-i18n="pgAsociados_menu_vertical_bienvenido">Bienvenido </span> <?= $datosUsuario["nombre"] ?>
            </h2>
            <hr>

            <p style="color: #ffffff;">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgAsociados_menu_vertical_pulse_aqui_1">Pulse </span><a href="logout.php" style="color: #00a8ff;"><span data-i18n="pgAsociados_menu_vertical_pulse_aqui_2">aquí </span></a> <span data-i18n="pgAsociados_menu_vertical_pulse_aqui_3">para salir</span>
            </p>
            <p style="color: #ffffff;">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgAsociados_menu_vertical_volver_1">Volver al </span><a href="index.php" style="color: #00a8ff;"><span data-i18n="pgAsociados_menu_vertical_volver_2">inicio</span></a>
            </p>

            <p style="color: #ffffff;">
              <i class="bi bi-chevron-compact-right"></i>
              <a href="#datos_usuario" style="color: #ffffff;">
                <span data-i18n="pgAsociados_menu_vertical_datos_usuario">Datos del usuario</span></a>
            </p>
            <p style="color: #ffffff;">
              <i class="bi bi-chevron-compact-right"></i>
              <a href="#bodega" style="color: #ffffff;">
                <span data-i18n="pgAsociados_menu_vertical_datos_bodega">Datos de la Bodega</span></a>
            </p>
          </div>
        </div>

        <!-- ÁREA DE CONTENIDOS -->
        <div class="col-eighty">
          <!-- Sección "Datos de usuario" -->
          <div id="datos_usuario" class="pb-67"></div>
          <section class="contained">
            <h2 class="section-title ff-sackers">
              <span data-i18n="pgAsociados_seccion_datos_usuario_titulo">Datos del usuario</span>
            </h2>
            <div class="mt-25 ml-130">
              <form id="formularioDatosUsuario" method="POST" action="../app/actualizaDatosUsuario.inc.php">
                <table class="pl-132">
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_nombreUsuario">Nombre de usuario: </span></strong></td>
                    <td><input type="text" name="nombreUsuario" value="<?= $datosUsuario["nombreUsuario"] ?>" disabled></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_nombre">Nombre: </span></strong></td>
                    <td><input type="text" name="nombre" value="<?= $datosUsuario["nombre"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_apellidos">Apellidos: </span></strong></td>
                    <td><input type="text" name="apellidos" value="<?= $datosUsuario["apellidos"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_dni">DNI: </span></strong></td>
                    <td><input type="text" name="dni" value="<?= $datosUsuario["dni"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_direccion">Dirección: </span></strong></td>
                    <td><input type="text" name="direccion" value="<?= $datosUsuario["direccion"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_codPostal">Código Postal: </span></strong></td>
                    <td><input type="text" name="codPostal" value="<?= $datosUsuario["codPostal"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_localidad">Localidad: </span></strong></td>
                    <td><input type="text" name="localidad" value="<?= $datosUsuario["localidad"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_provincia">Provincia: </span></strong></td>
                    <td><input type="text" name="provincia" value="<?= $datosUsuario["provincia"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_email">eMail: </span></strong></td>
                    <td><input type="text" name="email" value="<?= $datosUsuario["email"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_usuario_telefono">Teléfono: </span></strong></td>
                    <td><input type="text" name="telefono" value="<?= $datosUsuario["telefono"] ?>"></td>
                  </tr>
                </table>
                <div class="ta-center">
                  <input type="submit" id="actualizarDatosUsuario" class="btn-bg1 border-round mt-20" name="actualizarDatosUsuario" value="Actualizar"></input>
                </div>
              </form>
            </div>
          </section>

          <!-- Sección "Datos de la Bodega" -->
          <div id="bodega" class="pb-67"> </div>
          <section class="contained">
            <h2 class="section-title ff-sackers"><span data-i18n="pgAsociados_seccion_datos_bodega_titulo">Datos de la Bodega</span>
            </h2>
            <img src="../images/adegasImage1.jpg" class="img-unheight mt-50 bdg-logo" alt="Adega Algueira S.L.">
            <div class="mt-25">
              <form id="formularioDatosBodega" method="POST" action="../app/actualizaDatosBodega.inc.php">
                <table>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_nombre">Nombre: </span></strong></td>
                    <td><input type="text" name="nombreBodega" value="<?= $datosBodega["nombre"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_localizacion">Localización: </span></strong></td>
                    <td><input type="text" name="zona" value="<?= $datosBodega["zona"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_superficie">Superficie: </span></strong></td>
                    <td><input type="text" name="superficie" value="<?= $datosBodega["superficie"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_produccion">Producción: </span></strong></td>
                    <td><input type="text" name="produccion" value="<?= $datosBodega["produccion"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_variedades_uva">Variedades de uva: </span></strong></td>
                    <td><input type="text" name="variedadesDeUva" value="<?= $datosBodega["variedadesDeUva"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_marcas_comerciales">Marcas comerciales: </span></strong></td>
                    <td><input type="text" name="marcasComerciales" value="<?= $datosBodega["marcasComerciales"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_premios">Premios: </span></strong></td>
                    <td><input type="text" name="premios" value="<?= $datosBodega["premios"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_direccion">Dirección: </span></strong></td>
                    <td><input type="text" name="direccionBodega" value="<?= $datosBodega["direccion"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_web">WEB: </span></strong></td>
                    <td><input type="text" name="web" value="<?= $datosBodega["web"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_email">eMail: </span></strong></td>
                    <td><input type="text" name="emailBodega" value="<?= $datosBodega["email"] ?>"></td>
                  </tr>
                  <tr>
                    <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_telefono">Teléfono: </span></strong></td>
                    <td><input type="text" name="telefonoBodega" value="<?= $datosBodega["telefono"] ?>"></td>
                  </tr>
                  <td><strong><span data-i18n="pgAsociados_seccion_datos_bodega_contacto">Contacto: </span></strong></td>
                  <td><input type="text" name="personaContactoBodega" value="<?= $datosBodega["personaContacto"] ?>"></td>
                  </tr>
                </table>
                <div class="ta-center">
                  <input type="submit" id="actualizarDatosBodega" class="btn-bg1 border-round mt-20" name="actualizarDatosBodega" value="Actualizar"></input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </section>
  </main>

  <!-- PIÉ DE PÁGINA -->
  <?php
  include "include/pieDePagina.inc.html";
  ?>

  <!-- Aviso de uso de cookies -->
  <?php
  include "include/avisoDeCookies.inc.html";
  ?>

  <!-- Carga de scripts de Javascript -->
  <script src="../js/jquery-4.0.0.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>