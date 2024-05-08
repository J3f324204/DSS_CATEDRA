<?php
session_start();

// Verificar si el índice está en la URL
if (isset($_GET['index'])) {
    $index = intval($_GET['index']);

    if (isset($_SESSION['reservaciones'][$index])) {
        // Eliminar la reservación
        unset($_SESSION['reservaciones'][$index]);

        // Reindexar el array para mantener la coherencia
        $_SESSION['reservaciones'] = array_values($_SESSION['reservaciones']);

        // Redireccionar después de eliminar
        header("Location: ver_todas_reservaciones.php");
        exit;
    } else {
        die("Reservación no encontrada.");
    }
} else {
    die("Índice de reservación no proporcionado.");
}
