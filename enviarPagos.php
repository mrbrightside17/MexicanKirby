<?php



if(isset($_POST) && !empty($_POST)){




        $nombre = $_POST["nombre"];
        $tel    = $_POST["tel"];
        $email  = $_POST["email"];
        $direccion = $_POST["direccion"];
        $comment   = $_POST["comment"];

      
        
        $from = $email;
        $to = "alucard-25@hotmail.com";
        $subject = "Contratenos";
        $message = "Nombre: $nombre\nDireccion: $direccion\nTel: $tel\nComentario: $comment";
        $headers = "From:" . $from;
        

        
        if(mail($to,$subject,$message, $headers)){
            $respuesta["status"] ="ok";
            $respuesta["msg"] = "<p class='alert alert-success'>Nos pondremos en contacto cuanto antes<p>";
        }else{
            $respuesta["status"] ="No se pudo enviar";
            $respuesta["msg"] ="Algo salió mal con el envio";
        }
        

    

    
    
        


    
}else{
    $respuesta["status"]="POST vacio";
    $respuesta["msg"] = "No se recibieron datos";
    
}

echo json_encode($respuesta);

?>