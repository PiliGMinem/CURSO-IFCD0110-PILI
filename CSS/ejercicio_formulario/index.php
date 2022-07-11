<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio formulario</title>
</head>


<body>
    <?php if (isset($_POST['nombre'])) { ?>
        <button onclick="javascript:history.back();">
            << Volver</button>
                <!--HTML-->
                <ul>
                    <li>Nombre: <b><?php echo $_POST['nombre']; ?></b></li>
                    <li>Edad: <b><?php echo $_POST['nombre']; ?></b></li>
                    <li>Email: <b><?php echo $_POST['email']; ?></b></li>
                    <li>Telefono: <b><?php echo $_POST['tel']; ?></b></li>
                    <li>Curso: <b><?php echo $_POST['curso']; ?></b></li>
                    <li>Ganas: <b><?php echo $_POST['cuantoganas']; ?></b></li>
                    <li>Gastas: <b><?php echo $_POST['cuantogastas']; ?></b>
                        <ul>
                            <li>Te queda: <b></b><?php echo $_POST['cuantoganas'] - $_POST['cuantogastas']; ?></li>
                        </ul>
                    </li>

                <?php
            } else { ?>
                </ul>
                <!--HTML Mostramos el formulario. Es action "/" o "index.php" es decir; el propio archivo en donde estamos-->
                <form target="_self" name="form" id="form" action="index.php" method="post">
                    <h2>Envíanos tus datos</h2>
                    <h1>Cubre el formulario</h1>
                    <li>
                        <label for="nombre"><span class="required">*</span> Tu nombre</label><br>
                        <input type="text" name="nombre" id="nombre" required>
                    </li>
                    <li>
                        <label for="edad">Tu edad</label><br>
                        <input type="number" name="edad">
                    </li>
                    <li>
                        <label for="cuantoganas">Cuanto ganas</label><br>
                        <input type="number" name="cuantoganas">
                    </li>
                    <li>
                        <label for="cuantogastas">Cuanto gastas</label><br>
                        <input type="number" name="cuantogastas">
                    </li>
                    <li>
                        <label for="email"><span class="required">*</span> Email</label><br>
                        <input type="email" name="email" id="email" required>

                    </li>
                    <li>
                        Teléfono <br>(formato xxx yyy zzz):<br>
                        <input type="tel" name="tel">
                    </li>
                    <li>

                        ¿Qué curso quieres?
                        <label for="curso">Elige uno</label>

                        <select name="curso" id="curso">
                            <option value="">Elige uno...</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JS" selected>JAVASCRIPT</option>
                        </select>
                    </li>
                    <li>
                        <input type="submit" name="Enviar" value="Enviar">
                    </li>
                </form>
            <?php } ?>
</body>

</html>