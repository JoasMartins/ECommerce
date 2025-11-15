async function adicionarProduto() {
    const titulo = document.getElementById('titulo').value
    const descricao = document.getElementById('descricao').value
    const categoria = document.querySelector('input[name="categoria"]:checked')?.value
    const imagem = document.getElementById('imagem').files[0]
    const preco = document.getElementById('preco').value

    if (!titulo || !descricao || !preco || !categoria) return window.alert("Preencha todos os campos")

    const formData = new FormData();
    formData.append('titulo', titulo);
    formData.append('descricao', descricao);
    formData.append('categoria', categoria);
    formData.append('preco', preco); 
    if (imagem) formData.append('imagem', imagem);

    const resp = await fetch('function.php', {
      method: 'POST',
      body: formData
    });

    const resultado = await resp.json();

    if (resultado.sucesso) {
        document.getElementById('screensucesso').style.display = 'flex'
    } else {
        alert("Ocorreu um erro ao adicionar o produto a venda. Tente novamente.")
    }



}

function imagemAdd() {
    const imagem = document.getElementById('imagem').files[0]
    document.getElementById('imagem-preview').src = URL.createObjectURL(imagem)
}