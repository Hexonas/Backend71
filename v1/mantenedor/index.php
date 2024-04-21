<?php
include_once '../version1.php';

//valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0) {
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false) {
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'mantenedor') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get){
                    /*
                    include_once 'controller.php';
                    include_once '../conexion.php';
                    $control = new Controlador();
                    $lista = $control->getAll();
                    */
                    $lista = [
                        [
                            "rut" => 11111,
                            "nombre" => "david",
                            "apellido" => "robles",
                            "fono" => 126567
                        ],
                        [
                            "rut" => 22222,
                            "nombre" => "Alejandro",
                            "apellido" => "robles",
                            "fono" => 12453567
                        ],
                        [
                            "rut" => 33333,
                            "nombre" => "Eldesco",
                            "apellido" => "Nocido",
                            "fono" => 1343467
                        ],
                    ];
                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                }else{
                    http_response_code(401);
                    echo json_encode(["Error" => "No tiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}