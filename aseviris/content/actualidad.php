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
  <title data-i18n="pgActualidad_titulo"> AsEViRiS / Actualidad </title>
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

  <!-- Se establece la lógica para la inserción en la base de datos del email introducido en el apartado de suscripción al boletín de noticias -->
  <?php
  require "../app/suscripcion.inc.php";
  ?>

  <span class="fade"></span>
  <main>

    <!-- CABECERA -->
    <!-- Fondo con animación de imágenes -->
    <section class="sub-slider"
      style="background-image: url('../images/slideImage22.jpg'); background-position: bottom;">
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
        <span class="pr-25 fs-derechosAutor">
          <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
          <a href="https://www.cultura.gal/es/nova/61982/a-ribeira-sacra-sera-candidata-a-patrimonio-mundial-de-la-unesco-en-2021" class="fc-secondary fc-blue" target="_blank">Cultura de Galicia</a>
          <span class="fs-derechosAutor"> (27 Mar, 2020)</span>
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
          <a href="actualidad.php" class="nav-menu fc-primary fw-bold" data-i18n="menu_navegacion_actualidad">
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
              <span data-i18n="pgActualidad_menu_vertical_titulo">
                Actualidad </span>
            </h2>
            <hr>
            <a href="#eventos">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_1">
                Eventos </span></a>
            <a href="#noticias">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_2">
                Noticias </span></a>
            <a href="#suscribete">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_3">
                Suscripción al boletín de noticias </span></a>
            <a href="#documentacion">
              <i class="bi bi-chevron-compact-right"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_4">
                Documentación </span></a>
            <p class="ml-15 fc-white"><i class="bi bi-dot"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_5">
                Legislación </span>
            </p>
            <p class="ml-15 fc-white"><i class="bi bi-dot"></i>
              <span data-i18n="pgActualidad_menu_vertical_entrada_6">
                Subvenciones </span>
            </p>
          </div>
        </div>

        <!-- ÁREA DE CONTENIDOS -->
        <div class="col-eighty">

          <!-- Sección "Eventos" -->
          <div id="eventos" class="pb-67"></div>
          <section class="contained">
            <h2 class="section-title ff-sackers" data-i18n="pgActualidad_seccion_eventos_titulo">
              Eventos </h2>

            <!-- Sección "Evento 1" -->
            <div id="event_1" class="pb-67"></div>
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance">
                  <span class="fc-primary fs-h3" data-i18n="pgActualidad_seccion_eventos_evento_1_titulo">
                    Foodex JAPÓN 2027 </span>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_1_parrafo_1"> La feria FOODEX,llevada a cabo anualmente en el centro internacional de conferencias Makuhari Messe en la ciudad de Chiba (aledaña a Tokio), es la mayor feria agroalimentaria que se celebra en la zona Asia-Pacífico, incluyendo Oceanía, constituyendo un importante escaparate para las empresas interesadas en introducirse en el mercado japonés y en el asiático en general y/o consolidar su presencia en los mismos. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_1_parrafo_2"> ICEX España Exportación e Inversiones organiza una pabellón oficial en la feria FOODEX 2027 que tendrá lugar del 8 al 11 de marzo de 2027 en el recinto ferial Makuhari Messe International Convention Complex (Makuhari Messe) de Chiba (Tokio). </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_1_parrafo_3"> La próxima será la 51ª edición de esta feria internacional, dedicada a los sectores de la alimentación y las bebidas. Es de periodicidad anual y, desde su primera edición en 1976, está dirigida a un público exclusivamente profesional. Atrae a un gran número de compradores líderes del sector de la alimentación, abarcando desde mayoristas a minoristas, supermercados, catering, importadores de bebidas, restauración, etc. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_1_parrafo_4"> La actividad descrita puede ser susceptible de ser financiada por la Unión Europea a través de los Fondos Europeos de Desarrollo Regional (FEDER), de las que ICEX España Exportación e Inversiones es órgano ejecutor. </p>
                </div>
                <div class="col-balance order-tab-1 ta-center">
                  <img src="../images/agendaImage1.jpg" alt="Foodex JAPÓN 2026">
                  <span class="fc-primary fs-italic" data-i18n="pgActualidad_seccion_eventos_evento_1_imagen">
                    Foodex JAPÓN 2026 </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://cadenaser.com/castillalamancha/2026/04/21/la-do-la-mancha-refuerza-su-presencia-en-japon-su-principal-mercado-extracomunitario-ser-ciudad-real/?primarySection=/ocio-y-cultura/gastro" class="fc-secondary fc-blue" target="_blank">Cadena Ser </a>
                    <span class="fs-derechosAutor">(21 Abr, 2026)</span>
                  </span>
                </div>
              </div>
            </div>

            <!-- Sección "Evento 2" -->
            <div id="event_2" class="pb-67"></div>
            <hr>
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance ta-center">
                  <img src="../images/agendaImage2.jpg" alt="ProWeiN 2026 DÜSSELDORF">
                  <span class="fc-primary fs-italic" data-i18n="gActualidad_seccion_eventos_evento_2_imagen">
                    ProWeiN 2026 DÜSSELDORF </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://revista.wein.plus/news/la-prowein-2023-espera-unos-6-000-expositores-vuelven-las-bodegas-de-ultramar" class="fc-secondary fc-blue" target="_blank">wein.plus </a>
                    <span class="fs-derechosAutor">(31 Ago, 2022)</span>
                  </span>
                </div>
                <div class="col-balance"> <span class="fc-primary fs-h3"
                    data-i18n="pgActualidad_seccion_eventos_evento_2_titulo">
                    ProWeiN 2027 DÜSSELDORF </span>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_2_parrafo_1"> ProWein 2027 Dusseldorf, la feria del vino de Dusseldorf (Alemania) ofertará un año más un programa muy completo en el cual podremos encontrarnos con: degustaciones, seminarios y eventos en vivo en abundancia, proporcionar gran experiencia de primera mano y un ambiente original y vibrante. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_2_parrafo_2"> Prowein 2027 Düsseldorf, tendrá lugar este año nuevamente en esta ciudad alemana entre los próximos días 28 al 30 de junio de 2027 en las instalaciones del recinto ferial Messe Düsseldorf. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_2_parrafo_3"> En ProWein 2027 Dusseldorf, se nos mostrarán las últimas novedades e innovaciones relacionadas con el sector, puesto que como decimos en ella se darán cita los mejores profesionales y expertos del sector, siendo para todos ellos un evento de casi inexcusable asistencia, tanto por las novedades que en él se podrán observar como por los contactos que podrán establecerse. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_2_parrafo_4"> ProWein 2027 Dusseldorf contará con la presencia de los mejores expertos del sector, no en vano es una de las ferias más importantes del mismo de cuantas de celebran en Alemania. </p>
                </div>
              </div>
            </div>

            <!-- Sección "Evento 3" -->
            <div id="event_3" class="pb-67"></div>
            <hr>
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance"><span class="fc-primary fs-h3"
                    data-i18n="pgActualidad_seccion_eventos_evento_3_titulo">
                    Feria del vino de ALSACIA 2027 </span>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_3_parrafo_1"> “Foire aux Vins d'Alsace 2027 Colmar", la Feria del vino de Alsacia, es un evento de gran importancia dentro del sector en Francia, de ahí que en este evento se den cita los mejores profesionales y expertos relacionados con el sector. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_3_parrafo_2"> Foire aux Vins d'Alsace 2027, la feria del vino de Alsacia 2027, celebrará este año una nueva edición entre los próximos días 09 al 13 de octubre de 2027 en la ciudad francesa de Colmar. Una cita que debido a su importancia se ha convertido en un evento de casi inexcusable asistencia para todos los profesionales del sector, así como para los aficionados al mismo, debido a su importancia y a los contactos que se podrán establecer por parte de los profesionales con la posible demanda. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_3_parrafo_3"> Los vinos ecológicos españoles acudirán a esta nueva edición de la “Foire aux Vins d'Alsace 2027 Colmar". La Federación Española de Empresas con Productos Ecológicos (FEPECO) está gestionando la presencia de este tipo de vinos con stand propio. El vino ecológico es uno de los productos cuyo consumo ha experimentado un mayor crecimiento en los últimos años. </p>
                  <p data-i18n="pgActualidad_seccion_eventos_evento_3_parrafo_4"> En definitiva, una feria de referencia dentro del sector en Francia, de ahí que se haya convertido en un evento de casi inexcusable asistencia para las mejores empresas y profesionales relacionados con el mismo, tanto por las novedades que en ella se podrán observar como por los contactos que se podrán establecer y conseguir. </p>
                </div>
                <div class="col-balance order-tab-1 ta-center">
                  <img src="../images/agendaImage3.jpg" alt="Feria del vino de ALSACIA 2024">
                  <span class="fc-primary fs-italic" data-i18n="pgActualidad_seccion_eventos_evento_3_imagen">
                    Feria del vino de ALSACIA 2026 </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://www.prospectmagazine.co.uk/society/48426/why-is-it-so-hard-to-describe-the-taste-of-a-wine" class="fc-secondary fc-blue" target="_blank">Prospect </a>
                    <span class="fs-derechosAutor">(21 Ene, 2016)</span>
                  </span>
                </div>
              </div>
            </div>
          </section>

          <!-- Sección "Noticias" -->
          <div id="noticias" class="pb-67"> </div>
          <section class="contained">
            <div id="new_1" class="pb-67"> </div>
            <h2 class="section-title ff-sackers" data-i18n="pgActualidad_seccion_noticias_titulo"> Noticias </h2>

            <!-- Sección "Noticia 1" -->
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance ta-center">
                  <img src="../images/noticiasImage1.jpg" alt="Momento de la cata realizada en Córdoba">
                  <span class="fc-primary fs-italic ta-center" data-i18n="pgActualidad_seccion_noticias_noticia_1_imagen">
                    Momento de la cata realizada en Córdoba </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://www.despedidasdesolterologrono.es/actividades-despedidas-soltero-logrono/vino/cata-vino-en-logrono-menu-riojano/" class="fc-secondary fc-blue" target="_blank">Despedidas de soltero Logroño </a> <span class="fs-derechosAutor" data-i18n="derechos_imagen_sin_fecha">(Sin fecha)</span>
                  </span>
                </div>
                <div class="col-balance"> <span class="fc-primary fs-h3"
                    data-i18n="pgActualidad_seccion_noticias_noticia_1_titulo">
                    Los vinos "RIBEIRA SACRA" fueron presentados en 9 ciudades andaluzas </span>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_1_parrafo_1"> La unidad móvil de "Sabores de Galicia" en la que participa la D.O Ribeira Sacra, que ampara casi un centenar de bodegas y 200 marcas comerciales de vino, ha visitado desde el inicio de la campaña -a principios de este mes de abril- un total de 9 ciudades de Andalucía: Córdoba, Sevilla, Huelva, Jerez de la Frontera, Cádiz, Marbella, Málaga, Granada y Almería. </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_1_parrafo_2"> Durante este tiempo, varios centenares de personas de estas localidades, incluyendo representantes de diferentes instituciones locales y público especializado como sumilieres o miembros de asociaciones gastronómicas, pudieron disfrutar de primera mano de las catas comentadas ofrecidas. </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_1_parrafo_3"> La campaña "Sabores de Galicia", que tendrá continuidad en la Comunidad de Murcia, pretende dar a conocer la singularidad vinícola de la Ribeira Sacra y poner en valor la tradición milenaria con la que se elaboran sus vinos, que en la actualidad cuentan con un gran prestigio en el ámbito nacional e internacional. Tras Murcia, la unidad móvil visitará diferentes ciudades de la Comunidad Valenciana para, después, continuar su periplo por otros puntos de la geografía española. </p>
                </div>
              </div>
            </div>

            <!-- Sección "Noticia 2" -->
            <div id="new_2" class="pb-67"></div>
            <hr>
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance"> <span class="fc-primary fs-h3"
                    data-i18n="pgActualidad_seccion_noticias_noticia_2_titulo">
                    Vinos de la Ribeira Sacra premiados en el 30º Concurso Internacional de Vinos de Montaña </span>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_2_parrafo_1"> A dicho certamen las bodegas de la D.O. Ribeira Sacra, catalogadas como viticultura de montaña, presentaron un total de 59 muestras, 46 muestras correspondientes a vino tinto y 13 muestras a vino blanco, principalmente de la añada de 2025, pero también se presentaron 12 muestras correspondientes a añadas anteriores. </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_2_parrafo_2"> A este concurso internacional se han presentado un total de 576 muestras procedentes de 9 países diferentes; y se han otorgado un total de 191 medallas en las diferentes categorías.
                  </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_2_parrafo_3"> No todos los países pueden presentar sus vinos a este concurso, según el reglamento del organismo internacional pueden participar en concurso: "los vinos producidos en áreas que se caracterizan por tener una viticultura de montaña o en fuerte pendiente. Su objetivo es enfatizar las características únicas de esos productos así como dar a conocer a los consumidores los aspectos culturales de la viticultura de montaña y el valioso trabajo que los viticultores hacen para la salvaguardia del territorio y del medio ambiente, para que los consumidores mismos puedan apreciar todo esto." </p>
                </div>
                <div class="col-balance order-tab-1 ta-center">
                  <img src="../images/noticiasImage2.jpg" alt="30º Concurso Internacional de Vinos de Montaña">
                  <span class="fc-primary fs-italic" data-i18n="pgActualidad_seccion_noticias_noticia_2_imagen">
                    30º Concurso Internacional de Vinos de Montaña </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://www.tecnovino.com/mondial-des-vins-extremes-2021-el-concurso-para-los-vinos-de-viticultura-heroica/" class="fc-secondary fc-blue" target="_blank">tecnovino </a>
                    <span class="fs-derechosAutor">(Jun, 2021)</span>
                  </span>
                </div>
              </div>
            </div>

            <!-- Sección "Noticia 3" -->
            <div id="new_3" class="pb-67"></div>
            <hr>
            <div>
              <div class="row flex-alig-center ta-left">
                <div class="col-balance ta-center">
                  <img src="../images/noticiasImage3.jpg" alt="Terrazas de la Ribeira Sacra">
                  <span class="fc-primary fs-italic ta-center" data-i18n="pgActualidad_seccion_noticias_noticia_3_imagen">
                    Terrazas de la Ribeira Sacra </span>
                  <br />

                  <!-- Derechos de autor -->
                  <span class="fs-derechosAutor">
                    <span data-i18n="derechos_imagen_singular">Imagen tomada de </span>
                    <a href="https://www.lavozdegalicia.es/noticia/lemos/2015/10/17/exigencias-consorcio-sobre-terrazas-afectaran-casco-viejo/0003_201510M17C19911.htm" class="fc-secondary fc-blue" target="_blank">La Voz de Galicia </a> <span class="fs-derechosAutor">(17 Oct, 2015)</span>
                  </span>
                </div>
                <div class="col-balance"><span class="fc-primary fs-h3"
                    data-i18n="pgActualidad_seccion_noticias_noticia_3_titulo"> Las terrazas de la Ribeira Sacra unifican su estética con el vino como protagonista </span>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_3_parrafo_1"> El color burdeos de los caldos será obligatorio para las sombrillas -La ordenanza busca homogeneizar colores en todos los locales y eliminar marcas publicitarias del mobiliario- </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_3_parrafo_2"> Que las terrazas de los establecimientos hosteleros no rompan el encanto paisajístico y natural de la Ribeira Sacra. Es lo que busca el Consorcio de Turismo de la Ribeira Sacra con la ordenanza reguladora que está preparando en esta materia y que se centra exclusivamente en la parte estética de estos locales de atención al público, haciendo hincapié en cuestiones de ornato y de materiales utilizados en las instalaciones. </p>
                  <p data-i18n="pgActualidad_seccion_noticias_noticia_3_parrafo_3"> El objetivo de esta ordenanza, según confirman desde el propio Consorcio de Turismo, es homogeneizar los colores en las zonas de terraza de los locales hosteleros, eliminado la mezcla de tonalidades y los colores llamativos, así como retirar las marcas publicitarias en sombrillas y en el resto del mobiliario. </p>
                </div>
              </div>
            </div>
          </section>

          <!-- Sección "Suscríbete al boletín de noticias" -->
          <div id="suscribete" class="pb-67"></div>
          <div class="subscribe bg-primary-foot"
            style="background-image: url('../images/slideImage13.jpg'); background-position: center;">
            <div class="contained row ta-center">
              <div class="col-full fc-white">
                <span class="message-form-suscribe-title" data-i18n="suscripcion_titulo">Suscríbete a nuestro boletín de noticias</span>
              </div>
              <div class="col-full">
                <form name="index-suscribe" class="message-form-suscribe" action="actualidad.php" method="POST">
                  <label for="index-subscribe-email" style="font-style: italic;" data-i18n="suscripcion_texto"> Escribe aquí tu email: </label>
                  <input type="email" name="email" style="width: 35%;" class="ml-10 mr-10" id="index-subscribe-email"
                    pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
                    title="Se admiten direcciones de correo válidas con el formato: 'nombre@dominio.extensión'."
                    autocomplete="off" required>
                  <button type="submit" class="btn-suscripcion btn-bg2 border-round" data-i18n="suscripcion_boton"> Suscríbete </button>
                </form>
              </div>
            </div>
          </div>

          <!-- Sección "Documentación" -->
          <div id="documentacion" class="pb-67">
          </div>
          <section class="contained">
            <h2 class="section-title ff-sackers" data-i18n="pgActualidad_seccion_documentacion_titulo"> Documentación </h2>
            <div class="col-full mlmr-a mt-25 ta-left">

              <!-- Sección "Legislación" -->
              <div class="col-balance flo-left mlmr-a ta-center">
                <h3 class="no-margin ff-sackers ta-left fs-h2" data-i18n="pgActualidad_seccion_legislacion_titulo">
                  Legislación </h3>
                <hr>

                <!-- Sección "Legislación - entrada 1" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_legislacion_entrada_1">
                  Pliego de condiciones de la D.O. Ribeira Sacra </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://mediorural.xunta.gal/sites/default/files/temas/agricultura/covid/PLIEGO%20DE%20CONDICIONES%20DO%20RIBEIRA%20SACRA%20TEMPORAL%20septiembre%202021.pdf"
                  class="mlmr-a" target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Legislación - entrada 2" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_legislacion_entrada_2">
                  Resolución del 24 de julio de 2012 por la que se da publicidad al pliego de condiciones de la D.O. Ribeira Sacra (DOGA 24/08/2012) </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="http://ribeirasacra.org/media/documentos/PREGOCONDICONS.pdf" target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Legislación - entrada 3" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_legislacion_entrada_3">
                  Ficha técnica D.O. Ribeira Sacra </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://mediorural.xunta.gal/sites/default/files/produtos/Ficha-tecnica-DO-Ribeira-Sacra-2021.pdf"
                  target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;">
                </a>

                <!-- Sección "Legislación - entrada 4" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_legislacion_entrada_4">
                  Procedimiento de gestión de la Certificación D.O. Ribeira Sacra </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="http://ribeirasacra.org/media/documentos/PO-04%20-%20Procedimiento%20de%20Gestion%20de%20la%20Certificacion.pdf"
                  target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Legislación - entrada 5" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_legislacion_entrada_5">
                  Reglamento de la Unión Europea sobre el etiquetado en productos con D.O. </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="http://ribeirasacra.org/media/documentos/RegUE538Etiquetado.pdf" target="_blank"
                  title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>
              </div>

              <!-- Sección "Subvenciones" -->
              <div class="col-balance flo-left mlmr-a ta-center">
                <h3 class="no-margin ff-sackers ta-left fs-h2" data-i18n="pgActualidad_seccion_subvenciones_titulo">
                  Subvenciones </h3>
                <hr>

                <!-- Sección "Subvenciones - entrada 1" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_subvenciones_entrada_1">
                  Ayudas de apoyo a la internacionalicación de la PYME española </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://ribeirasacra.org/media/documentos/BOE0804ICEX.pdf" target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Subvenciones - entrada 2" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_subvenciones_entrada_2">
                  Ayudas para el fomento de contratación de seguros agrarios </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://ribeirasacra.org/media/documentos/DOGA0604.pdf" target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Subvenciones - entrada 3" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_subvenciones_entrada_3">
                  Ayudas a los planes de restauración y reconversión da la viña en GALICIA </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://ribeirasacra.org/media/documentos/DOGA%2023%2001%20%20REEST.%20E%20RECONV.%20VINA%20AnuncioG0165-020115-0009_gl.pdf"
                  target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>

                <!-- Sección "Subvenciones - entrada 4" -->
                <p class="col-ninety ta-left mlmr-a" data-i18n="pgActualidad_seccion_subvenciones_entrada_4">
                  Ayudas para la promoción del sector vitivinícola </p>
                <span class="fw-bold" data-i18n="boton_descargar"> Descargar </span>&nbsp;
                <a href="https://ribeirasacra.org/media/documentos/09-01%20Promocion%203%BA%20paises%20AnuncioG0165-261214-0009_gl.pdf"
                  target="_blank" title="Descargar"><img src="../images/agp_studios-download-23364.gif" style="width: 30px; height: 30px;"></a>
              </div>
              <div class="broken-float">
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