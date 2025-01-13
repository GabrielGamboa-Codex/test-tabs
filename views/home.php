    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="form-group col-md-4">
                <label class="h4"><strong>Nombre</strong></label>
                <input class="form-control" type="text" id="name" placeholder="...">
                <div id="nameError" style="display: none; color: red;">Name invalid</div>
            </div>
            <div class="form-group col-md-4">
                <label class="h4"><strong>Apellido</strong></label>
                <input class="form-control" id="lastName" type="text" placeholder="...">
                <div id="lastNameError" style="display: none; color: red;">Last Name invalid</div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="form-group col-md-4">
                <label class="h4"><strong>Correo</strong></label>
                <input class="form-control" type="text" id="email" placeholder="example@gmail.com">
                <div id="emailError" style="display: none; color: red;">Email invalid</div>
            </div>
            <div class="form-group col-md-4">
                <label class="h4"><strong>Numero de la Suerte</strong></label>
                <input class="form-control" type="number" id="number" placeholder="123...">
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="form-group col-md-1">
                <button type="submit" id="btnEnviar" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </div>

<script>

    function validate(val1,val2,val3){
        if(val1 == "" && val2 == "" && val3 == ""){
            $("#nameError").fadeIn().show();
            $("#lastNameError").fadeIn().show();
            $("#emailError").fadeIn().show();
        }
        else if (val2 == "" && val3 == "")
        {
            $("#nameError").fadeOut();
            $("#lastNameError").fadeIn().show();
            $("#emailError").fadeIn().show();
        }
        else if(val3 == "" && val1 == "")
        {
            $("#nameError").fadeIn().show();
            $("#lastNameError").fadeOut();
            $("#emailError").fadeIn().show();
        }
        else if(val1 == "" && val2 == "")
        {
            $("#nameError").fadeIn().show();
            $("#lastNameError").fadeIn().show();
            $("#emailError").fadeOut();
        }
        else if(val1 == "" && !val2 == "" && !val3 == "")
        {
            $("#nameError").fadeIn().show();
            $("#lastNameError").fadeOut();
            $("#emailError").fadeOut();
        }
        else if(!val1 == "" && val2 == "" && !val3 == "")
        {
            $("#nameError").fadeOut();
            $("#lastNameError").fadeIn().show();
            $("#emailError").fadeOut();
        }
        else if(!val1 == "" && !val2 == "" && val3 == "")
        {
            $("#nameError").fadeOut();
            $("#lastNameError").fadeOut();
            $("#emailError").fadeIn().show();
        }
        else{
            $("#nameError").fadeOut();
            $("#lastNameError").fadeOut();
            $("#emailError").fadeOut();
        }
    }
       

 $(document).ready(function(){
    $("#btnEnviar").click(function(){
        var nombre = $("#name").val();
        var lastName = $("#lastName").val()
        var email = $("#email").val();
         
        validate(nombre,lastName, email);
    });
    
 });
</script>


