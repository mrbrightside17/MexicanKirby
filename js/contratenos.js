$(document).ready(init);

function init(){
    $("#enviar").click(getDataSend)
}


function getDataSend(){
    data = getData();
    if(data!=""){
        send(data);
    }else{
        $("#res").html("<p class='alert alert-danger'>Por favor llene los datos correctamente</p>");
    }
}

function getData(){
    nombre = $("#nombre").val();
    telefono = $("#telefono").val();
    email = $("#email").val();
    direccion = $("#direccion").val();
    comment = $("#comment").val();

    isCorrect = true;


    patronNumeros = /[0-9]/;//Para validar si solo hay numeros
    patronCorreos = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

    if(nombre==""){
        $("#nombre").css("border", "1px solid red");
        $("#nombre").css("background-color", "rgba(200,0,0,0.1)");
        $("#nombre").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    }else{
        $("#nombre").css("border", "1px solid green");
        $("#nombre").css("background-color", "rgba(0,200,0,0.1)");
        $("#nombre").css("color", "rgba(0,150,0,1)");
    }
    
    
    


    if (telefono == "") {
        $("#telefono").css("border", "1px solid red");
        $("#telefono").css("background-color", "rgba(200,0,0,0.1)");
        $("#telefono").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    } else if (!patronNumeros.test(telefono)) {
        $("#telefono").css("border", "1px solid red");
        $("#telefono").css("background-color", "rgba(200,0,0,0.1)");
        $("#telefono").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    } else {
        $("#telefono").css("border", "1px solid green");
        $("#telefono").css("background-color", "rgba(0,200,0,0.1)");
        $("#telefono").css("color", "rgba(0,150,0,1)");
    }

    
    if (email == "") {
        $("#email").css("border", "1px solid red");
        $("#email").css("background-color", "rgba(200,0,0,0.1)");
        $("#email").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    } else if (!patronCorreos.test(email)) {
        $("#email").css("border", "1px solid red");
        $("#email").css("background-color", "rgba(200,0,0,0.1)");
        $("#email").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    } else {
        $("#email").css("border", "1px solid green");
        $("#email").css("background-color", "rgba(0,200,0,0.1)");
        $("#email").css("color", "rgba(0,150,0,1)");
    }





    if (direccion == "") {
        $("#direccion").css("border", "1px solid red");
        $("#direccion").css("background-color", "rgba(200,0,0,0.1)");
        $("#direccion").css("color", "rgba(150,0,0,1)");
        isCorrect = false;
    } else {
        $("#direccion").css("border", "1px solid green");
        $("#direccion").css("background-color", "rgba(0,200,0,0.1)");
        $("#direccion").css("color", "rgba(0,150,0,1)");
    }





    


    if(isCorrect){
        data = {
            "nombre":nombre,
            "tel":telefono,
            "email":email,
            "direccion":direccion,
            "comment":comment
        };

        return data;
    }

    return "";
        
}

function send(datos){

    
    $.ajax({
        url: 'enviarContratenos.php',
        type: 'post',
        dataType: 'json',
        data: datos,
        success: function (res) {

            if(res.status == "ok")
                $("#res").html(res.msg);
            else{
                $("#res").html("<p class='alert alert-danger'>Algo salió mal, intentelo de nuevo</p>");
                console.log(res);
            }

            setTimeout(function () {
                $("#res").fadeOut();
            }, 2000);        
            setTimeout(function () {
                $("#res").html("");
                $("#res").css("display", "block");
            }, 2800);       
        },
        error: function(err){
            console.log("Error:");
            console.log(err);
        }
    });
}