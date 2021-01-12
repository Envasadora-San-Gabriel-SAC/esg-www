<?php

    $errors         = array();      // array to hold validation errors
    $data           = array();

    if (empty($_POST['nombre']))
        $errors['nombre'] = 'Nombre es obligatorio eh.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email es obligatorio eh.';

    if (empty($_POST['tlf']))
        $errors['tlf'] = 'Teléfono es obligatorio eh.';

    if (empty($_POST['asunto']))
        $errors['asunto'] = 'Asunto es obligatorio eh.';

    if (!empty($errors)){

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        $to = "erick@eMultiplied.com";
        $subject = "Correo de Consulta de eMultiplied";

        $message = "Nombre: ".$_POST['nombre'];
        $message .= "Email: ".$_POST['email'];
        $message .= "Teléfono: ".$_POST['tlf'];
        $message .= "Asunto: ".$_POST['asunto'];

        $header = "From:".$_POST['email']." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $retval = mail ($to,$subject,$message,$header);

        if( $retval == true ) {
            //echo "Message sent successfully...";
            $data['success'] = true;
            $data['message'] = 'Enviado correctamente!';
        }else {
            $data['success'] = false;
            $data['message'] = 'Mensaje no ha sido enviado correctamente!';
        }

        // show a message of success and provide a true success variable
        //$data['success'] = true;
        //$data['message'] = 'Enviado correctamente!';
    }

    echo json_encode($data);

?>