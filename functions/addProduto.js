function adicionarProduto() {
    const titulo = document.getElementById('titulo').value
    const descricao = document.getElementById('descricao').value
    const categoria = document. querySelector('input[name="categoria"]:checked').value
    const imagem = document.getElementById('imagem').files[0]
    const preco = document.getElementById('preco').value

    const produto = {
        titulo,
        descricao,
        categoria,
        imagem,
        preco: Number(preco)
    }

    fetch('functions/addProduto.php')
    .then(data => {
        let json = data
        console.log(json)
    })
}

function imagemAdd() {
    const imagem = document.getElementById('imagem').files[0]
    document.getElementById('imagem-preview').src = URL.createObjectURL(imagem)
}