<?php

// pegar JSON do banco de dados 
$bancodados_arquivo = file_get_contents("../BancoDeDados.json");
$bancodados = json_decode($bancodados_arquivo, true);

echo json_encode(["database"=> $bancodados]);