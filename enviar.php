<?php

/**/ 
if (isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

    /**/
    $nombre = $_POST["nombre"];
    $empresa = $_POST["empresa"];
    $fecha_l = $_POST["fecha"];
    $email = $_POST["email"];
    $localidad = $_POST["localidad"];
    $fecha_p = $_POST["fecha"];
    $telefono = $_POST["telefono"];
    $provincia = $_POST["provincia"];
    $mesaje = $_POST["mesaje"];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time()) . " \r\n";

    $message .= "Su e-mail es: " . $email . " \r\n";

    $message .= "Teléfono de contacto: " . $telefono . " \r\n";

    $message .= "Localidad: " . $localidad . " \r\n";
    $message .= "Provincia: " . $provincia . " \r\n";

    $message .= "Empresa: " . $empresa . " \r\n";
    $message .= "Fecha de Llegada: " . $fecha_l . " \r\n";
    $message .= "Fecha de Partida: " . $fecha_p . " \r\n";

    $message .= "Mensaje: " . $_POST['mesaje'] . " \r\n";

    /**/

    $secret="6Ld3g0caAAAAADDeh3_LUBy89iSS1GS47fBxOixT";
    $ip = $_SERVER["REMOTE_ADDR"];

    $captcha = $_POST["g-recaptcha-response"];

    $result= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
    $array = json_decode($result,true);

    if ($array["success"]){
        $para = 'reserva@avenidahoteljunin.com.ar';
            $asunto = 'Mensaje de Reserva';

            mail($para, $asunto, utf8_decode($message), $header);

            echo"<script type=\"text/javascript\">alert('¡El correo fue enviado rectamente! Volver al inicio. '); window.location='index.php';</script>";
            
    }
    else{
        echo"<script>alert('Se ha producido un erro al marcar el reCAPTCHA, por favor vuelve a intentarlo. '); window.location='reservas.php';</script>";
    }

}

else{
    echo"<script>alert('No has marcado el reCAPTCHA, por favor vuelve a intentarlo.'); window.location='reservas.php';</script>";
}

?>