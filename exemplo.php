<?php
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once "configs/utils.php";
require_once "configs/methods.php";


$frutas = ["Abacaxi", "Maca", "Pera", "Uva"];
$qtde = [10, 20, 30, 40];
$mensagem = [];
for($i=0; $i<count($frutas); $i++) {
    $mensagem[] = array(
    "nome" => $frutas[$i],
    "quantidade" => $qtde[$i]
    );
}

if (isMetodo("GET")) {
    echo json_encode($mensagem);
    $msg = ["status" => "Sistema executando corretamente!"];
    responder(200, $msg);
}
