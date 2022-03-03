<?php
//establecemos zona horaria por defecto
date_default_timezone_set('America/Buenos_Aires');


//conexion a base de datos
$conexion = new mysqli("localhost","root","","asistencia");

// recibimos dni del alumno ingresado
$dni = $_POST['dni'];


//obtenemos fecha y hora actuales
$fecha_actual = date('y-m-d');
echo("fecha actual: ".$fecha_actual);

$hora_de_ingreso = date('h:i:s');
echo("Hora actual:". $hora_de_ingreso);

//consulta sql para registrar el ingreso
$ingreso = "INSERT INTO asistencia(fecha,hora,alumno)VALUES('$fecha_actual','$hora_de_ingreso','$dni')";

//ejecutamos la consulta de ingreso

$registro_de_ingreso = mysqli_query($conexion,$ingreso);


//regresar a página de registro
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>