<?php
     ini_set('display_errors', '1');
     ini_set('display_startup_errors', '1');
     error_reporting(E_ALL);
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, FETCH, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    //Recogemos todos los datos enviado por el usuario ...
     $data = json_decode(file_get_contents('php://input'), true);
     // El nombre de usuario que debe ser 
    $userguardado="ablaracurcix";
    //El password que debe ser
    $passwordguardado="123456789";
    //Extraemos de los datos el dato de nombre de usuario
    $user = $data["user"];
    //Extraemos el password enviado por el cliente
    $password = $data["password"];
    //Comprobamos que coinciden
    //Si no lo hacen
    if ($user == $userguardado && $password==$passwordguardado){
        echo "enhorabuena";
        exit;
    }else{
        http_response_code(401);
    }
    exit;