/* 
 *  Proyecto del Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web
 *  J.Javier González Falagán
 *  ue47292@edu.xunta.gal
 *  CIFP A Carballeira-Marcos Valcárcel
 *  Ourense, diciembre 2026
*/

document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const btn = document.getElementById("btn-accept-cookies");

    // Verifica si ya existe la aceptación en el almacenamiento local
    if (!localStorage.getItem("cookies-aceptadas")) {
        banner.style.display = "flex";
    }
    btn.addEventListener("click", function () {

        // Guarda la preferencia y oculta el banner
        localStorage.setItem("cookies-aceptadas", "true");
        banner.style.display = "none";
    });
});

$(document).ready(function () {

    // 1. Definir idioma por defecto o recuperar del localStorage
    const savedLang = localStorage.getItem('preferredLang') || 'gl';

    // Establecer el select en el idioma actual
    $('#language-switcher').val(savedLang);

    // Cargar el idioma inicial
    loadLanguage(savedLang);

    // 2. Evento al cambiar el selector de idioma
    $('#language-switcher').on('change', function () {
        const selectedLang = $(this).val();
        localStorage.setItem('preferredLang', selectedLang); // Guardar preferencia
        loadLanguage(selectedLang);
    });

    // 3. Función para cargar y aplicar las traducciones
    function loadLanguage(lang) {
        $.getJSON(`../lang/${lang}.json`, function (data) {
            $('[data-i18n]').each(function () {
                const key = $(this).data('i18n');
                if (data[key]) {

                    // Si el elemento es un input o tiene placeholder, podrías adaptarlo
                    $(this).text(data[key]);
                }
            });

            // Opcional: Cambiar el atributo lang del HTML para SEO/Accesibilidad
            $('html').attr('lang', lang);
        }).fail(function () {
            console.error("No se pudo cargar el archivo de idioma: " + lang);
        });
    }
})

function enviarFormulario() {
    alert("\nSus datos han sido enviados correctamente. \n \nGracias por ponerse en contacto con nosotros.");
};

function enviarSuscripcion() {
    alert("\nSus datos han sido enviados correctamente. \n \nGracias por suscribirse a nuestro boletín de noticias.");
};