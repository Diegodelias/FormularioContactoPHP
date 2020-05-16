<?php



if (isset($_POST['enviar'])) {

    $NombreUsuario = $_POST['nombreU'];
    $Apellido = $_POST['apellido'];
    $Mail = $_POST['mail'];
    $Asunto = $_POST['asunto'];

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: '.$Mail."\r\n".
    'Reply-To: '.$Mail."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $Mensaje = '<html><body>';
    $Mensaje .= '<h3 style="color:#f40;">'.$NombreUsuario.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$Apellido.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$Mail.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$_POST['msg'].'</h3>';
    $Mensaje .=  '</body></html>';
    
    

    // $Mensaje = $NombreUsuario."<br>" .$Apellido. "<br> ". $Mail ."<br>". $_POST['msg'] ;



    if (empty($NombreUsuario) || empty($Mail) || empty($Asunto) || empty($NombreUsuario) || empty($Mensaje)) {

        header('location:index.php?error');
    } else {

        $to = "diegodelias@gmail.com";


        if (mail($to, $Asunto, $Mensaje,$headers)) {
            header("location:index.php?envioExitoso");
        } 
    }
} else {

    header("location:index.php");
}
