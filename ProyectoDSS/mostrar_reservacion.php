<?php
session_start();

// Mostrar datos de la última reservación
if (isset($_SESSION['reservaciones']) && count($_SESSION['reservaciones']) > 0) {
    $reservacion = $_SESSION['reservaciones'][count($_SESSION['reservaciones']) - 1];

    echo "<h2>Última Reservación</h2>";
    echo "Nombre: " . htmlspecialchars($reservacion['nombre']) . " " . htmlspecialchars($reservacion['apellido']) . "<br>";
    echo "Fecha y Hora: " . htmlspecialchars($reservacion['fecha_hora']) . "<br>";
    echo "Cantidad de Personas: " . htmlspecialchars($reservacion['personas']) . "<br>";
    echo "Correo Electrónico: " . htmlspecialchars($reservacion['correo']) . "<br>";
    echo "Paquete Seleccionado: " . htmlspecialchars($reservacion['paquete']) . "<br>";
} else {
    echo "No se encontraron datos de reservación.";
}

// Botón para regresar al formulario principal
echo '<a href="index.php">Regresar al formulario principal</a><br>';

// Botón para ver todas las reservaciones
echo '<a href="ver_todas_reservaciones.php">Ver todas las reservaciones</a>';
?>
