<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
        
    <div class="contenedor">
         
        <form class="form-contacto" method="post" action="contacto.php">
                
            
            <div class="input-campos">
          
    
                <input type="text" name="nombreU" class="input" placeholder="Nombre">
                <input type="text" name="apellido" class="input" placeholder="Apellido">
                <input type="text" name="mail" class="input" placeholder="Mail">
                <input type="text" name="asunto" class="input" placeholder="Asunto">
            </div>
            <div class="msg">
                <textarea name="msg" placeholder="Mensaje" ></textarea>
                <!-- <div class="btn">Enviar</div> -->
                <button type="submit" name="enviar" class="btn">Enviar</button>



            </div>

           
        </form>


    </div>

    <?php
                $mensaje="";
                if(isset($_GET['error'])){

                    echo '<script type="text/Javascript">
                    swal({
                        title: "Debes llenar todos lo campos!",
                        text: "Por favor llenar todos los campos!",
                        icon: "warning",
                        button: "Ok",
                      });
                    </script>';
                    
                }

                if(isset($_GET['envioExitoso'])){
                    
                    $mensaje= "Mensaje enviado exitosamente";
                    // echo '<div class="alerta-ok">'.$mensaje.'</div>';
                    echo '<script type="text/Javascript">
                    swal({
                        title: "Mensaje enviado!",
                        text: "Tu mensaje fue enviado exitosamente!",
                        icon: "success",
                        button: "Ok",
                      });
                    </script>';
                    
                   

                }

     ?>

</body>
</html>