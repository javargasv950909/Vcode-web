<?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        //$asunto = $_POST['asunto'];
        $comentarios = $_POST['comentarios'];


        $header = "De: " . $email . "\r\n";
        $header .= "X-Mailer: PHP/" .phpversion();
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $mensaje = "Mensaje enviado por: " .$nombre . "\r\n";
        $mensaje .= "Correo de quien envía: " .$email . "\r\n";
        $mensaje .= "Mensaje: " . $comentarios . "\r\n";

        $email_rep = "daniel.donoso@vcode.com.co";
        $asunto = "Correo desde la página web";


        mail($email_rep, $asunto, utf8_decode($mensaje), $header);
        header("Location:https://vcode.com.co/");
?>