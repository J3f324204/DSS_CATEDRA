<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Sala de Té - LA ROMANA</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

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



                <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <img src="assets/images/romana.png" width="450 px" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                    <div id="contact">


<?php
session_start();



if (!isset($_SESSION['reservaciones']) || count($_SESSION['reservaciones']) === 0) {
    die("No se encontraron reservaciones.");
}

// Tomar la última reservación
$reservacion = end($_SESSION['reservaciones']);

echo "<center>";
echo "<h2>Factura de Reservación</h2>";
echo "Nombre: " . htmlspecialchars($reservacion['nombre']) . " " . htmlspecialchars($reservacion['apellido']) . "<br>";
echo "Fecha y Hora: " . htmlspecialchars($reservacion['fecha_hora']) . "<br>";
echo "Cantidad de Personas: " . htmlspecialchars($reservacion['personas']) . "<br>";
echo "Correo Electrónico: " . htmlspecialchars($reservacion['correo']) . "<br>";
echo "Paquete Seleccionado: " . htmlspecialchars($reservacion['paquete']) . "<br>";
echo "Costo Total: $" . htmlspecialchars($reservacion['costo_total']) . "<br>";
echo "</center>";

// Botón para regresar al formulario principal
echo "<br>";
echo '<center><a href="index.php" class="btn btn-primary">Pagina Principal</a></center>';
?>


</div>
</div>
</div>
</div>
</div>
</section>

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



</body>
</html>