<?php
	$auto = $_POST['step-2-modelo'];
	$fecha = $_POST['step-2-date'];
	$nombre = $_POST['step-2-name'];
	$apellido = $_POST['step-2-lastname'];
	$mail = $_POST['step-2-email'];
	$telefono = $_POST['step-2-tel'];
	$noticias = $_POST['chk-newsletter'];
	$concesionaria = $_POST['step-2-consec'];

	if ($noticias == "on") {
		$suscripcion = "Si quiere";
	} else if ($noticias == "") {
		$suscripcion = "No quiere";
	}


// El mensaje
$from = $mail;

$mensaje = "Asunto: Solicitud de prueba de manejo\n\n";
	$mensaje .= "Nombre(s) : " .$nombre. "\n";
	$mensaje .= "Apellido(s) : " .$apellido. "\n";
	$mensaje .= "Correo Electr�nico: " .$mail. "\n";
	$mensaje .= "Telefono : " .$telefono. "\n";
	$mensaje .= "Modelo : " .$auto. "\n";
	$mensaje .= "Concesionaria: " .$concesionaria. "\n";
	$mensaje .= "Fecha para prueba : " .$fecha. "\n";
	$mensaje .= "Desea recibir noticias: " .$suscripcion. "\n";

$header = "From:".$nombre."<" . $from. ">\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=iso-8859-1" ; //optional headerfields

// En caso de que cualquier l�nea tenga m�s de 70 caracteres, habr�a
// que usar wordwrap()
$mensaje = wordwrap($mensaje, 70);
//$correos = $mail."tianar1@hotmail.com";

// Enviar
mail("rrivas@suzukimorelia.com.mx", 'Mensaje de la pagina de internet Suzuki Morelia', $mensaje, $header) or die("�Error!");
header ("location: index.html");
?>
