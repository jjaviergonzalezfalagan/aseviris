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
  <title data-i18n="pgDetalleBodega_titulo"> AsEViRiS / Detalle de Bodega </title>
  <link rel="preload" href="../css/styles.css" as="style">
  <link rel="preload" href="../css/bootstrap-icons.css" as="style">
  <link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap-icons.css">
  <link rel="icon" type="image/png" href="../images/favicon.png">
</head>

<body>
  <span class="fade"></span>
  <main>

    <!-- Selector de idioma -->
    <?php
    include("include/selectorIdioma.inc.html");
    ?>

    <!-- ÁREA DE CONTENIDOS -->
    <!-- Sección de información de bodegas -->
    <div class="col-full">

      <!-- Sección "Detalle de Bodega" -->
      <section>
        <?php
        require("../app/consultaDetalleDatosBodega.inc.php");
        ?>
        <img src="<?= $datosBodega["rutaLogo"] ?>" class="img-unheight mt-50 bdg-logo" alt="<?= $datosBodega["nombre"] ?>">
        <h3 class="section-title ff-sackers fc-black"><?= $datosBodega["nombre"] ?></h3>
        <table>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_localizacion">Localización:</span></strong></td>
            <td><?= $datosBodega["zona"] ?></td>
          </tr>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_superficie">Superficie:</span></strong></td>
            <td><?= $datosBodega["superficie"] ?></td>
          </tr>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_produccion">Producción:</span></strong></td>
            <td><?= $datosBodega["produccion"] ?></td>
          </tr>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_variedades_uva">Variedades de uva:</span></strong></td>
            <td><?= $datosBodega["variedadesDeUva"] ?></td>
          </tr>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_marcas_comerciales">Marcas comerciales:</span></strong></td>
            <td><?= $datosBodega["marcasComerciales"] ?></td>
          </tr>
          <tr>
            <td><strong><span data-i18n="pgDetalleBodega_premios">Premios:</span></strong></td>
            <td><?= $datosBodega["premios"] ?></td>
          </tr>
          <tr>
            <td class="ta-center"><i class="bi bi-house-door fs-h3"></i></td>
            <td><?= $datosBodega["direccion"] ?></td>
          </tr>
          <tr>
            <td class="ta-center"><i class="bi bi-globe-europe-africa fs-h3"></i></td>
            <td><a href="<?= $datosBodega["web"] ?>" target="_blank">
                <?= $datosBodega["web"] ?></a></td>
          </tr>
          <tr>
            <td class="ta-center"><i class="bi bi-mailbox-flag fs-h3"></i></td>
            <td><?= $datosBodega["email"] ?></td>
          </tr>
          <tr>
            <td class="ta-center"><i class="bi bi-telephone fs-h3"></i></td>
            <td><?= $datosBodega["telefono"] ?></td>
          </tr>
          <tr>
            <td class="ta-center"><i class="bi bi-person fs-h3"></i></td>
            <td><?= $datosBodega["personaContacto"] ?></td>
          </tr>
        </table>
        <div style="text-align: center;">
          <a onClick="window.close();" class="btn-bg1 mt-25 border-round"><span data-i18n="boton_cerrar">Cerrar</span></a>
        </div>
      </section>

      <!-- Carga de scripts -->
      <script src="../js/jquery-4.0.0.min.js"></script>
      <script src="../js/script.js"></script>
</body>

</html>