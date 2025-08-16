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
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <style>
        .price-title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .tabs {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .tab {
            flex: 1;
            padding: 10px;
            background: #2a2a2a;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.3s;
        }

        .tab:hover {
            background: #3a3a3a;
        }

        .tab.active {
            background: #6a4dfa;
            font-weight: bold;
        }

        .tab-content {
            display: none;
            animation: fade 0.4s ease-in-out;
        }

        .tab-content.active {
            display: block;
        }

        table {
            width: 100%;
            border-spacing: 0;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .card.valores {
            min-height: 400px;
            /* altura mínima para tabelas pequenas */
            max-height: 580px;
            /* ou altura fixa */
        }

        .small-info {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        .card.sobre-space {
            margin-top: 80px;
        }

        .nav-menu.space-nav {
            gap: 30px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .btn-simular {
            display: inline-flex;
            /* permite alinhar ícone + texto */
            align-items: center;
            /* verticalmente centralizado */
            padding: 14px 30px;
            background-color: #6a4dfa;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            gap: 10px;
            /* espaço entre ícone e texto */
        }

        .btn-simular:hover {
            background-color: #3b26a1ff;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.4);
        }

        .pix-icon{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            gap: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        .pix-icon img{
            width: 35px;
            height: 35px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR: logotipo e links principais -->
    <header class="navbar">
        <div class="logo">Astra Soul</div>

        <nav>
            <ul class="nav-fixo">
                <li><a href="#sobre">Sobre</a></li>
            </ul>

            <button id="btnMenu" aria-label="Abrir menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <ul class="nav-menu space-nav">
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#comissoes">Comissões</a></li>
                <li><a href="#termos">Termos</a></li>
            </ul>
        </nav>
    </header>


    <!-- HERO: destaque principal (full-width, com animação JS) -->
    <section class="hero">
        <div class="hero-content">
            <!-- Texto principal -->
            <div class="hero-text">
                <h1>Olá! Eu sou <span class="artist-name">Astra</span></h1>
                <p class="subtitle">Ilustradora digital • Programadora web • Designer</p>
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn">Ver Portfólio</a>
                    <a href="#comissoes" class="btn highlight">Comissione Aqui</a>
                </div>
            </div>

            <!-- Imagem de destaque -->
            <div class="hero-image">
                <img src="img/FallIcon.png" alt="Ilustração de Astra">
            </div>
        </div>

        <!-- Overlay para contraste -->
        <div class="overlay"></div>
    </section>

    <section id="sobre" class="card sobre-space" data-aos="fade-up">
        <div class="sobre-content">

            <div avatar-container>
                <img src="img/FallIcon.png" alt="Avatar da artista">
            </div>

            <div class="sobre-texto">
                <div class="bio">
                    <p class="artist-name">Olá, pode me chamar de <strong>Astra</strong>.</p>
                    <p class="p-color">Há cinco anos, me juntei ao vasto universo da arte digital; há quatro, busquei me
                        aventurar na
                        área da
                        programação web. Para mim, a arte não é apenas um trabalho, mas um espaço onde a imaginação
                        encontra
                        a realidade, onde cada traço e cada cor contam histórias que palavras não alcançam. É nesse
                        universo
                        que encontrei um lugar para chamar de meu.</p>
                </div>

                <blockquote class="quote">
                    <small>"A arte nos permite encontrar a nós mesmos e, ao mesmo tempo, nos perder."
                        <span class="quote-author">— Thomas Merton</span>
                    </small>
                </blockquote>

                <div class="social-links">
                    <a href="https://discord.bio/astra_fallen_soul" target="_blank" title="Discord"><i
                            class="fa-brands fa-discord"></i></a>
                    <a href="https://artfight.net/~Astra_Fallen_Soul" target="_blank" title="Artfight"><i
                            class="fa-solid fa-palette"></i></a>
                    <a href="https://share.google/52Mltfx3tA1gpmNxN" target="_blank" title="Toyhouse"><i
                            class="fa-solid fa-house"></i></a>
                    <a href="https://instagram.com/astra.soul.draws" target="_blank" title="Instagram"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=astra.fallen.soul@gmail.com ?subject=Contato%20do%20site&body=Olá%20Astra,%20tudo%20bem?"
                        target="_blank" title="E-mail">
                        <i class="fa-solid fa-envelope"></i>
                    </a>


                </div>
            </div>
        </div>
    </section>

    <!-- Card de skills -->
    <section class="card" data-aos="fade-up">
        <h2>Minhas Habilidades</h2>

        <div class="skill">
            <span>Arte Digital</span>
            <div class="progress-bar">
                <div class="progress" data-width="90">0%</div>
            </div>
        </div>

        <div class="skill">
            <span>Programação</span>
            <div class="progress-bar">
                <div class="progress" data-width="75">0%</div>
            </div>
        </div>

        <div class="skill">
            <span>Design Digital</span>
            <div class="progress-bar">
                <div class="progress" data-width="45">0%</div>
            </div>
        </div>
    </section>

    <?php
    require_once 'config.php';

    // Consulta puxando os campos que vamos usar no carrossel
    $sql = "SELECT id, titulo, imagem, plataforma, ano_criacao FROM artes ORDER BY id DESC";
    $result = $mysqli->query($sql);
    ?>

    <!-- PORTFÓLIO: galeria de imagens -->
    <section id="portfolio" class="card" data-aos="fade-up">
        <h2>Portfólio</h2>

        <!-- Swiper Container -->
        <div class="swiper portfolio-swiper">
            <div class="swiper-wrapper">

                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="swiper-slide">
                        <div class="img-container">
                            <!-- Ao clicar, vai para a dashboard do item -->
                            <a href="dashboard.php?id=<?php echo $row['id']; ?>">
                                <img src="<?php echo htmlspecialchars($row['imagem']); ?>"
                                    alt="<?php echo htmlspecialchars($row['titulo']); ?>"
                                    data-title="<?php echo htmlspecialchars($row['titulo']); ?>"
                                    data-desc="Técnica: <?php echo htmlspecialchars($row['plataforma']); ?> • Ano: <?php echo $row['ano_criacao']; ?>"
                                    style="cursor:pointer;" />

                                <div class="overlay">
                                    <h3><?php echo htmlspecialchars($row['titulo']); ?></h3>
                                    <p>
                                        Plataforma: <?php echo htmlspecialchars($row['plataforma']); ?> • Ano:
                                        <?php echo $row['ano_criacao']; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

            <!-- Navegação -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- Paginação (bolinhas) -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="comissoes" class="card valores" data-aos="fade-up">
        <h2 class="price-title">Tabela de Preços</h2>

        <!-- Abas -->
        <div class="tabs">
            <button class="tab active" data-tab="tamanho">Tamanhos</button>
            <button class="tab" data-tab="lineart">Lineart</button>
            <button class="tab" data-tab="pintura">Pintura</button>
            <button class="tab" data-tab="especial">Especial</button>
            <button class="tab" data-tab="extras">Extras</button>
        </div>

        <!-- Conteúdo das Abas -->
        <div class="tab-content active" id="tamanho">
            <table>
                <tr>
                    <td>Perfil</td>
                    <td>R$ 10,00</td>
                </tr>
                <tr>
                    <td>Meio corpo</td>
                    <td>R$ 15,00</td>
                </tr>
                <tr>
                    <td>Corpo inteiro</td>
                    <td>R$ 25,00</td>
                </tr>
            </table>
        </div>

        <div class="tab-content" id="lineart">
            <table>
                <tr>
                    <td>Sketch</td>
                    <td>R$ 5,00</td>
                </tr>
                <tr>
                    <td>Lineart</td>
                    <td>R$ 15,00</td>
                </tr>
            </table>
        </div>

        <div class="tab-content" id="pintura">
            <table>
                <tr>
                    <td>Gray-Scale</td>
                    <td>R$ 5,00</td>
                </tr>
                <tr>
                    <td>Flat-Colors</td>
                    <td>R$ 10,00</td>
                </tr>
                <tr>
                    <td>Full-Render</td>
                    <td>R$ 20,00</td>
                </tr>
            </table>
        </div>

        <div class="tab-content" id="especial">
            <table>
                <tr>
                    <td>Remodel</td>
                    <td>R$ 15,00</td>
                </tr>
                <tr>
                    <td>Concept Art</td>
                    <td>R$ 25,00</td>
                </tr>
                <tr>
                    <td>Remodel + Concept Art</td>
                    <td>R$ 35,00</td>
                </tr>
            </table>
        </div>

        <div class="tab-content" id="extras">
            <table>
                <tr>
                    <td>Cenário simples</td>
                    <td>R$ 2,00</td>
                </tr>
                <tr>
                    <td>Cenário detalhado</td>
                    <td>R$ 10,00</td>
                </tr>
                <tr>
                    <td>Remoção de marca d'água</td>
                    <td>R$ 5,00</td>
                </tr>
            </table>
        </div>
        <div class="small-info">
            <small><i class="fas fa-info-circle"></i> Valores podem variar conforme a complexidade.</small>
        </div>
        <div class="btn-container">
            <a href="simular_valor.php" class="btn-simular">
                <i class="fa-solid fa-calculator"></i>
                Simular Valores
            </a>
        </div>

        <div class="pix-icon">
            <img src="img/Pix.png" alt="Pix Icon">
            <h3>Pague com pix</h3>
        </div>
    </section>

    <section class="card" data-aos="fade-up">

        <!-- O que faço / não faço -->
        <div class="termo-bloco dos-table termos-space termos-duplos">

            <!-- O que faço -->
            <div class="termo-col positivo">
                <h3><i class="fa-solid fa-paintbrush"></i> O que eu faço</h3>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Arte digital de personagens originais (OCs).</li>
                    <li><i class="fa-solid fa-circle-check"></i> Furries e criaturas fantásticas.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Remodel de OCs</li>
                    <li><i class="fa-solid fa-circle-check"></i> Feral</li>
                    <li><i class="fa-solid fa-circle-check"></i> Chibis</li>
                    <li><i class="fa-solid fa-circle-check"></i> Monstros e humanóides</li>
                    <li><i class="fa-solid fa-circle-check"></i> Ilustrações temáticas e concept arts.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Backgrounds simples</li>
                    <li><i class="fa-solid fa-circle-check"></i> Gore leve (sangue, feridas, etc.)</li>
                </ul>
            </div>

            <!-- O que não faço -->
            <div class="termo-col negativo">
                <h3><i class="fa-solid fa-xmark"></i> O que eu não faço</h3>
                <ul>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Conteúdo NSFW explícito.</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Temas de ódio, preconceito ou violência
                        gráfica.</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Personagens de terceiros sem permissão.</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Tracing</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Mecha (Robôs)</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Humanos</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Fetiches</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Temas políticos</li>
                    <li><i class="fa-solid fa-triangle-exclamation"></i> Gore forte</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- TERMOS: regras e condições -->
    <!-- Fonte de ícones -->
    <section id="termos" class="card termos-container" data-aos="fade-up">
        <h2>Termos de Serviço</h2>

        <!-- Instruções -->
        <div class="termo-bloco">
            <h3><i class="fa-solid fa-info-circle"></i> Instruções sobre as Comissões</h3>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> Pagamento antecipado de 50% na aprovação do esboço.</li>
                <li><i class="fa-solid fa-money-bill"></i> Pagamento somente por pix.</li>
                <li><i class="fa-solid fa-ban"></i> Sem reembolsos após o início do trabalho.</li>
                <li><i class="fa-solid fa-ban"></i> Não use as artes para treinamento de IAs</li>
                <li><i class="fa-solid fa-user"></i> Uso permitido para fins pessoais.</li>
                <li><i class="fa-solid fa-copyright"></i> Uso comercial somente sob taxa de 50% do valor da
                    comissão.</li>
                <li><i class="fa-solid fa-clock"></i> O prazo pode variar de acordo com a complexidade.</li>
                <li><i class="fa-solid fa-paperclip"></i> Referências visuais são recomendadas para melhores resultados.
                <li><i class="fa-solid fa-palette"></i> A remoção da marca d'água é efetuada ao pagar um pequeno
                    adicional de R$ 5,00.</li>
                </li>
            </ul>
        </div>

        <!-- Código de Ética -->
        <div class="termo-bloco">
            <h3><i class="fa-solid fa-scale-balanced"></i> Código de Ética</h3>
            <ul>
                <li><i class="fa-solid fa-handshake"></i> Respeito e comunicação clara com o cliente.</li>
                <li><i class="fa-solid fa-palette"></i> Dedicação para entregar o melhor resultado possível.</li>
                <li><i class="fa-solid fa-shield-heart"></i> Compromisso com prazos e qualidade.</li>
                <li><i class="fa-solid fa-lightbulb"></i> Criatividade alinhada às expectativas do cliente.</li>
            </ul>
        </div>
    </section>

    <!-- RODAPÉ -->
    <footer class="footer">
        <p>© 2025 Astra Soul | trabalho feito com ♥</p>
    </footer>

    <button id="btnTopo" title="Voltar ao topo"><i class="fa-solid fa-caret-up"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));

            tab.classList.add('active');
            document.getElementById(tab.dataset.tab).classList.add('active');
        });
    });

    AOS.init({
        offset: 100,          // distância em px do trigger
        duration: 800,        // duração da animação em ms
        easing: 'ease-in-out', // efeito de easing
        once: false,          // animação repete ao scrollar para cima
        mirror: true          // anima animação também quando scroll volta
    });
</script>

</html>