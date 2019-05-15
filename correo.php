<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if (mail('golear13@gmail.com', $asunto, $mensaje)){
echo "Mail enviado de manera exitosa";

}
else {
  header("Location:errorcrr.html");
}
 ?>
