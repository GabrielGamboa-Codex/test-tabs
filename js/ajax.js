$(document).ready(function() {
    //Carga por defecto del home al iniciar el documento
    function loadHome()
    {
        $.ajax({
            url: "views/home.php",
            success: function (data){ 
            $("#home").html(data);
            },
        });
    }
    
    //vista 1
    $("#home-tab").click(function () {
        $.ajax({
          url: "views/home.php",
          success: function (data){ 
          $("#home").html(data);
          },
      });
    });

    //vista 2
    $("#batman-tab").click(function () {
        $.ajax({
            url: "views/batman.php",
            success: function (data){ 
            $("#batman").html(data);
            },
        });
    });

    //vista 3
    $("#spawn-tab").click(function () {
        $.ajax({
            url: "views/spawn.php",
            success: function (data){ 
            $("#spawn").html(data);
            },
        });
    });

    loadHome();
});

