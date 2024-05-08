<?php
session_start();

// Verificar si el índice está en la URL
if (isset($_GET['index'])) {
    $index = intval($_GET['index']);
    
    if (isset($_SESSION['reservaciones'][$index])) {
        $reservacion = $_SESSION['reservaciones'][$index];
    } else {
        die("Reservación no encontrada.");
    }
} else {
    die("Índice de reservación no proporcionado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guardar los cambios
    $_SESSION['reservaciones'][$index] = [
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'fecha_hora' => $_POST['fecha_hora'],
        'personas' => $_POST['personas'],
        'correo' => $_POST['correo'],
        'paquete' => $_POST['paquete'],
    ];

    // Redireccionar después de guardar
    header("Location: ver_todas_reservaciones.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
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
    
    

    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h2>¿Problemas con la reservación?.</h2>
                        </div>
                        <p>Puedes modificar la reservación sin ningun problema, por favor ingresa los nuevos datos.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="procesar_formulario.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Reservación</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="nombre" type="text" id="nombre" placeholder="Nombre" required value="<?php echo htmlspecialchars($reservacion['nombre']); ?>">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                  <input name="apellido" type="text" id="apellido" placeholder="Apellido" required value="<?php echo htmlspecialchars($reservacion['apellido']); ?>">
                                </fieldset>
                              </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="correo" type="email" id="correo" pattern="[^ @]*@[^ @]*" placeholder="Correo" required value="<?php echo htmlspecialchars($reservacion['correo']); ?>">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="personas" type="number" id="personas" placeholder="Cantidad de Personas" required min="1" value="<?php echo htmlspecialchars($reservacion['personas']); ?>">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                                <div id="filterDate2"> 
                                    <input type="datetime-local" id="fecha_hora" name="fecha_hora"  class="form-control" required value="<?php echo htmlspecialchars($reservacion['fecha_hora']); ?>">
                                </div>   
                            </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <select id="paquete" name="paquete" required>
                                    <option value="paquete1" <?php echo $reservacion['paquete'] === 'paquete1' ? 'selected' : ''; ?>>Paquete Parejas</option>
                                    <option value="paquete2" <?php echo $reservacion['paquete'] === 'paquete2' ? 'selected' : ''; ?>>Paquete Familiar</option>
                                    <option value="paquete3" <?php echo $reservacion['paquete'] === 'paquete3' ? 'selected' : ''; ?>>Paquete Negocios</option>
                                    <option value="paquete4" <?php echo $reservacion['paquete'] === 'paquete4' ? 'selected' : ''; ?>>Paquete Fiestero</option>
                                </select>
                              </fieldset>
                            </div>
                            <br><br>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" value="Guardar Cambios">Guardar Cambios</button>
                                <button><a href="ver_todas_reservaciones.php" class="btn btn-danger">Regresar</a></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Botón para regresar a ver todas las reservaciones -->
    <a href="ver_todas_reservaciones.php">Ver todas las reservaciones</a>
</body>
</html>
