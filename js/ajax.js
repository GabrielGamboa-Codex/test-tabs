$(document).ready(function() {
  
    function cargaVista($contenido){
        $.ajax({
            url: "views/"+$contenido+".php",
            success: function (data){ 
            $("#"+$contenido).html(data);
            },
        });
    }
    //vista 1
    $("#home-tab").click(function () {
        cargaVista("home");
    });

    //vista 2
    $("#batman-tab").click(function () {
        cargaVista("batman");
    });

    //vista 3
    $("#spawn-tab").click(function () {
        cargaVista("spawn");
    });

    cargaVista('home');
});

