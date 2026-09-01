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
if (isset($_SESSION["nombreUsuario"])) {
  header("Location: asociados.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="Title" content="Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Author" content="Javier González Falagán">
  <meta name="description" content="Página de la Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Keywords" content="Ribeira Sacra, Asociación de Empresarios, Vino">
  <meta name="Language" content="Spanish">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title data-i18n="pgAcceso_titulo"> AsEViRiS / Acceso </title>
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
          <a href="acceso.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_acceso">
            Acceso </a>
          <a href="asociados.php" class="nav-menu" data-i18n="menu_navegacion_asociados">
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

    <!-- ÁREA DE CONTENIDOS -->
    <!-- Sección "Inicio de sesión" -->
    <div class="pb-80"> </div>
    <section class="contained">
      <h2 class="section-title ff-sackers" data-i18n="pgAcceso_seccion_inicio_sesion_titulo">
        Acceso </h2>
      <div class="col-full ta-left">
        <form name="acceso" class="message-form mb-25" action="login.php" method='post'>
          <fieldset style="border-radius: 15px; border-color: #901d1d;">
            <legend class="fs-h3 fc-primary mt-50 ml-50" data-i18n="pgAcceso_seccion_inicio_sesion_cabecera">Bienvenido/a</legend>
            <div class="col-balance flo-left mlmr-a padd-0-75">
              <br>
              <p><span data-i18n="pgAcceso_seccion_inicio_sesion_texto_1">
                  Desde aquí los miembros de la Asociación de Empresarios del Vino de la Riberia Sacra
                </span><span class="ff-sackers" data-i18n="pgAcceso_seccion_inicio_sesion_texto_2"> "AsEViRiS"
                </span><span data-i18n="pgAcceso_seccion_inicio_sesion_texto_3"> podrán acceder con sus credenciales de acceso a la información exclusiva para asociados. </span></p>
            </div>
            <div class="col-balanca flo-left mlmr-a padd-0-75">
              <div>
                <label for="nombreUsuario" class="message-form-label-left" data-i18n="pgAcceso_seccion_inicio_sesion_usuario"> Usuario/a: </label>
              </div>
              <input type="text" id="nombreUsuario" name="nombreUsuario" pattern="[A-Za-z0-9._-]+" minlength="4" maxlength="20" autocomplete="off" required>
              <div>
                <small>Se admiten nombres de usuario de 5 a 20 caracteres.</small>
              </div>
              <br>
              <div>
                <label for="contrasenia" class="message-form-label-left" data-i18n="pgAcceso_seccion_inicio_sesion_contrasena"> Contraseña: </label>
              </div>
              <input type="password" id="contrasenia" name="contrasenia" class="ml-a" minlength="4" maxlength="12" autocomplete="off" required>
              <div>
                <small>Se admiten contraseñas de 8 a 12 letras y números.</small>
              </div>
              <button type="submit" name="entrar" value="entrar" class="btn-bg1 border-round mt-20" data-i18n="boton_entrar">
                Entrar </button>
              <br>
              <br>
              <div>
                <?php
                if (isset($error)) {
                  echo $error;
                }
                ?>
              </div>
          </fieldset>
        </form>
      </div>
      </div>
      <div class="broken-float"></div>
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