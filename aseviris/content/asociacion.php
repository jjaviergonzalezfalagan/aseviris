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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Title" content="Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Author" content="Javier González Falagán">
  <meta name="description" content="Página de la Asociación de Empresarios del Vino de la Ribeira Sacra">
  <meta name="Keywords" content="Ribeira Sacra, Asociación de Empresarios, Vino">
  <meta name="Language" content="Spanish">
  <title data-i18n="pgAsociacion_titulo"> AsEViRiS / La Asociación </title>
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
      style="background-image: url('../images/slideImage21.jpg'); background-position: bottom;">
      <div class="slider-contained">
        <div class="slider-title fc-white">

          <!-- Logo e identificación -->
          <h1 class="ff-sackers">
            <a href="index.php" class="logo-back-to-index fc-white">
              <img src="../images/logo-aseviris.gif" class="logo-aseviris" alt="Logo AsEViRiS">
            </a>
          </h1>
          <p class="fw-normal fc-white" style="font-size: 1.38em;" data-i18n="logo_titulo">
            Asociación de Empresarios del Vino de la Ribeira Sacra</p>
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
        <span class="pr-25 fs-derechosAutor">
          <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
          <a href="https://www.sobrelias.com/vinos-y-bodegas/vinedos-ribeira-sacra-enoturismo-viticultura-heroica/2/" class="fc-secondary fc-blue" target="_blank">Sobrelias </a>
          <span class="fs-derechosAutor">(12 Feb, 2021)</span>
        </span>
      </div>

      <div class="contained">

        <!-- Selector de idioma -->
        <?php
        include "include/selectorIdioma.inc.html";
        ?>

        <!-- Opciones de navegación -->
        <label for="tablet-mobile-menu" style="color: transparent; width: 55px;">
          Menú de navegación</label>
        <input type="checkbox" id="tablet-mobile-menu" name="tablet-mobile-menu" class="tab-mob-menu">
        <div class="navigation-container">
          <a href="index.php" class="nav-menu" data-i18n="menu_navegacion_inicio">
            Inicio </a>
          <a href="asociacion.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_asociacion">
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

    <section class="reset">
      <div class="row broken-float">

        <!-- Menú de navegación vertical -->
        <div class="col-twenty order-tab-1">
          <div class="card-side card-side-navigation">
            <h2 class="no-margin ff-sackers fs-h2 fc-white">
              <span data-i18n="pgAsociacion_menu_vertical_titulo">
                La Asociación </span>
            </h2>
            <hr>
            <a href="#quienesSomos">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgAsociacion_menu_vertical_entrada_1">
                ¿Quiénes somos? </span></a>
            <a href="#queHacemos">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgAsociacion_menu_vertical_entrada_2">
                ¿Qué hacemos? </span></a>
            <a href="#dondeEstamos">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgAsociacion_menu_vertical_entrada_3">
                ¿Dónde estamos? </span></a>
          </div>
        </div>

        <!-- ÁREA DE CONTENIDOS -->
        <div class="col-eighty">

          <!-- Sección 1 "¿Quiénes somos?" -->
          <div id="quienesSomos" class="pb-67"></div>
          <section class="contained row ta-left">
            <div class="col-balance">
              <h2 class="section-title ff-sackers" data-i18n="pgAsociacion_seccion_1_titulo">
                ¿Quiénes somos? </h2>
              <p class="fc-primary mt-50 fs-h2-intro">
                <span data-i18n="pgAsociacion_seccion_1_parrafo_1_1"> La Asociación de Empresarios del Vino de la Ribeira Sacra </span>
                <span class="ff-sackers" data-i18n="pgAsociacion_seccion_1_parrafo_1_2">
                  "AsEViRiS" </span><span data-i18n="pgAsociacion_seccion_1_parrafo_1_3"> es una asociación sin ánimo de lucro que nace en 2013 con la finalidad de defender los intereses de las bodegas acogidas a la Denominación de Origen Ribeira Sacra en general y los de sus miembros asociados en particular. </span>
              </p>
              <p data-i18n="pgAsociacion_seccion_1_parrafo_2"> La Denominación de Origen Ribeira Sacra (aprobada en 1996 para proteger el origen, garantizar la calidad y promocionar los vinos de esta zona) agrupa vinos gallegos de prestigio elaborados en dicha zona con las variedades de uva loureira, treixadura, godello, dona brancay torrantés (vinos blancos) y mencía, brancellao, sousón y merenzao (vinos tintos). </p>
              <p data-i18n="pgAsociacion_seccion_1_parrafo_3"> En el Consello Regulador de la D.O. Ribeira Sacra están inscritas en la actualidad más de 1.200 hectáreas de viñedo que cultivan, aproximadamente, 3.000 viticultores, embotellando el producto bajo el amparo de la D.O. un centenar de bodegas. La producción de uva dentro del Consello Regulador se sitúa alrededor de los 7.000.000 de kilos en uno de los paisajes vitícolas más espectaculares y bellos del mundo. </p>

              <!-- Derechos de autor -->
              <span class="fs-derechosAutor">
                <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                <a href="https://www.galiciaunica.es/las-rutas-del-vino/" class="fc-secondary fc-blue" target="_blank">Galicia Única </a>
                <span class="fs-derechosAutor">(13 Sep, 2013) </span>
                <span>e </span>
                <span data-i18n="derechos_imagen_pixabay_parrafo_1">Imagen de uso gratuito bajo la Licencia de contenido de </span>
                <a href="https://pixabay.com/es/photos/uva-vi%C3%B1edos-vid-colores-de-oto%C3%B1o-3716266/" class="fc-secondary fc-blue" target="_blank">
                  <span data-i18n="derechos_imagen_pixabay_parrafo_2"> Pixabay</span>
                </a>
              </span>
            </div>

            <div class="col-balance">
              <p class="col-wide mlmr-a"></p>
              <div class="sticky-img-dual">
                <img src="../images/asociacionImage1.jpg" alt="Viñedos de la Ribeira Sacra">
                <img src="../images/blob.svg" alt="" class="blob">
                <img src="../images/asociacionImage2.jpg" alt="Vides de la Ribeira Sacra">
              </div>
            </div>
            <div class="sticky-img-dual-spacer">
            </div>
          </section>

          <!-- Sección 2 "¿Qué hacemos?" -->
          <div id="queHacemos" class="pb-67"></div>
          <section class="contained row ta-left">
            <div class="col-balance">
              <h2 class="section-title ff-sackers" data-i18n="pgAsociacion_seccion_2_titulo">
                ¿Qué hacemos? </h2>
              <div class="sticky-img-dual">
                <p class="col-wide mlmr-a"> </p>
                <img src="../images/asociacionImage3.jpg" alt="Vendimia en la Ribeira Sacra">
                <img src="../images/blob.svg" alt="" class="blob">
                <img src="../images/asociacionImage4.jpg" alt="Recogida de la uva en la Ribeira Sacra">
              </div>
            </div>
            <div class="col-balance">
              <p class="fc-primary mt-50 fs-h2-intro">
                <span data-i18n="pgAsociacion_seccion_2_parrafo_1_1"> La Asociación de Empresarios del Vino de la Ribeira Sacra </span><span class="ff-sackers" data-i18n="pgAsociacion_seccion_2_parrafo_1_2"> "AsEViRiS" </span>
                <span data-i18n="pgAsociacion_seccion_2_parrafo_1_3"> nace con la misión de proporcionar un entorno jurídico, económico, social, medioambiental y de imagen que favorezca el crecimiento sostenido, la competitividad y la rentabilidad de las bodegas asociadas.
                </span>
              </p>
              <p data-i18n="pgAsociacion_seccion_2_parrafo_2">
                Para conseguir esta finalidad, desde la Asociación nos hemos marcado los siguientes
                objetivos prioritarios: </p>
              <ul>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_1"> Velar por la calidad de los viñedos y los vinos con D.O. Ribeira Sacra. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_2"> Defender las características particulares y específicas de los vinos amparados bajo la D.O. Ribeira Sacra. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_3"> Representar y defender los intereses de las bodegas asociadas ante organismos oficiales. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_4"> Potenciar y dar a conocer los vinos de la Ribeira Sacra como vinos de calidad, tanto en el ámbito nacional como internacional. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_5"> Fomentar el asociacionismo, tanto local como nacional e internacional, como medio de defensa de los intereses comunes. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_6"> Ofrecer asesoramiento individualizado a todos y cada uno de nuestros asociados. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_2_lista_7"> Impulsar iniciativas en diversos sectores, tales como comercialización, distribución, formación, turismo, etc.
                </li>
              </ul>
              <p data-i18n="pgAsociacion_seccion_2_parrafo_3"> Desde la Asociación se realizan acciones estratégicas para cumplir con estos objetivos, como son: </p>
              <ul>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_1"> Presentaciones específicas de las bodegas y vinos D.O. Ribeira Sacra. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_2"> Formación complementaria para las bodegas, según las necesidades del entorno vinícola. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_3"> RR.PP.: Difusión de información, notas de prensa, entrevistas, medios de comunicación, distribución, clubs de vinos... </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_4"> Viajes prospección de mercado a otras zonas vinícolas del mundo: Conocer otras realidades. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_5"> Creación sistema comunicación inter-bodegas: Aprender y compartir experiencias. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_6"> Estudios de mercado específicos: Progreso y mejora continua de la asociación y de sus bodegas. </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_7"> Internacionalización y adaptación continuada a los mercados: Análisis estratégico, otras posibilidades no contempladas por organismos oficiales...
                </li>
                <li data-i18n="pgAsociacion_seccion_2_parrafo_3_lista_8"> Materiales promocionales diversos: Guías, Visitas a bodegas, Cuadernos de catas, Pósters, Web... </li>
              </ul>
              <p data-i18n="pgAsociacion_seccion_2_parrafo_4"> Estamos abiertos, además, a cualquier proyecto, iniciativa o sugerencia que tenga como finalidad potenciar el cultivo, el conocimiento y el prestigio de los vinos con D.O. Ribeira Sacra así como su apertura a nuevos mercados geográficos. </p>

              <!-- Derechos de autor -->
              <span class="fs-derechosAutor">
                <span data-i18n="derechos_imagen_plural">Imágenes tomadas de </span>
                <a href="https://www.elprogreso.es/articulo/turismo/vino-ribeira-sacra/202505051107121823766.html" class="fc-secondary fc-blue" target="_blank">El Progreso </a>
                <span class="fs-derechosAutor">(5 May, 2025) </span>
                <span>y Xunta de Galicia </span>
                <a href="https://www.turismo.gal/que-facer/paseando-entre-vinedos/denominacions-de-orixe/ribeira-sacra?langId=es_ES" class="fc-secondary fc-blue" target="_blank">turismo.gal </a>
                <span class="fs-derechosAutor" data-i18n="derechos_imagen_sin_fecha">(Sin fecha)</span>
              </span>
            </div>
            <div class="sticky-img-dual-spacer"></div>
          </section>

          <!-- Sección 3 "¿Dónde estamos?" -->
          <div id="dondeEstamos" class="pb-67"></div>
          <section class="contained row ta-left">
            <div class="col-full">
              <h2 class="section-title ff-sackers" data-i18n="pgAsociacion_seccion_3_titulo">
                ¿Dónde estamos? </h2>
              <div class="mlmr-a mt-25">
                <div class="col-balance flo-left">
                  <p class="fc-primary fs-h2-intro" data-i18n="pgAsociacion_seccion_3_parrafo_1"> La Ribeira Sacra es una zona que comprende las riberas de los ríos Cabe, Sil y Miño. Está situada en la zona sur de la provincia de Lugo y el norte de la provincia de Orense, en Galicia, España. </p>
                  <p data-i18n="pgAsociacion_seccion_3_parrafo_2"> La capital de la zona se convino que fuese la ciudad de Monforte de Lemos (LUGO). </p>
                </div>
                <div class="col-balance flo-left mt-20 ta-center">
                  <img src="../images/asociacionImage5.jpg"
                    alt="Mapa de subzonas de la Denominación de Origen Ribeira Sacra">
                  <p class="fc-primary fs-italic ta-center" data-i18n="pgAsociacion_seccion_3_titulo_mapa">Mapa de subzonas de la Denominación de Origen Ribeira Sacra </p>
                  <a class="fs-minor" href="../images/mapaSubzonaRibeiraSacra.jpg" target="_blank">
                    <span data-i18n="enlace_ver_a_pagina_completa"> Ver a página completa </span>
                    &nbsp;
                    <i class="bi bi-box-arrow-up-right"></i>
                  </a>
                </div>
              </div>
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