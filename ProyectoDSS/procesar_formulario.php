<?php
session_start();

// Obtener precios de los paquetes
$paquetes = [
    'paquete1' => ['nombre' => 'Paquete Parejas', 'precio' => 50],
    'paquete2' => ['nombre' => 'Paquete Familiar', 'precio' => 100],
    'paquete3' => ['nombre' => 'Paquete Negocios', 'precio' => 150],
    'paquete4' => ['nombre' => 'Paquete Fiestero', 'precio' => 200],
];

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaHora = $_POST['fecha_hora'];
$personas = $_POST['personas'];
$correo = $_POST['correo'];
$paqueteSeleccionado = $_POST['paquete'];

// Obtener detalles del paquete seleccionado
$paquete = $paquetes[$paqueteSeleccionado];
$precioBase = $paquete['precio'];

// Calcular el costo total
$costoTotal = $precioBase * $personas;

// Guardar la reservación en la sesión
$reservacion = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'fecha_hora' => $fechaHora,
    'personas' => $personas,
    'correo' => $correo,
    'paquete' => $paquete['nombre'],
    'costo_total' => $costoTotal,
];

$_SESSION['reservaciones'][] = $reservacion;

// Redirigir a la página de factura para mostrar detalles
header("Location: factura.php");
exit;
