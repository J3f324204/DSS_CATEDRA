<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Sala de Té - LA ROMANA</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    
    </head>
    
    <body>
    
    
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Principio</a></li>
                            <li class="scroll-to-section"><a href="ver_todas_reservaciones.php">Bitacora</a></li> 
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


<br><br><br><br>

<?php
session_start();

echo "<center><h2>Todas las Reservaciones</h2></center>";


echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>Reservacion</th>";
echo "<th scope='col'>Nombre</th>";
echo "<th scope='col'>Fecha y Hora</th>";
echo "<th scope='col'>Cantidad de Personas</th>";
echo "<th scope='col'>Correo Electronico</th>";
echo "<th scope='col'>Paquete Seleccionado</th>";
echo "<th scope='col'>Costo Total</th>";
echo "<th scope='col'>Otros</th>";
echo "</tr>";

if (isset($_SESSION['reservaciones']) && count($_SESSION['reservaciones']) > 0) {
    foreach ($_SESSION['reservaciones'] as $index => $reservacion) {
        
        echo "<tbody>";
        echo "<tr>";
        echo "<th scope='row'> " . ($index + 1) . "</th>";
        echo "<td>" . htmlspecialchars($reservacion['nombre']) . " " . htmlspecialchars($reservacion['apellido']) . "</td>";
        echo "<td> " . htmlspecialchars($reservacion['fecha_hora']) . "</td>";
        echo "<td>" . htmlspecialchars($reservacion['personas']) . "</td>";
        echo "<td>" . htmlspecialchars($reservacion['correo']) . "</td>";
        echo "<td>" . htmlspecialchars($reservacion['paquete']) . "</td>";
        echo "<td> $" . htmlspecialchars($reservacion['costo_total']) . "</td>";

        // Botón para editar la reservación
        echo '<td><a href="editar_reservacion.php?index=' . $index . '" >Editar</a> </td>';

        // Botón para eliminar la reservación
        echo '<td><a href="eliminar_reservacion.php?index=' . $index . '" >Eliminar</a></td>';


    }
} else {
    echo "No se encontraron reservaciones.";
}



?>

</body>

        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

</html>

<br><br><br><br>