<?php
require_once 'config.php';

// Pega o ID da URL e garante que seja um número
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    echo "<p>Arte não encontrada.</p>";
    exit;
}

// Busca no banco
$sql = "SELECT titulo, imagem, plataforma, tempo_execucao, ano_criacao, tipo_desenho, proprietario, link_proprietario, descricao
        FROM artes 
        WHERE id = $id";
$result = $mysqli->query($sql);

if ($result->num_rows === 0) {
    echo "<p>Arte não encontrada.</p>";
    exit;
}

$arte = $result->fetch_assoc();
?>

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
        /* Wrapper flexível para as duas colunas */
        .content-wrapper {
            display: flex;
            gap: 2rem;
        }

        /* Coluna da imagem */
        .imagem {
            flex: 1 1 40%;
            position: relative;
            display: inline-block;
            /* importante: limita a altura à da imagem */
            width: 100%;
            max-width: 100%;
            text-align: center;
        }

        .imagem img {
            max-width: 100%;
            max-height: 500px;
            object-fit: contain;
            border-radius: 6px;
            box-shadow: 0 1px 5px rgb(0 0 0 / 0.15);
        }

        /* Coluna das informações */
        .info-wrapper {
            flex: 1 1 60%;
            display: flex;
            flex-direction: column;
        }

        /* Título alinhado no topo da coluna direita */
        .titulo {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #222;
        }

        /* Infos em coluna com espaçamento */
        .info-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem 2rem;
            margin-bottom: 2rem;
        }

        .info {
            flex: 1 1 45%;
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 0.5rem;
            gap: 0.5rem;
            border-bottom: 1px solid #3b3b3bff;
        }

        .info i {
            margin-right: 0.6rem;
            color: #666;
            font-size: 1.2rem;
            min-width: 20px;
            text-align: center;
        }

        .descricao {
            font-size: 1rem;
            line-height: 1.5;
            color: #ccc;
            white-space: pre-wrap;
        }

        .titulo {
            font-size: 2rem;
            margin-bottom: 2rem;
            border-bottom: 1px solid rgba(255, 215, 0, 0.06);
            /* opcional: efeito de cabeçalho */
            padding-bottom: 0.5rem;
            color: #ffd978;
        }

        /* Mobile: empilha tudo verticalmente */
        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }

            .imagem {
                margin-bottom: 1.5rem;
            }

            .info-container {
                flex-direction: column;
            }

            .info {
                flex: unset;
            }

            .titulo {
                text-align: center;
                margin-bottom: 2rem;
            }
        }

        .imagem {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* só alinha horizontalmente */
            overflow: hidden;
            width: 100%;
        }

        .imagem-wrapper {
            position: relative;
            /* para a overlay ficar relativa à imagem */
            display: inline-block;
            /* ajusta altura ao conteúdo */
        }

        .imagem-wrapper img {
            display: block;
            max-width: 100%;
            max-height: 500px;
            object-fit: contain;
            border-radius: 6px;
        }

        .overlay-watermark {
            position: absolute;
            bottom: 4%;
            right: 4%;
            font-size: clamp(10px, 2.5vw, 12px);
            color: rgba(255, 255, 255, 0.7);
            background: rgba(0, 0, 0, 0.57);
            padding: 2px 6px;
            border-radius: 3px;
            pointer-events: none;
            white-space: nowrap;
            text-align: right;
        }

        .accordion {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .accordion-item {
            border: 1px solid rgba(255, 215, 0, 0.06);
            border-radius: 6px;
            overflow: hidden;
            background: #1f1f1f;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .accordion-header {
            width: 100%;
            background: #9370db;
            border: none;
            outline: none;
            padding: 0.8rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1rem;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .accordion-header:hover {
            background: #714cbbff;
        }

        .accordion-header i.fa-chevron-down {
            transition: transform 0.3s ease;
        }

        .accordion-item.open .accordion-header i.fa-chevron-down {
            transform: rotate(180deg);
        }

        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s ease;
            padding: 0 1rem;
        }

        .accordion-item.open .accordion-body {
            padding: 1rem;
            max-height: 500px;
            /* altura suficiente para o conteúdo */
        }

        @media (max-width: 768px) {
            .accordion-header {
                font-size: 0.95rem;
            }
        }

        .plataforma-logo {
            width: 25px;
            height: 25px;
            vertical-align: middle;
        }

        .social-link-wrapper {
            margin-top: 0.3rem;
            display: block;
        }

        .info.user-info {
            display: flex;
            flex-direction: column;
            /* empilha elementos */
            align-items: flex-start;
            /* alinha à esquerda */
        }

        .info.user-info>span {
            display: flex;
            align-items: center;
            /* mantém ícone + texto na mesma linha */
            gap: 0.3rem;
            /* opcional, para dar espaço entre ícone e texto */
        }


        .social-link {
            display: inline-flex;
            align-items: flex-start;
            gap: 0.4rem;
            font-size: 0.95rem;
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-link:hover {
            color: #ff6600;
        }

        .small-info {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 20px auto;
            background: #8b25257e;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            max-width: 85%;
            /* usa quase toda a largura no mobile */
            width: 100%;
            height: auto;
            /* altura automática conforme conteúdo */
            min-height: 70px;
            /* mantém um mínimo se quiser */
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 215, 0, 0.06);
            flex-wrap: wrap;
            /* quebra conteúdo se necessário */
        }

        /* Footer */
        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            text-align: center;
        }

        /* Mobile específico */
        @media (max-width: 768px) {
            .small-info {
                margin: 20px auto;
                padding: 1rem;
                font-size: 0.9rem;
                /* reduz o texto um pouco */
            }

            footer {
                flex-direction: column;
                font-size: 0.85rem;
                padding: 0.8rem;
            }
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

    <div class="card dashboard-card" data-aos="fade-up">

        <h1 class="titulo"><?php echo htmlspecialchars($arte['titulo']); ?></h1>

        <div class="content-wrapper">

            <div class="imagem">
                <div class="imagem-wrapper">
                    <img src="<?php echo htmlspecialchars($arte['imagem']); ?>"
                        alt="<?php echo htmlspecialchars($arte['titulo']); ?>">
                    <div class="overlay-watermark">© Astra Soul</div>
                </div>
            </div>

            <div class="info-wrapper">

                <div class="accordion">

                    <div class="accordion-item open">
                        <button class="accordion-header">
                            <span><i class="fa-solid fa-layer-group"></i> Detalhes Técnicos</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="accordion-body">
                            <div class="info"> <i class="fa-solid fa-mobile-screen-button"></i>
                                <strong>Plataforma:</strong> <img src="./img/IbisLogo.png" alt="Ibis Paint X"
                                    class="plataforma-logo"> <?php echo htmlspecialchars($arte['plataforma']); ?>
                            </div>

                            <div class="info"><i class="fa-regular fa-clock"></i><strong> Tempo de Execução:</strong>
                                <?php echo htmlspecialchars($arte['tempo_execucao']); ?></div>

                            <div class="info"><i class="fa-solid fa-calendar-alt"></i><strong> Ano de Criação:</strong>
                                <?php echo htmlspecialchars($arte['ano_criacao']); ?></div>

                            <div class="info"><i class="fa-solid fa-pencil-alt"></i><strong> Tipo de Desenho:</strong>
                                <?php echo htmlspecialchars($arte['tipo_desenho']); ?></div>

                            <div class="info user-info">

                                <span>
                                    <i class="fa-solid fa-user"></i>
                                    <strong> Proprietário:</strong>
                                    <?php echo htmlspecialchars($arte['proprietario']); ?>
                                </span>

                                <?php if (!empty($arte['link_proprietario'])): ?>
                                    <?php
                                    $link = $arte['link_proprietario'];
                                    $icon = 'fa-solid fa-link'; // padrão
                                
                                    if (stripos($link, 'instagram.com') !== false) {
                                        $icon = 'fa-brands fa-instagram';
                                    } else if (stripos($link, 'toyhou.se') !== false) {
                                        $icon = 'fa-solid fa-paw'; // Toyhouse
                                    } else if (stripos($link, 'artfight.net') !== false) {
                                        $icon = 'fa-solid fa-bolt'; // Art Fight
                                    }
                                    ?>
                                    <div class="social-link-wrapper">
                                        <a href="<?php echo htmlspecialchars($link); ?>" target="_blank"
                                            rel="noopener noreferrer" class="social-link">
                                            <i class="<?php echo $icon; ?>"></i> Perfil do Proprietário
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item open">
                        <button class="accordion-header">
                            <span><i class="fa-solid fa-align-left"></i> Descrição</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="accordion-body">
                            <p class="descricao"><?php echo nl2br(htmlspecialchars($arte['descricao'])); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="small-info">
            <small><i class="fas fa-info-circle"></i> Atenção: o uso não autorizado de obras de arte é crime e está
                sujeito à legislação de direitos autorais. Respeite os criadores e suas criações.</small>
        </div>
    </footer>

</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            item.classList.toggle('open');
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