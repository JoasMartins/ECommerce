        async function adicionarProduto() {
            const titulo = document.getElementById('titulo').value || "a"
            const descricao = document.getElementById('descricao').value || "bb"
            //const categoria = document.querySelector('input[name="categoria"]:checked').value 
            //const imagem = document.getElementById('imagem').files[0]
            const preco = document.getElementById('preco').value || 0

            const produto = {
                titulo,
                descricao,
                //categoria,
                //imagem,
                preco: Number(preco)
            }

            const resp = await fetch("function.php", {
                method: "POST",
                body: JSON.stringify(produto)
            })
            
            const resultado = await resp.json()

        }

        function imagemAdd() {
            const imagem = document.getElementById('imagem').files[0]
            document.getElementById('imagem-preview').src = URL.createObjectURL(imagem)
        }