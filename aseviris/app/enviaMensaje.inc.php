<!-- 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
-->

<?php
require "Exception.php";
require "PHPMailer.php";
require "SMTP.php";

// Importar las clases necesarias al espacio de nombres global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Instanciar la clase; pasar "true" habilita las excepciones
$mail = new PHPMailer(true);
if (isset($_POST['message-enviar'])) {
  try {

    // Configuración del Servidor SMTP
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                  // "DEBUG_SERVER" para depurar errores
    $mail->isSMTP();                                     // Definir que se usará SMTP
    $mail->Host       = 'smtp.gmail.com';                // Servidor SMTP de salida
    $mail->SMTPAuth   = true;                            // Habilitar autenticación SMTP
    $mail->Username   = 'infoaseviris@gmail.com';        // Usuario SMTP (tu correo)
    $mail->Password   = 'cowmjyflemjkrlkt';              // Clave de aplicación)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Cifrado TLS implícito
    $mail->Port       = 587;                             // Puerto TCP (587 para TLS / 465 para SSL)

    // Destinatarios
    $user_name = $mail->Username;
    $from_name = "Info AsEViRiS";
    $address_to = "infoaseviris@gmail.com";
    $mail->setFrom($user_name, $from_name);
    $mail->addAddress($address_to);                      // Correo del receptor

    // Cuerpo del correo
    $mail->isHTML(true);                                 // Configurar formato en HTML
    $mail->Subject = $_POST['message-asunto'];
    $mail->Body .= "<h4 style='color:#901d1d;'>- Persona de contacto -</h4>";
    $mail->Body .= "<p>" . $_POST['message-nombre'] . " " . $_POST['message-apellidos'] . ".</p>";
    $mail->Body .= "<h4 style='color:#901d1d;'>- eMail -</h4>";
    $mail->Body .= "<p>" . $_POST['message-email'] . "</p>";
    $mail->Body .= "<h4 style='color:#901d1d;'>- Teléfono -</h4>";
    $mail->Body .= "<p>" . $_POST['message-telefono'] . ".</p>";
    $mail->Body .= "<h4 style='color:#901d1d;'>- Consulta -</h4>";
    $mail->Body .= "<p>" . $_POST['message-mensaje'] . "</p>";
    $mail->Body .= "<h4 style='color:#901d1d;'>- Fecha y hora del envío -</h4>";
    $mail->Body .= "<p>" . date("d-m-Y h:i:s") . ".</p>";
    //$mail->AltBody = 'Este es el texto plano para clientes de correo que no soportan HTML.';

    // Envío del correo y respuesta al usuario
    $mail->send();
    echo '<script>';
    echo 'let idioma;';
    echo 'if (localStorage.getItem("preferredLang") === null) {';
    echo 'idioma = "gl";';
    echo '} else {';
    echo 'idioma = localStorage.getItem("preferredLang");';
    echo '}';
    echo 'switch (idioma) {';
    echo 'case "gl":';
    echo 'alert("A túa mensaxe enviouse correctamente.\nPoremosnos en contacto con vostede en breve.\nGrazas por contactar connosco.");';
    echo 'break;';
    echo 'case "es":';
    echo 'alert("Su mensaje se ha enviado correctamente.\nEn breve nos pondremos en contacto con Usted.\nGracias por contactar con nosotros.");';
    echo 'break;';
    echo 'case "ca":';
    echo 'alert("El vostre missatge s\'ha enviat correctament.\nEn breu ens posarem en contacte amb vosté.\nGràcies per contactar amb nosaltres.");';
    echo 'break;';
    echo 'case "eu":';
    echo 'alert("Zure mezua arrakastaz bidali da.\nLaster jarriko gara zurekin harremanetan..\nEskerrik asko gurekin harremanetan jartzeagatik.");';
    echo 'break;';
    echo '}';
    echo 'window.location.href = "../content/contacto.php";';
    echo '</script>';
    exit;
  } catch (Exception $error) {
    echo '<script>';
    echo 'let idioma;';
    echo 'if (localStorage.getItem("preferredLang") === null) {';
    echo 'idioma = "gl";';
    echo '} else {';
    echo 'idioma = localStorage.getItem("preferredLang");';
    echo '}';
    echo 'switch (idioma) {';
    echo 'case "gl":';
    echo 'alert("Produciuse un erro ao tentar enviar a túa mensaxe: \n\n     ' . $error->getMessage() . '.\n\nTéntao de novo nuns minutos ou envía a túa consulta a infoaseviris@gmail.com.\nGrazas.");';
    echo 'break;';
    echo 'case "es":';
    echo 'alert("Se ha producido un error al tratar de enviar su mensaje: \n\n     ' . $error->getMessage() . '.\n\nInténtelo de nuevo en unos minutos o bien envíe su consulta a infoaseviris@gmail.com.\nGracias.");';
    echo 'break;';
    echo 'case "ca":';
    echo 'alert("S\'ha produït un error en intentar enviar el missatge: \n\n     ' . $error->getMessage() . '.\n\nIntenteu-ho de nou en uns minuts o bé envieu la vostra consulta a infoaseviris@gmail.com.\nGràcies.");';
    echo 'break;';
    echo 'case "eu":';
    echo 'alert("Errore bat gertatu da mezua bidaltzen saiatzean: \n\n     ' . $error->getMessage() . '.\n\nSaiatu berriro minutu batzuk barru edo bidali zure kontsulta helbide honetara infoaseviris@gmail.com.\nEskerrik asko.");';
    echo 'break;';
    echo '}';
    echo 'window.location.href = "../content/contacto.php";';
    echo '</script>';
    exit;
  }
};
?>