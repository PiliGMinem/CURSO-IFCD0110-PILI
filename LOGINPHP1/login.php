<?php
     /*ini_set('display_errors', '1');
     ini_set('display_startup_errors', '1');
     error_reporting(E_ALL);*/
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, FETCH, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    //Recogemos todos los datos enviado por el usuario ...
     $data = json_decode(file_get_contents('php://input'), true);
     
     //VAlores de conexión a la base de datos
     $server = 'localhost';
     $user = 'ifcd0110';
     $pass='pili2022@';
     $db = 'clase';
     if(!mysqli_connect($server, $user, $pass, $db)){
        echo '<h1>ERROR, no se ha podido conectar a la base de datos</h1>';
        http_response_code(401);
        exit;
     }
     echo "<h1>ENHORABUENA, te has conectado a la base de datos</h1>";
     exit;