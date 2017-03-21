<?php
	//conexion a la BD
	$con = mysqli_connect("localhost", "root", "", "lacava");
	if (mysqli_connect_errno()){
		echo "no se pudo conectar a la BD" . mysqli_connect_errno();
	}
	//obtener valores del formulario
	$nombre = mysqli_real_escape_string($con, $_POST["txtNombre"]);
	$apellidos = mysqli_real_escape_string($con, $_POST["txtApellidos"]);
	$e_mail = mysqli_real_escape_string($con, $_POST["txtEmail"]);
	$telefono = mysqli_real_escape_string($con, $_POST["txtTelefono"]);
	$asistente = mysqli_real_escape_string($con, $_POST["txtAsistente"]);
	$fecha = mysqli_real_escape_string($con, $_POST["txtFecha"]);
	$hora = mysqli_real_escape_string($con, $_POST["txtHora"]);

	//inserta valores en la BD
	$sql = "INSERT INTO datos (Nombre, Apellidos, E_mail, Telefono, Asistentes, Fecha, Hora)
	VALUES ('$nombre','$apellidos','$e_mail','$telefono','$asistente','$fecha','$hora')";

	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
	}else{
		Header('Location: http://localhost/laCava/reserva.html');
	}
?>