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
  <title data-i18n="pgContacto_titulo"> AsEViRiS / Contacto </title>
  <link rel="preload" href="../css/styles.css" as="style">
  <link rel="preload" href="../css/bootstrap-icons.css" as="style">
  <link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <style>
    #mapa {
      height: 600px;
      width: 500px;
    }
  </style>
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
      style="background-image: url('../images/slideImage27.jpg'); background-position: bottom;">
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
          <a href="https://turismo.ribeirasacra.org/servicios/bodega-carlos-caneiro-nunez" class="fc-secondary fc-blue" target="_blank">turismo.ribeirasacra.org </a>
          <span class="referenciaImagenesTexto" data-i18n="derechos_imagen_sin_fecha">(Sin fecha)</span>
        </span>
      </div>

      <div class="contained">

        <!-- Selector de idioma -->
        <?php
        include("include/selectorIdioma.inc.html");
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
          <a href="asociados.php" class="nav-menu" data-i18n="menu_navegacion_asociados">
            Asociados </a>
          <a href="contacto.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_contacto">
            Contacto
          </a>
        </div>
      </div>
    </nav>

    <!-- Botones para volver arriba y a la página de inicio -->
    <?php
    include("include/botonesInicioArriba.inc.html");
    ?>

    <!-- ÁREA DE CONTENIDOS -->
    <!-- Sección "Contacta con nosotros" -->
    <div class="pb-80"> </div>
    <section class="contained">
      <h2 class="section-title ff-sackers" data-i18n="pgContacto_seccion_contacta_titulo"> Contacto </h2>
      <p class="col-wide ta-left mlmr-a mt-50">
        <span data-i18n="pgContacto_seccion_contacta_parrafo_1_1"> La afiliación a la Asociación de Empresarios del Vino de la Ribeira Sacra </span>
        <span class="ff-sackers" data-i18n="pgContacto_seccion_contacta_parrafo_1_2"> "AsEViRiS" </span>
        <span data-i18n="pgContacto_seccion_contacta_parrafo_1_3"> es totalmente voluntaria y responde a la necesidad de las empresas de pertenecer a una organización que defienda sus intereses - comunes a los de otras empresas - y les mantenga informados de los asuntos específicos que les puedan afectar en el desarrollo normal de sus actividades. </span>
      </p>
      <p class="col-wide ta-left mlmr-a" data-i18n="pgContacto_seccion_contacta_parrafo_2"> El solicitante deberá aportar información sobre la empresa u organización (datos de contacto, NIF, página web...) y sobre la actividad (productos, Denominaciones de Origen, facturación, exportaciones...).
      </p>
      <p class="col-wide ta-left mlmr-a" data-i18n="pgContacto_seccion_contacta_parrafo_3"> En el caso de miembros colectivos, se deberá aportar además el listado de miembros que forman parte de la organización, una copia de los Estatutos y el acuerdo de afiliación del órgano competente en la organización.
      </p>
      <p class="col-wide ta-left mlmr-a" data-i18n="pgContacto_seccion_contacta_parrafo_4"> El ingreso en la Asociación se aprueba por la Comisión Ejecutiva, y el nuevo asociado se compromete a cumplir con lo establecido en los Estatutos de la organización y a abonar la cuota de afiliación, cantidad que se calcula anualmente en función del volumen de facturación de la empresa o de los socios de la asociación.
      </p>
      <div class="row">

        <!-- Sección "Mapa embebido de OpenStreetMap" -->
        <div class="col-balance map-embed ta-center">
          <iframe width="800" height="600" src="https://www.openstreetmap.org/export/embed.html?bbox=-7.613182067871095%2C42.4848840718379%2C-7.404785156250001%2C42.565345174766456&amp;layer=mapnik&amp;marker=42.52525345361604%2C-7.508805214652966"></iframe><br />
          <a class="fs-minor" href="https://www.openstreetmap.org/?mlat=42.52525&amp;mlon=-7.50881#map=13/42.52513/-7.50898" target="_blank"><span data-i18n="enlace_ver_a_pagina_completa">Ver a página completa</span> &nbsp;<i class="bi bi-box-arrow-up-right"></i></a>
        </div>

        <!-- Sección "Datos de contacto" -->
        <div class="col-balance"> <span class="fs-h4 mb-15 mt-25 fc-primary" data-i18n="pgContacto_seccion_datos_encuentranos_titulo"> Encuéntranos </span>
          <a id="direccion" href="https://www.openstreetmap.org/?mlat=42.52525&amp;mlon=-7.50881#map=13/42.52513/-7.50898" class="display-inblock" target="_blank"><i class="bi bi-globe-europe-africa"></i>&nbsp;<span data-i18n="pgContacto_seccion_datos_encuentranos_texto">27400 Monforte de Lemos | LUGO</span></a>
          <br /><br />
          <a href="https://www.openstreetmap.org/?mlat=42.52525&amp;mlon=-7.50881#map=13/42.52513/-7.50898" class="display-inblock" target="_blank"><i class="bi bi-geo-alt-fill"></i>&nbsp;<span data-i18n="pgContacto_seccion_datos_encuentranos_coordenadas">42.51908417447932, -7.515905321467272</span></a>
          <span class="fs-h4 mb-15 mt-25 fc-primary" data-i18n="pgContacto_seccion_datos_contactanos_titulo"> Contáctanos </span>
          <a id="email" href="#" class="display-inblock">
            <i class="bi bi-envelope-fill"></i>
            <span data-i18n="pgContacto_seccion_datos_contactanos_texto_1"> info@aseviris.ddns.net
            </span>
          </a>
          &nbsp;
          <a id="telefono" href="#" class="display-inblock">
            <i class="bi bi-telephone-fill"></i>
            <span data-i18n="pgContacto_seccion_datos_contactanos_texto_2"> +34644711166 </span>
          </a>
          <span class="fs-h4 mb-15 mt-25 fc-primary" data-i18n="pgContacto_seccion_datos_siguenos_titulo"> Síguenos </span>
          <a href="https://www.facebook.com/?locale=es_ES" class="display-inblock mr-10" target="_blank">
            <i class="bi bi-facebook"></i> Facebook
          </a>
          <a href="https://www.instagram.com" class="display-inblock mr-10" target="_blank">
            <i class="bi bi-instagram"></i> Instagram
          </a>
          <a href="https://twitter.com/?lang=es" class="display-inblock mr-10" target="_blank">
            <i class="bi bi-twitter-x"></i> Twitter
          </a>
          <a href="https://www.youtube.com" class="display-inblock mr-10" target="_blank">
            <i class="bi bi-youtube"></i> Youtube
          </a>
          <form name="contacto" class="message-form mt-50 mb-25" onSubmit="enviarFormulario();"
            action="../content/contacto.php">
            <span class="fs-h4 fc-primary mb-15" data-i18n="pgContacto_seccion_datos_mensaje_titulo"> Envíanos un mensaje </span>
            <div>
              <label for="message-nombre" class="message-form-label-left" data-i18n="pgContacto_seccion_datos_mensaje_nombre"> Nombre: </label>
              <label for="message-apellidos" class="message-form-label-rigth" data-i18n="pgContacto_seccion_datos_mensaje_apellidos"> Apellidos: </label>
            </div>
            <div class="row mb-20 broken-float">
              <input type="text" id="message-nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" minlength="2" maxlength="25"
                title="Se admiten nombres de 2 a 25 caracteres." autocomplete="off" required>
              <input type="text" class="ml-a" id="message-apellidos" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" minlength="2"
                maxlength="50" title="Se admiten apellidos de 2 a 50 caracteres." autocomplete="off" required>
            </div>
            <div>
              <label for="message-email" class="message-form-label-left" data-i18n="pgContacto_seccion_datos_mensaje_correo"> Direccion de Correo electrónico:
              </label>
              <label for="message-telefono" class="message-form-label-rigth" data-i18n="pgContacto_seccion_datos_mensaje_telefono"> Teléfono: </label>
            </div>
            <div class="row mb-20 broken-float">
              <input type="email" id="message-email"
                pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
                title="Se admiten direcciones de correo válidas con el formato: 'texto@texto.dominio'."
                autocomplete="off" required>
              <input type="tel" class="ml-a" id="message-telefono" pattern="^\d{9}$" maxlength="9"
                title="Se admiten números de teléfono de 9 dígitos." autocomplete="off" required>
            </div>
            <div>
              <label for="message-asunto" class="message-form-label-left" data-i18n="pgContacto_seccion_datos_mensaje_asunto"> Asunto: </label>
            </div>
            <input type="text" id="message-asunto" class="mb-20 broken-float" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ.¿?¡!\s]+"
              minlength="5" maxlength="50" title="Se admiten textos de 5 a 50 caracteres." autocomplete="off" required>
            <div>
              <label for="message-mensaje" class="message-form-label-left" data-i18n="pgContacto_seccion_datos_mensaje_escribe"> Escribe aquí tu mensaje: </label>
            </div>
            <textarea id="message-mensaje" class="broken-float" rows="5" minlength="5" maxlength="500"
              title="Se admiten textos de 5 a 500 caracteres." autocomplete="off" required></textarea>
            <button type="submit" class="btn-bg1 border-round mt-20" data-i18n="boton_enviar_mensaje"> Enviar mensaje </button>
          </form>
        </div>
      </div>
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

  <!-- Carga de scripts -->
  <script src="../js/jquery-4.0.0.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>