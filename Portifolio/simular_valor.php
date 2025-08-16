<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Astra Soul - Portifólio</title>
    <script defer src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Link para os ícones do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            font-family: 'Comfortaa', sans-serif;
        }

        .card.simulador-card {
            max-width: 750px;
            margin: 2rem auto;
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease;
        }

        .simulador-card {
            max-width: 600px;
            margin: 2rem auto;
            padding: 1.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
            font-family: 'Poppins', sans-serif;
            transition: transform 0.3s ease;
        }

        .simulador-card h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #ffffffff;
        }

        /* Barra de progresso */
        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .progress-bar .step {
            width: 25px;
            height: 25px;
            border-radius: 16px;
            background: #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: #fff;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .progress-bar .step.active {
            background: #9370db;
            transform: scale(1.2);
        }

        /* Etapas */
        .simulador-step {
            display: none;
            flex-direction: column;
            gap: 1rem;
        }

        .simulador-step.active {
            display: flex;
        }

        .opcoes-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }

        .card-opcao {
            flex: 1 1 150px;
            background: #c9c9d3ff;
            border-radius: 12px;
            padding: 1.2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .card-opcao:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }

        .card-opcao.selected {
            border-color: #9370db;
            background: linear-gradient(135deg, #e6f0ff, #cce0ff);
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            transition: transform 0.3s ease;
            color: #9370db;
        }

        .card-opcao.selected .card-icon {
            transform: scale(1.2);
        }

        .card-opcao h3 {
            margin-bottom: 0.4rem;
            color: #333;
        }

        .card-opcao p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.4rem;
        }

        .card-opcao span {
            font-weight: bold;
            color: #ff6600;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .btn-next,
        .btn-prev,
        .btn-simular {
            padding: 0.8rem;
            font-size: 1rem;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-next {
            background: #9370db;
            color: #fff;
        }

        .btn-prev {
            background: #ccc;
            color: #333;
        }

        .btn-simular {
            background: #ff6600;
            color: #fff;
            width: 100%;
        }

        .btn-next:hover {
            background: #5b3c99ff;
        }

        .btn-prev:hover {
            background: #888888ff;
        }

        .btn-simular:hover {
            background: #e65500;
        }

        .simulador-resultado {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            background: #f5f5f5;
            border-radius: 8px;
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .simulador-resultado strong {
            color: #ff6600;
            font-size: 1.6rem;
        }

        /* Mobile */
        @media(max-width: 480px) {
            .opcoes-cards {
                flex-direction: column;
                gap: 0.6rem;
            }

            .btn-group {
                flex-direction: column;
                gap: 0.5rem;
            }

            .btn-prev,
            .btn-next {
                width: 100%;
            }
        }

        .resumo-pedido {
            display: grid;
            gap: 10px;
            margin-bottom: 15px;
        }

        .resumo-card {
            color: #fff;
            background: #1f1f1f;
            padding: 10px 15px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.35);
        }

        .resumo-card h4 {
            margin: 0 0 5px;
            font-size: 14px;
            color: #9370db;
            font-family: 'Nunito', sans-serif;
        }

        .resumo-card p {
            margin: 0;
            font-size: 13px;
            opacity: 0.8;
        }

        .resumo-card span {
            display: block;
            margin-top: 5px;
            font-weight: bold;
            color: rgba(137, 255, 137, 1);
        }

        .final-value {
            color: #9370db;
        }

        /* =========================
   RESPONSIVIDADE MOBILE
   ========================= */
        @media (max-width: 600px) {

            /* Container empilha verticalmente */
            .opcoes-cards {
                display: flex !important;
                flex-direction: column !important;
                gap: 1rem;
                align-items: stretch;
            }

            /* Cada card ocupa 100% do container */
            .card-opcao {
                flex: none !important;
                /* remove flex-grow e flex-basis */
                width: 100% !important;
                max-width: 100% !important;
                min-width: 0 !important;
                /* garante que card não tenha mínimo */
            }
        }

        .small-info {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR: logotipo e links principais -->
    <header class="navbar">
        <a href="index.php">
            <div class="logo">Astra Soul</div>
        </a>

        <nav>
            <ul class="nav-fixo">
                <li>
                    <i class="fa-solid fa-house"></i>
                    <a href="index.php">Página Inicial
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="card simulador-card">
        <h2>Simulador de Valores</h2>

        <!-- Barra de progresso -->
        <div class="progress-bar">
            <div class="step active" data-step="1">1</div>
            <div class="step" data-step="2">2</div>
            <div class="step" data-step="3">3</div>
            <div class="step" data-step="4">4</div>
            <div class="step" data-step="5">5</div>
            <div class="step" data-step="6">6</div>
        </div>

        <form id="simuladorForm">

            <!-- Etapa 1 -->
            <div class="simulador-step active" data-step="1">
                <p>Selecione um tamanho:</p>
                <div class="opcoes-cards">
                    <div class="card-opcao" data-valor="10">
                        <div class="card-icon"><i class="fa-solid fa-user"></i></div>
                        <h3>Perfil</h3>
                        <p>Somente a cabeça do personagem</p>
                        <span>+R$10</span>
                    </div>
                    <div class="card-opcao" data-valor="15">
                        <div class="card-icon"><i class="fa-solid fa-shirt"></i></div>
                        <h3>Meio Corpo</h3>
                        <p>Da cabeça ao tronco do personagem</p>
                        <span>+R$15</span>
                    </div>
                    <div class="card-opcao" data-valor="25">
                        <div class="card-icon"><i class="fa-solid fa-child"></i></div>
                        <h3>Corpo Inteiro</h3>
                        <p>Da cabeça aos pés do personagem</p>
                        <span>+R$25</span>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn-next">Próximo</button>
                </div>
            </div>

            <!-- Etapa 2 -->
            <div class="simulador-step" data-step="2">
                <p>Selecione um tipo de Lineart:</p>
                <div class="opcoes-cards">
                    <div class="card-opcao" data-valor="5">
                        <div class="card-icon"><i class="fa-solid fa-pencil"></i></div>
                        <h3>Sketch</h3>
                        <p>Somente a base do desenho não polida</p>
                        <span>+R$5</span>
                    </div>
                    <div class="card-opcao" data-valor="15">
                        <div class="card-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h3>Lineart</h3>
                        <p>Desenho com linhas finas totalmente polidas</p>
                        <span>+R$15</span>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn-prev">Voltar</button>
                    <button type="button" class="btn-next">Próximo</button>
                </div>
            </div>

            <!-- Etapa 3 -->
            <div class="simulador-step" data-step="3">
                <p>Selecione um tipo de pintura:</p>
                <div class="opcoes-cards">
                    <div class="card-opcao" data-valor="0">
                        <div class="card-icon"><i class="fa-solid fa-ban"></i></div>
                        <h3>Sem Cores</h3>
                        <p>Desenho sem cores, somente Lineart ou Sketch</p>
                        <span>Gratuito</span>
                    </div>
                    <div class="card-opcao" data-valor="5">
                        <div class="card-icon"><i class="fa-solid fa-droplet-slash"></i></div>
                        <h3>Gray-Skale</h3>
                        <p>Escala de cores cinzas, sem coloração RGB</p>
                        <span>+R$5</span>
                    </div>
                    <div class="card-opcao" data-valor="10">
                        <div class="card-icon"><i class="fa-solid fa-droplet"></i></div>
                        <h3>Flat-Colors</h3>
                        <p>Cores base do personagem, sem sombreamento</p>
                        <span>+R$10</span>
                    </div>
                    <div class="card-opcao" data-valor="20">
                        <div class="card-icon"><i class="fa-solid fa-palette"></i></div>
                        <h3>Full-Render</h3>
                        <p>Desenho totalmente colorido e sombreado</p>
                        <span>+R$20</span>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn-prev">Voltar</button>
                    <button type="button" class="btn-next">Próximo</button>
                </div>
            </div>

            <!-- Etapa 4 -->
            <div class="simulador-step" data-step="4">
                <p>Selecione uma opção:</p>
                <div class="opcoes-cards">
                    <div class="card-opcao" data-valor="15">
                        <div class="card-icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                        <h3>Remodel</h3>
                        <p>Remodelagem da OC do personagem, não inclui Concept Art</p>
                        <span>+R$15</span>
                    </div>
                    <div class="card-opcao" data-valor="25">
                        <div class="card-icon"><i class="fa-solid fa-pen-nib"></i></div>
                        <h3>Concept Art</h3>
                        <p>Arte conceitual detalhada de um personagem</p>
                        <span>+R$25</span>
                    </div>
                    <div class="card-opcao" data-valor="35">
                        <div class="card-icon"><i class="fa-solid fa-pen-ruler"></i></div>
                        <h3>Remodel + Concept Art</h3>
                        <p>Remodel de personagem + Arte conceitual</p>
                        <span>+R$35</span>
                    </div>
                    <div class="card-opcao" data-valor="0">
                        <div class="card-icon"><i class="fa-solid fa-arrow-right"></i></div>
                        <h3>Nenhum</h3>
                        <p>ignore essa etapa e prossiga</p>
                        <span>Gratuito</span>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn-prev">Voltar</button>
                    <button type="button" class="btn-next">Próximo</button>
                </div>
            </div>

            <!-- Etapa 5 -->
            <div class="simulador-step" data-step="5" data-multiple="true">
                <p>Selecione uma adição:</p>
                <div class="opcoes-cards">
                    <div class="card-opcao" data-valor="2">
                        <div class="card-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                        <h3>Cenário Simples</h3>
                        <p>Gradientes, ícones repetitivos, texturas, etc.</p>
                        <span>+R$2</span>
                    </div>
                    <div class="card-opcao" data-valor="10">
                        <div class="card-icon"><i class="fa-solid fa-city"></i></div>
                        <h3>Cenário Detalhado</h3>
                        <p>Background ambientado com objetos, paisagens, etc.</p>
                        <span>+R$10</span>
                    </div>
                    <div class="card-opcao" data-valor="5">
                        <div class="card-icon"><i class="fa-solid fa-eye-slash"></i></div>
                        <h3>Remoção de marca d'água</h3>
                        <p>Remove a marca autoral do artista.</p>
                        <span>+R$5</span>
                    </div>
                    <div class="card-opcao" data-valor="0">
                        <div class="card-icon"><i class="fa-solid fa-arrow-right"></i></div>
                        <h3>Nenhum</h3>
                        <p>ignore essa etapa e prossiga</p>
                        <span>Gratuito</span>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn-prev">Voltar</button>
                    <button type="button" class="btn-next">Próximo</button>
                </div>
            </div>

            <!-- Etapa final -->
            <div class="simulador-step" data-step="6">

                <div class="resumo-pedido" id="resumoPedido">
                    <div class="resumo-card"></div>
                </div>

                <div class="simulador-resultado">
                    <span class="final-value">Valor Final:</span>
                    <strong id="valorFinal">R$0,00</strong>
                </div>
                <button type="submit" class="btn-simular">Baixar Relatório</button>
                <button type="button" class="btn-prev">Voltar</button>
            </div>

        </form>
        <div class="small-info">
            <small><i class="fas fa-info-circle"></i> Valores podem variar conforme a complexidade.</small>
        </div>
    </div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    const steps = document.querySelectorAll('.simulador-step');
    const nextBtns = document.querySelectorAll('.btn-next');
    const prevBtns = document.querySelectorAll('.btn-prev');
    const stepIndicators = document.querySelectorAll('.progress-bar .step');
    let currentStep = 0;
    let valorTotal = 0;

    // Seleção de cards
    document.querySelectorAll('.card-opcao').forEach(card => {
        card.addEventListener('click', () => {
            const parentStep = card.closest('.simulador-step');
            const multiSelect = parentStep.dataset.multiple === "true";
            const isNenhum = parseInt(card.dataset.valor) === 0;

            if (multiSelect) {
                // Se clicou em "Nenhum"
                if (isNenhum) {
                    // Desmarca todos os outros e marca só ele
                    parentStep.querySelectorAll('.card-opcao').forEach(c => c.classList.remove('selected'));
                    card.classList.add('selected');
                } else {
                    // Se selecionar algo que não seja "Nenhum", desmarca o "Nenhum"
                    parentStep.querySelectorAll('.card-opcao').forEach(c => {
                        if (parseInt(c.dataset.valor) === 0) c.classList.remove('selected');
                    });
                    // Alterna seleção do item clicado
                    card.classList.toggle('selected');
                }
            } else {
                // Seleção única
                parentStep.querySelectorAll('.card-opcao').forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
            }
        });
    });

    // Próximo
    nextBtns.forEach(btn => btn.addEventListener('click', () => {
        const parentStep = steps[currentStep];
        const selectedCards = parentStep.querySelectorAll('.card-opcao.selected');

        if (!selectedCards.length) return alert("Selecione uma opção!");

        // Soma todos os selecionados da etapa atual
        selectedCards.forEach(card => {
            valorTotal += parseInt(card.dataset.valor);
        });

        parentStep.classList.remove('active');
        currentStep++;
        steps[currentStep].classList.add('active');
        updateProgress();

        // Se for a última etapa (resumo)
        if (currentStep === steps.length - 1) {
            gerarResumo();
        }
    }));

    function gerarResumo() {
        const resumoContainer = document.getElementById('resumoPedido');
        resumoContainer.innerHTML = ""; // limpa antes

        // Pega todas as opções selecionadas de TODAS as etapas
        document.querySelectorAll('.card-opcao.selected').forEach(card => {
            const valorNum = parseInt(card.dataset.valor);

            // Ignora opções gratuitas (valor 0)
            if (valorNum === 0) return;

            const titulo = card.querySelector('h3').textContent;
            const descricao = card.querySelector('p').textContent;
            const valor = `+R$${valorNum}`;

            // Cria o card do resumo
            const resumoCard = document.createElement('div');
            resumoCard.classList.add('resumo-card');
            resumoCard.innerHTML = `
            <h4>${titulo}</h4>
            <p>${descricao}</p>
            <span>${valor}</span>
        `;
            resumoContainer.appendChild(resumoCard);
        });
    }

    // Voltar
    prevBtns.forEach(btn => btn.addEventListener('click', () => {
        steps[currentStep].classList.remove('active');
        currentStep--;
        steps[currentStep].classList.add('active');
        valorTotal -= parseInt(steps[currentStep].querySelector('.card-opcao.selected').dataset.valor) || 0;
        updateProgress();
    }));

    // Atualiza barra de progresso
    function updateProgress() {
        stepIndicators.forEach((step, idx) => {
            step.classList.toggle('active', idx <= currentStep);
        });
        document.getElementById('valorFinal').textContent = `R$${valorTotal},00`;
    }

    // Envio do form (gera imagem em vez de PDF)
    document.getElementById('simuladorForm').addEventListener('submit', e => {
        e.preventDefault();

        const resumo = document.getElementById('resumoPedido');

        html2canvas(resumo, {
            backgroundColor: "#121212", // mesma cor de fundo do seu site
            scale: 2 // aumenta a resolução da imagem
        }).then(canvas => {
            const link = document.createElement("a");
            link.download = "resumo_pedido.png"; // nome do arquivo
            link.href = canvas.toDataURL("image/png");
            link.click();

            // Redirecionar após 1s (opcional)
            setTimeout(() => {
                window.location.href = "index.php"; // ajuste conforme seu site
            }, 1000);
        });
    });
</script>

</html>