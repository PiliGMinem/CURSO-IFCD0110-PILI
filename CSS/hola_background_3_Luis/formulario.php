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
            echo "<h2>Estos datos se  han enviado por GET<br>
             Tu nombre es: ".$_GET['nombre']."<br>
             Tu edad es: ".$_GET['edad']."</br>
             Tu email es: ".$_GET['email']."</br>
             Tu teléfono es: ".$_GET['tel']."</br>
             Cómo vienes: ".$_GET['comoviene']."</h2>";
            exit;
        }
        if($metodo == "POST"){
            echo "<h2>Estos datos se  han enviado por POST<br>
             Tu nombre es: ".$_POST['nombre']."<br>
             Tu edad es: ".$_POST['edad']."</br>
             Tu email es: ".$_POST['email']."</br>
             Tu teléfono es: ".$_POST['tel']."</br>
             Cómo vienes: ".$_POST['comoviene']."</h2>";
            exit;
        }
        echo "<h2>Me has llamado por el método ".$metodo."</h2>";
        exit;
    ?>
</body>

</html>