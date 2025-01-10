$(document).ready(function () {
    // Evento cuando se hace clic en el botón para mostrar las pestañas
    $('#loadTabs').on('click', function() {
        // Mostrar las pestañas
        $('#tabsContainer').show();
        $('#loadTabs').hide();
        $('#hideTabs').show();

        // Cargar el contenido de la pestaña activa al inicio
        var activeTab = $('button.nav-link.active').data('url');
        $('#home').load(activeTab);
        $('#menu1').load(activeTab);
        $('#menu2').load(activeTab);
    });

    // Evento cuando se hace clic en el botón para ocultar las pestañas
    $('#hideTabs').on('click', function() {
        // Ocultar las pestañas
        $('#tabsContainer').hide();
        $('#loadTabs').show();
        $('#hideTabs').hide();
    });

    // Evento cuando se muestra una nueva pestaña
    $('body').on('shown.bs.tab', 'button[data-bs-toggle="tab"]', function (e) {
        var target = $(e.target).data('bs-target'); // Obtiene el ID del div de contenido
        var url = $(e.target).data('url'); // Obtiene la URL del archivo PHP

        // Carga el contenido desde la URL en el div target
        $(target).load(url, function(response, status, xhr) {
            if (status == "error") {
                $(target).html("<p>Error al cargar el contenido: " + xhr.status + " " + xhr.statusText + "</p>");
            }
        });
    });
});
