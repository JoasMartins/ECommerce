<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar produto a venda</title>
</head>

<body>
    <container id="screenSucesso">
        <div>
            Produto adicionando a venda com sucesso!
        </div>
    </container>

    <header>

    </header>

    <main>
        <div>
            <h1>VENDER MEU PRODUTO</h1>
        </div>

        <hr />

        <form>
            <div id="texts">
                <div class="form-group" id="form-titulo">
                    <p>Nome do produto</p>
                    <input type="text" id="titulo" />
                </div>

                <div class="form-group" id="form-descricao">
                    <p>Descrição do produto</p>
                    <textarea type="text" id="descricao"></textarea>
                </div>

                <div class="form-group" id="form-preco">
                    <p>Preço</p>
                    <input type="number" id="preco" />
                </div>
            </div>

            <div id="barra"></div>

            <div id="options">
                <div class="form-group" id="form-categoria">
                    <p>Categoria</p>
                    <div>
                        <div>
                            <input type="radio" id="categoria-pescaria" name="categoria" value="Pescaria" />
                            <label for="categoria-pescaria">Pescaria</label>
                        </div>
                        <br />

                        <div>
                            <input type="radio" id="categoria-eletronicos" name="categoria" value="Eletrônicos" />
                            <label for="categoria-eletronicos">Eletrônicos</label>
                        </div>
                        <br />

                        <div>
                            <input type="radio" id="categoria-eletrodomesticos" name="categoria" value="Eletrodomésticos" />
                            <label for="categoria-eletrodomesticos">Eletrodomésticos</label>
                        </div>
                        <br />

                        <div>
                            <input type="radio" id="categoria-jogos" name="categoria" value="Jogos" />
                            <label for="categoria-jogos">Jogos</label>
                        </div>
                        <br />

                        <div>
                            <input type="radio" id="categoria-celulares" name="categoria" value="Celulares" />
                            <label for="categoria-celulares">Celulares</label>
                        </div>
                        <br />
                    </div>
                </div>

                <div class="form-group" id="form-imagem">
                    <label for="imagem">Imagem</label>
                    <input type="file" id="imagem" accept="image/png, image/jpeg, image/jpg" onchange="imagemAdd()" />
                    <img id="imagem-preview" />
                </div>
            </div>



            <button type="submit" onclick="adicionarProduto()">Adicionar produto</button>
        </form>
    </main>

    <footer>

    </footer>

    <script type="text/javascript" src="script.js">

    </script>

</body>

</html>