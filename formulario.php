<!DOCTYPE html>
<head>
    <title>Menú para las tareas de PHP INTRO</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<html>
    <body class="index-page">
        <ul>
            <li><a href="holamundo.php">holamundo</a></li>
            <li><a href="variables.php">variables</a></li>
            <li><a href="operadores.php">operadores</a></li>
            <li><a href="estructuras.php">estructuras</a></li>
            <li><a href="funciones.php">funciones</a></li>
            <li><a href="array.php">array</a></li>
            <li><a href="formulario.php">formulario</a></li>
            <li><a href="mysqli.php">msqli</a></li>
        </ul>
        <h1>CONTENIDO</h1>
        <form action="procesar.php" method="post">
            NOMBRE: <input type="text" name="nombre"><br>
            EDAD: <input type="number" name="edad"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            //HOLA
        ?>
    </body>
</html>