<?php


		
	$nombre= strip_tags($_POST["nombre"]);
	$email= strip_tags($_POST["email"]);
	$texto = strip_tags($_POST["texto"]);
		
		//datos de correo

	$cabeceras  = "MIME-Version: 1.0\r\n"; 
	$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras .= "From: Mensaje desde la WEB de Garden Restaurante <rios@riosramirez.com>\r\n";

	$titulo = "Mensaje desde la Web de RIOS RAMIREZ";
	$correo= "desarrollo@geodreamspro.com";
	//$correo= "desarrollo@geodreamspro.com, administracion@indresa.com";

	$asunto="Envio desde formulario web de la pagina de GARDEN";

	$mensaje="Nombre:" . $nombre . "<br>";
	$mensaje.="Email: " . $email . "<br>";
	$mensaje.="Mensaje: " .$texto."<br>";

		
		
	mail($correo,$titulo, $mensaje, $cabeceras );
	header('Location: ../gracias.html'); 
		
		



	



?>