<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrinho</title>
</head>

<body>
    <?php include("../componentes/header.php"); ?>

    <main>
        <h1>Carrinho</h1>
        <hr />

        <div id="container">
            <div id="produtos">
                <?php
                include("../config-database.php");

                $sql = "SELECT * FROM `carrinho`";
                $resultado = $MySQLi->query($sql) or trigger_error($MySQLi->error, E_USER_ERROR);

                while ($item = $resultado->fetch_object()) {
                    $id = $item->id;

                    $sqlBuscarProduto = "SELECT * FROM `produtos` WHERE id = '$id'";
                    $item = $MySQLi->query($sqlBuscarProduto) or trigger_error($MySQLi->error, E_USER_ERROR);

                    $produto = mysqli_fetch_array($item);
                    $produtoNome = $produto['produtoNome'];
                    $produtoPreco = $produto['produtoPreco'];
                    $produtoImagem = $produto['produtoImagem'];

                    echo "<div class='produto-carrinho'>";
                    echo "<img src='../$produtoImagem' alt='$produtoImagem'/>";
                    echo "<div>";
                    echo "<p id='nome-produto'>$produtoNome</p>";
                    echo "<button>EXCLUIR</button>";
                    echo "</div>";
                    echo "<p id='preco-produto'>R$ $produtoPreco</p>";
                    echo "</div>";
                }

                ?>
            </div>
            
            <div id="barra"></div>

            <div>
                <h2>Resumo da compra</h2>
                <hr />
                <div>
                    <p>Produtos:</p>
                    <p>R$ XX,XX</p>
                </div>
                <div>
                    <p>Produtos:</p>
                    <p>Calcular</p>
                </div>
                <div>
                    <p>Desconto:</p>
                    <p>R$ XX,XX</p>
                </div>
                <hr />
                <div>
                    <p>Total:</p>
                    <p>R$ XX,XX</p>
                </div>
                <button>Comprar</button>
            </div>
        </div>
    </main>
</body>

</html>