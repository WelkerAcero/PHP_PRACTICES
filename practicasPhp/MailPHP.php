
<?php

$destinatario = "welkerperez97@mail.com";
$asunto = "Correo electrónico enviado desde PHP";
$mensaje = "Esta es una prueba de envío.";

mail($destinatario, $asunto, $mensaje);


/* Cabeceras adicionales como parámetro
extra:
Adicionalmente, pueden sumarse a la función mail()
cabeceras adicionales a ser enviadas. Estas cabeceras, pueden
utilizarse para agregar destinatarios con cocopia, con copia
oculta, dirección de respuesta, remitente, tipo de contenido,
etc. */

$destinatario = "welkerperez97@gmail.com";
$asunto = "Correo electrónico enviado desde PHP";
$mensaje = "Esta es una prueba de envío.";
$cabeceras_adicionales = "From: Ana María López <anita@mail.com>\r\n";
$cabeceras_adicionales .= "Reply-to: Rocío Irao <rocio@mail.com>\r\n";
$cabeceras_adicionales . "Cc: Ariel Domingo <ariel@mail.com>\r\n";
$cabeceras_adicionales .= "Bcc: Supervisor <admin@mail.com>\r\n";
mail($destinatario, $asunto, $mensaje);

if(mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "El e-mail se ha enviado satisfactoriamente.";
}else {
    echo "Se ha producido un error al intentar enviar el e-mail";
}

#===================================/* Enviando mensajes en formato HTML */=====================================================================



/* Para poder enviar un mensaje con formato HTML desde PHP,
solo será necesario, agregar en las cabeceras del correo
electrónico, el Content-type correspondiente: */

$destinatario = "user@mail.com";
$asunto = "Correo electrónico enviado desde PHP";

$mensaje = "<p><a href='http://es.wikipedia.org/wiki/Lorem_ipsum'>Lorem
ipsum</a> ad his scripta blandit partiendo, eum fastidii accumsan euripidis
in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, <b>quo dicit
ridens inciderint id</b>. Quo mundi lobortis reformidans eu, legimus senserit
definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert
percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem
dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.</p>";

$cabeceras_adicionales = "MIME-Version: 1.0\r\n";
$cabeceras_adicionales .= "Content-type: text/html; charset=utf-8\r\n";
$cabeceras_adicionales .= "From: Ana María López <anita@mail.com>\r\n";
$cabeceras_adicionales .= "Reply-to: Rocío Irao <rocio@mail.com>\r\n";
$cabeceras_adicionales .= "Cc: Ariel Domingo <ariel@mail.com>\r\n";
$cabeceras_adicionales .= "Bcc: Supervisor <admin@mail.com>\r\n";
if(mail($destinatario, $asunto, $mensaje, $cabeceras_adicionales)) {
echo "El e-mail se ha enviado satisfactoriamente.";
} else {
echo "Se ha producido un error al intentar enviar el e-mail";
}

?>