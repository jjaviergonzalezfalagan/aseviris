<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

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
  <title data-i18n="pgBodegas_titulo"> AsEViRiS / Bodegas </title>
  <link rel="preload" href="../css/styles.css" as="style">
  <link rel="preload" href="../css/bootstrap-icons.css" as="style">
  <link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap-icons.css">
  <link rel="icon" type="image/png" href="../images/favicon.png">
</head>

<body>

  <!-- Mensaje que se mostrará en caso de que el navegador no soporte JavaScript -->
  <?php
  include("include/advertenciaNoScript.inc.html");
  ?>

  <span class="fade"></span>
  <main>

    <!-- CABECERA -->
    <!-- Fondo con animación de imágenes -->
    <section class="sub-slider"
      style="background-image: url('../images/slideImage24.jpg'); background-position: bottom;">
      <div class="slider-contained">
        <div class="slider-title fc-white">

          <!-- Logo e identificación -->
          <h1 class="ff-sackers">
            <a href="#" class="logo-back-to-index fc-white">
              <img src="../images/logo.png" class="logo-aseviris" alt="Logo AsEViRiS">
              AsEViRiS
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
      include("include/redesSociales.inc.html");
      ?>
    </section>

    <!-- Menú de navegación -->
    <nav>

      <!-- Derechos de autor -->
      <div class="derechosAutor">
        <span class="pr-25 referenciaImagenesTexto">
          <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
          <a href="https://es.wikipedia.org/wiki/Archivo:Doade,_Sober,_Galiza.jpg" class="fc-secondary fc-blue" target="_blank">Wikipedia </a>
          <span class="referenciaImagenesTexto">(24 Sep, 2009)</span>
        </span>
      </div>
      <div class="contained">

        <!-- Selector de idioma -->
        <?php
        include("include/selectorIdioma.inc.html");
        ?>

        <!-- Opciones de navegación -->
        <label for="tablet-mobile-menu" style="color: transparent; width: 55px;" data-i18n="menu_navegacion_titulo">
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
          <a href="bodegas.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_bodegas">
            Bodegas </a>
          <a href="enoturismo.php" class="nav-menu" data-i18n="menu_navegacion_enoturismo">
            Enoturismo </a>
          <a href="acceso.php" class="nav-menu" data-i18n="menu_navegacion_acceso">
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
    include("include/botonesInicioArriba.inc.html");
    ?>

    <!-- ÁREA DE CONTENIDOS -->
    <!-- Sección "Bodegas" -->
    <div style="padding-bottom: 13px;"> </div>
    <div id="bodegas" class="pb-67"> </div>
    <section class="contained">
      <h2 class="section-title ff-sackers" data-i18n="pgBodegas_seccion_bodegas_titulo"> Bodegas </h2>
      <div class="col-balance flo-left mlmr-a mt-25 ta-left">
        <p class="fc-primary fs-h2-intro" data-i18n="pgBodegas_seccion_bodegas_parrafo_1"> El modelo de "Adega" (Bodega) sería aquella empresa formada por uno o varios socios, que tiene una producción, por lo general elevada. Este tipo de productores pueden comprarle uvas a viticultores para elaborar sus vinos o bien pueden tener sus propios viñedos.
        </p>
        <p><span data-i18n="pgBodegas_seccion_bodegas_parrafo_2">La Asociación de Empresarios del Vino de la Ribeira Sacra </span><span class="ff-sackers"> "AsEViRiS" </span><span data-i18n="pgBodegas_seccion_bodegas_parrafo_3"> cuenta entre sus asociados con bodegas de las más antiguas de Galicia, con una de las más grandes y con una de las primeras que embotelló sus vinos.</span>
        </p>
        <p><span data-i18n="pgBodegas_seccion_bodegas_parrafo_4">En la actualidad la Asociación de Empresarios del Vino de la Ribeira Sacra</span><span class="ff-sackers"> "AsEViRiS" </span><span data-i18n="pgBodegas_seccion_bodegas_parrafo_5"> cuenta con un total de 20</span>
          <a href="#bodegasAsociadas" class="fc-primary" data-i18n="pgBodegas_seccion_bodegas_parrafo_6"> bodegas asociadas </a>.
        </p>
      </div>
      <div class="flo-left col-balance mt-50 ta-center">
        <img src="../images/gasparrocha-top-5078614_1920.jpg" alt="Adega de la Ribeira Sacra">
        <span class="fc-primary fs-italic" data-i18n="pgBodegas_seccion_bodegas_imagen">Adega de la Ribeira Sacra</span>
        <br />

        <!-- Derechos de autor -->
        <span class="referenciaImagenesTexto">
          <span data-i18n="derechos_imagen_pixabay_parrafo_1">Imagen de uso gratuito bajo la Licencia de contenido de </span>
          <a href="https://pixabay.com/es/photos/los-vi%c3%b1edos-vino-uvas-vi%c3%b1edos-5078614/" class="fc-secondary fc-blue" target="_blank"><span data-i18n="derechos_imagen_pixabay_parrafo_2">Pixabay</span></a>
        </span>
      </div>
      <div class="broken-float"></div>
    </section>
    <section class="reset">
      <div class="row"></div>
    </section>

    <!-- Sección "Bodegas Asociadas" -->
    <div style="padding-bottom: 13px;"> </div>
    <div id="bodegasAsociadas" class="pb-67"> </div>
    <section class="contained">
      <h2 class="section-title ff-sackers" data-i18n="pgBodegas_seccion_bodegas_asociadas_titulo"> Bodegas Asociadas </h2>
      <div class="col-full mlmr-a mt-25 ta-center">
        <div id="contenedorTablaListadoBodegas">
          <table id="listadoBodegas" class="tablaListado">
            <tr>
              <th data-i18n="pgBodegas_seccion_bodegas_asociadas_tabla_col_1">Nombre</th>
              <th data-i18n="pgBodegas_seccion_bodegas_asociadas_tabla_col_2">Web</th>
              <th data-i18n="pgBodegas_seccion_bodegas_asociadas_tabla_col_3">email</th>
              <th data-i18n="pgBodegas_seccion_bodegas_asociadas_tabla_col_4">Teléfono</th>
              <th data-i18n="pgBodegas_seccion_bodegas_asociadas_tabla_col_5">Info Completa</th>
            </tr>
            <?php
            require("../app/generaListadoBodegas.inc.php");
            ?>
          </table>
        </div>
      </div>
      <div class="broken-float"></div>
    </section>
  </main>

  <!-- PIÉ DE PÁGINA -->
  <?php
  include("include/pieDePagina.inc.html");
  ?>

  <!-- Aviso de uso de cookies -->
  <?php
  include("include/avisoDeCookies.inc.html");
  ?>

  <!-- Carga de scripts de Javascript -->
  <script src="../js/jquery-4.0.0.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>