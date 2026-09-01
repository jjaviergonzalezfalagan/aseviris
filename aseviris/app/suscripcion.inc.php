<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php
if (isset($_POST["email"])) {
    require "../app/conexionMySQL.inc.php";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $email = $_POST["email"];
        $conexion = conexion();
        $sql = "INSERT INTO emails (email) VALUES ('$email')";
        $conexion->query($sql);
        echo '<script>';
        echo 'let idioma;';
        echo 'if (localStorage.getItem("preferredLang") === null) {';
        echo 'idioma = "gl";';
        echo '} else {';
        echo 'idioma = localStorage.getItem("preferredLang");';
        echo '}';
        echo 'switch (idioma) {';
        echo 'case "gl":';
        echo 'alert("Os teus datos enviáronse correctamente.\nGrazas por subscribirte ao noso boletín de novas.");';
        echo 'break;';
        echo 'case "es":';
        echo 'alert("Sus datos han sido enviados correctamente.\nGracias por suscribirse a nuestro boletín de noticias.");';
        echo 'break;';
        echo 'case "ca":';
        echo 'alert("Les vostres dades han estat enviades correctament.\nGràcies per subscriure\'s al nostre butlletí de notícies.");';
        echo 'break;';
        echo 'case "eu":';
        echo 'alert("Zure datuak arrakastaz bidali dira.\nEskerrik asko gure buletinera harpidetzeagatik.");';
        echo 'break;';
        echo '}';
        echo 'window.location.href = "";';
        echo '</script>';
        $conexion->close();
        exit;
    } catch (mysqli_sql_exception $error) {
        echo '<script>';
        echo 'let idioma;';
        echo 'if (localStorage.getItem("preferredLang") === null) {';
        echo 'idioma = "gl";';
        echo '} else {';
        echo 'idioma = localStorage.getItem("preferredLang");';
        echo '}';
        echo 'switch (idioma) {';
        echo 'case "gl":';
        echo 'alert("Produciuse un erro ao tentar enviar os teus datos: \n\n     ' . $error->getMessage() . '.\n\nComproba o enderezo de correo electrónico que introduciches e téntao de novo dentro duns minutos.\nGrazas.");';
        echo 'break;';
        echo 'case "es":';
        echo 'alert("Se ha producido un error al tratar de enviar sus datos: \n\n     ' . $error->getMessage() . '.\n\nRevise la dirección de correo introducida e inténtelo de nuevo pasados unos minutos.\nGracias.");';
        echo 'break;';
        echo 'case "ca":';
        echo 'alert("\nS\'ha produït un error en intentar enviar les vostres dades: \n\n     ' . $error->getMessage() . '.\n\nReviseu l\'adreça de correu introduïda i torneu-ho a provar uns minuts.\nGràcies.");';
        echo 'break;';
        echo 'case "eu":';
        echo 'alert("\nErrore bat gertatu da zure datuak bidaltzen saiatzean: \n\n     ' . $error->getMessage() . '\n\nBegiratu sartu duzun helbide elektronikoa eta saiatu berriro minutu batzuk barru.\nEskerrik asko.");';
        echo 'break;';
        echo '}';
        echo 'window.location.href = "";';
        echo '</script>';
        exit;
    }
}
?>