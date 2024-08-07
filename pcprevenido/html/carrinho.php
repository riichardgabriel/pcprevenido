<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Carrinho</title>
</head>
<body>
    <div class="carrinho">
        <div class="cabecalho-carrinho">
            <button>
                <i class="bx bx-chevron-left"></i>
            </button>
            <h3>Meu Carrinho</h3>
        </div>
        <ul>
            <li class="carrinho-item">
                <div class="imagem">
                    <img src="../img/manutencaocarrinhooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Manutenção Preventiva</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <i class="bx bx-minus"></i>
                                <span>1</span>
                            <i class="bx bx-plus"></i>
                        </div>
                    </div>
                </div>
            </li>

            <li class="carrinho-item">
                <div class="imagem">
                    <img src="../img/consertocarrinhoooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Conserto</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <i class="bx bx-minus"></i>
                                <span>1</span>
                            <i class="bx bx-plus"></i>
                        </div>
                    </div>
                </div>
            </li>

            <li class="carrinho-item">
                <div class="imagem">
                    <img src="../img/formatacaophotoshop.png" alt="...">
                </div>
                <div class="info">
                    <h4>Formatação</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <i class="bx bx-minus"></i>
                                <span>1</span>
                            <i class="bx bx-plus"></i>
                        </div>
                    </div>
                </div>
            </li>

            <li class="carrinho-item">
                <div class="imagem">
                    <img src="../img/instalacaocarrinhooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Instalação</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <i class="bx bx-minus"></i>
                                <span>1</span>
                            <i class="bx bx-plus"></i>
                        </div>
                    </div>
                </div>
            </li>

            <li class="carrinho-item">
                <div class="imagem">
                    <img src="../img/montarcarrinhooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Montagem</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <i class="bx bx-minus"></i>
                                <span>1</span>
                            <i class="bx bx-plus"></i>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <button class="pagar">Total: R$600,00</button>

    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Carrinho</title>
    <style>
        /* Estilos adicionais podem ser colocados aqui, se necessário */
    </style>
</head>
<body>
    <div class="carrinho">
        <div class="cabecalho-carrinho">
            <button id="btnVoltar">
                <i class="bx bx-chevron-left"></i>
            </button>
            <h3>Meu Carrinho</h3>
        </div>
        <ul id="listaProdutos">
            <li class="carrinho-item" data-preco="120.00">
                <div class="imagem">
                    <img src="../img/manutencaocarrinhooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Manutenção Preventiva</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <button class="btnMinus"><i class="bx bx-minus"></i></button>
                            <span class="quantidade">0</span>
                            <button class="btnPlus"><i class="bx bx-plus"></i></button>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Repita o bloco <li> para cada produto no carrinho -->
                
                <li class="carrinho-item" data-preco="120.00">
                    <div class="imagem">
                        <img src="../img/consertocarrinhoooooooo.png" alt="...">
                    </div>
                    <div class="info">
                        <h4>Conserto</h4>
                        <div class="preco">
                            <p>R$ 120,00</p>
                            <div class="contador">
                                <button class="btnMinus"><i class="bx bx-minus"></i></button>
                                <span class="quantidade">0</span>
                                <button class="btnPlus"><i class="bx bx-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="carrinho-item" data-preco="120.00">
                    <div class="imagem">
                        <img src="../img/formatacaophotoshop.png" alt="...">
                    </div>
                    <div class="info">
                        <h4>Formatação</h4>
                        <div class="preco">
                            <p>R$ 120,00</p>
                            <div class="contador">
                                <button class="btnMinus"><i class="bx bx-minus"></i></button>
                                <span class="quantidade">0</span>
                                <button class="btnPlus"><i class="bx bx-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="carrinho-item" data-preco="120.00">
                    <div class="imagem">
                        <img src="../img/instalacaocarrinhooooooo.png" alt="...">
                    </div>
                    <div class="info">
                        <h4>Instalação</h4>
                        <div class="preco">
                            <p>R$ 120,00</p>
                            <div class="contador">
                                <button class="btnMinus"><i class="bx bx-minus"></i></button>
                                <span class="quantidade">0</span>
                                <button class="btnPlus"><i class="bx bx-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </li>
                
            <li class="carrinho-item" data-preco="120.00">
                <div class="imagem">
                    <img src="../img/montarcarrinhooooooo.png" alt="...">
                </div>
                <div class="info">
                    <h4>Montagem</h4>
                    <div class="preco">
                        <p>R$ 120,00</p>
                        <div class="contador">
                            <button class="btnMinus"><i class="bx bx-minus"></i></button>
                            <span class="quantidade">0</span>
                            <button class="btnPlus"><i class="bx bx-plus"></i></button>
                        </div>
                    </div>
                </div>
            </li>
            
            
            <button onclick="funcao1()" class="pagar" id="btnPagar">Total: R$ 00,00 </button>

            <script>
                function funcao1() {
                    alert("Compra realizada com sucesso !!!");   
                }
            </script>

               
        </ul>
        </div>
        
        <script>
        // JavaScript para interatividade do carrinho
        // Selecionando elementos do DOM
        const listaProdutos = document.getElementById('listaProdutos');
        const btnVoltar = document.getElementById('btnVoltar');
        const btnPagar = document.getElementById('btnPagar');

        // Evento de clique no botão Voltar
        btnVoltar.addEventListener('click', function() {
            // Redireciona para a página anterior (ou faça outra ação desejada)
            window.history.back();
        });

        // Eventos para botões de aumentar e diminuir quantidade
        listaProdutos.addEventListener('click', function(e) {
            const btnMinus = e.target.closest('.btnMinus');
            const btnPlus = e.target.closest('.btnPlus');

            if (btnMinus) {
                const spanQuantidade = btnMinus.nextElementSibling;
                let quantidade = parseInt(spanQuantidade.textContent);
                if (quantidade > 0) {
                    quantidade--;
                    spanQuantidade.textContent = quantidade;
                    atualizarTotal();
                }
            }

            if (btnPlus) {
                const spanQuantidade = btnPlus.previousElementSibling;
                let quantidade = parseInt(spanQuantidade.textContent);
                quantidade++;
                spanQuantidade.textContent = quantidade;
                atualizarTotal();
            }
        });

        // Função para atualizar o total com base na quantidade e preço dos produtos
        function atualizarTotal() {
            const itensCarrinho = listaProdutos.querySelectorAll('.carrinho-item');
            let total = 0;

            itensCarrinho.forEach(function(item) {
                const preco = parseFloat(item.getAttribute('data-preco'));
                const quantidade = parseInt(item.querySelector('.quantidade').textContent);
                total += preco * quantidade;
            });

            btnPagar.textContent = `Total: R$ ${total.toFixed(2)}`;

        }
    </script>
    <script src="../js/script.js"></script>
</body>
</html>
