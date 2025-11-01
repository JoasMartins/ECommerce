<?php

// pegar os dados do formulario enviado via POST
$body = file_get_contents("php://input");
$bodyReq = json_decode($body, true);

// pegar JSON do banco de dados 
$bancodados_arquivo = file_get_contents("../BancoDeDados.json");
$bancodados = json_decode($bancodados_arquivo, true);

$quantidade_itens = count($bancodados) - 1; // pegar quantidade de itens no banco de dados
$id = $bancodados[$quantidade_itens]["id"] + 1; // pegar quantidade de itens no bd e definir o ID como 1 a mais
$bodyReq["id"] = $id; // definindo id no novo dado

$bancodados[] = $bodyReq; // adicionar novos dados ao banco de dados
file_put_contents("../BancoDeDados.json", json_encode($bancodados, JSON_PRETTY_PRINT/* permanecer a estrutura do JSON (estético) */)); // subescrever arquivo BancoDeDados.json antigo com o novo dado adicionado

echo json_encode(["status" => "sucesso", "bancoDeDados" => json_encode($bancodados)]); // retornar novo arquivo de banco de dados
