<?php                                                                                                                                                                                           
  $name = @trim(stripslashes($_POST['nombre']));
  $email = @trim(stripslashes($_POST['email']));  
  $phone = @trim(stripslashes($_POST['telefono'])); 
  $subject = @trim(stripslashes($_POST['asunto'])); 
  $message = @trim(stripslashes($_POST['mensaje']));

  $email_from = 'propiaweb2667@gmail.com';
  $subject = 'Contacto Pagina Web 7asocial';

  $body = 'Nombre: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Telefono: ' . $phone . "\n\n" . 'Asunto: ' . $subject . "\n\n" . 'Mensaje: ' . $message. "\n\n";

  $success = @mail($email, $subject, $body, 'From: <'.$email_from.'>');


if($success){
echo "<br><div style='padding-top: 50px;padding-bottom: 50px;text-align: center;background: #4CD964;width: 300px;border-radius: 10px;margin: 0 auto;'>Message sent successfully!.</div>";

      } else {
        echo '<script type="text/javascript">document.getElementById("contenido").innerHTML = "Error al Enviar Formulario.";</script>';
      }
die;

?>