<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fond nav -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!-- fond slaider -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/fullstack.css">
    <!-- iconos -->
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="icon" href="view/img/logoMin1.png">
    <title>FullStack</title>
</head>
<body>

    <?php
            if(isset($_GET["ruta"]) && ($_GET["ruta"]=="login" || $_GET["ruta"]=="registrar")){

                include 'modulos/'.$_GET["ruta"].'.php';

            }else{

            include 'modulos/cabezote.php';


            if(isset($_GET["ruta"])){

                if($_GET["ruta"]=="inicio"  ||  $_GET["ruta"]=="blog" || $_GET["ruta"]=="login" || $_GET["ruta"]=="cerrar"){

                    include "modulos/".$_GET["ruta"].".php";

                }else{

                    include 'modulos/404.php';

                }

            }else{

                include 'modulos/inicio.php';

            }

            include 'modulos/footer.php';
            
        }
    ?>

    
    

    <script src="view/js/jquery.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
</body>
</html>