<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Background</title>
    <link href="css/index.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <header>

        <nav>
            <a href="index.html">
                <i class="fa-solid fa-house"> </i> Inicio
            </a>
            <a href="contacto.html">
                Contacto
            </a>
            <a href="oferta.html">
                Oferta
            </a>
        </nav>
    </header>
    <div class="background">

        <!--
        Background igual que el de index
    -->
    </div>

    <?php
        echo "<br><br><br><hr><h1>Hola Mundo</h1>";
        // echo json_encode($_SERVER);
        $metodo=$_SERVER['REQUEST_METHOD'];
        if ($metodo == "GET"){
            echo "<h2>Estos datos se  han enviado por GET</h2>";
        }
        if($metodo == "POST"){
            echo "<h2>Estos datos se  han enviado por POST<br>";
            echo "Tu nombre es: ".$_POST['nombre']."</h2>";
            exit;
        }
        echo "<h2>Me has llamado por el método ".$metodo."</h2>";
        exit;
    ?>
</body>

</html>