<?php include("../config-database.php"); ?>

<?php

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$imagem = $_POST['imagem'] ?? null;

// pasta física onde salvar imagens
$uploadsDir = __DIR__ . '/../uploads/produtos';

$imagem_db = "/imagens/produto-imagem-padrao.png";
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $origName = $_FILES['imagem']['name'];
    $ext = pathinfo($origName, PATHINFO_EXTENSION);
    $newName = uniqid('img_') . ($ext ? '.' . $ext : '');
    $dest = $uploadsDir . '/' . $newName;

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $dest)) {
        // caminho público salvo no DB - ajuste se seu projeto roda em subpasta
        $imagem_db = '/uploads/produtos/' . $newName;
    } else {
        echo json_encode(['sucesso' => false, 'error' => 'Falha ao mover arquivo']);
        exit;
    }
}

$sqlInsert = "INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `preco`, `categoria`, `imagem`) VALUES (NULL, '$titulo', '$descricao', '$preco', '$categoria', '$imagem_db');";
$resultado = $MySQLi->query($sqlInsert) or trigger_error($MySQLi->error, E_USER_ERROR);


if ($resultado) {
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode(['sucesso' => false]);
}
