<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estágio - Sobre</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo personalizado -->
    <style>
    :root {
        --primary-color: #2E7D32;
        --secondary-color: #4CAF50;
        --hover-color: #1B5E20;
        --bg-color: #f0f2f5;
        --white: #ffffff;
        --transition: all 0.3s ease;
    }

    body {
        background-color: var(--bg-color);
        font-family: 'Segoe UI', sans-serif;
    }

    /* Sidebar melhorada */
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        background-color: var(--primary-color);
        overflow-x: hidden;
        transition: var(--transition);
        padding-top: 60px;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }

    .sidebar a {
        padding: 15px 25px;
        text-decoration: none;
        font-size: 18px;
        color: var(--white);
        display: block;
        transition: var(--transition);
        border-left: 4px solid transparent;
        margin: 5px 0;
    }

    .sidebar a:hover {
        background-color: var(--hover-color);
        border-left: 4px solid var(--white);
        transform: translateX(10px);
    }

    /* Header melhorado */
    /* Adicione ou modifique estas classes no seu CSS */
.header {
    background-color: var(--white);
    padding: 15px 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 900;
    display: flex;
    justify-content: space-between; /* Isso separa os elementos à esquerda e direita */
    align-items: center;
}

.auth-buttons {
    position: fixed; /* Fixa os botões */
    top: 15px; /* Distância do topo */
    right: 25px; /* Distância da direita */
    z-index: 1001; /* Garante que fique acima de outros elementos */
}

    /* Botões estilizados */
    .btn-outline-dark {
        border-color: var(--primary-color);
        color: var(--primary-color);
        transition: var(--transition);
    }

    .btn-outline-dark:hover {
        background-color: var(--primary-color);
        color: var(--white);
        transform: scale(1.05);
    }

    .btn-outline-primary,
    .btn-outline-success {
        transition: var(--transition);
    }

    .btn-outline-primary:hover,
    .btn-outline-success:hover {
        transform: scale(1.05);
    }

    /* Cards de informação melhorados */
    .info-box {
        background-color: var(--white);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .info-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: var(--primary-color);
        transform: scaleX(0);
        transition: var(--transition);
    }

    .info-box:hover::before {
        transform: scaleX(1);
    }

    .info-box h3 {
        font-size: 1.3rem;
        color: var(--primary-color);
        margin-bottom: 15px;
        position: relative;
        padding-bottom: 10px;
    }

    .info-box h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: var(--secondary-color);
    }

    /* Animação de entrada */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: var(--transition);
    }

    .fade-in.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .info-box {
            height: auto;
            min-height: 250px;
        }
    }
</style>

</head>
<body>
    <!-- Menu lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="../views/paginaAlunos.php">Alunos</a>
        <a href="../views/paginaEmp.php">Empresas</a>
        <a href="../views/paginaRelatorios.php">Relatórios</a>
    </div>

    <!-- Conteúdo principal -->
    <div id="main" class="content">
        <!-- Cabeçalho -->
        <!-- Cabeçalho -->
<div class="header">
    <div class="d-flex align-items-center">
        <button class="btn btn-outline-dark me-3" onclick="toggleNav()">☰</button>
        <h1 class="h4 mb-0">Sistema de estágio</h1>
    </div>
</div>

<!-- Botões de autenticação -->
<div class="auth-buttons">
    <a href="../views/login.php" class="btn btn-outline-primary me-2">login</a>
    <a href="../views/CadatroEmpresas.php" class="btn btn-outline-success">cadastrar Empresas</a>
</div>

        <!-- Seção de Informações -->
        <div class="container mt-5">
            <div class="row g-4">
                <!-- Como fomos criados e por quem -->
                <div class="col-md-4">
                    <div class="info-box">
                        <div>
                            <h3>Como fomos criados e por quem</h3>
                            <p>
                                O Sistema de Estágio foi criado em 2023 por um grupo de estudantes de tecnologia da Universidade Federal, com o apoio de professores e empresas parceiras. A ideia surgiu da necessidade de organizar e facilitar o processo de estágio para alunos e empresas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- O que fazemos -->
                <div class="col-md-4">
                    <div class="info-box">
                        <div>
                            <h3>O que fazemos</h3>
                            <p>
                                Conectamos estudantes a empresas, gerenciamos o processo de estágio e geramos relatórios detalhados. Nossa plataforma permite o cadastro de alunos e empresas, facilita a comunicação entre as partes e fornece ferramentas para acompanhamento e avaliação de desempenho.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Objetivo -->
                <div class="col-md-4">
                    <div class="info-box">
                        <div>
                            <h3>Objetivo</h3>
                            <p>
                                Nosso objetivo é simplificar a gestão de estágios, promovendo o desenvolvimento profissional dos alunos e ajudando empresas a encontrar novos talentos. Queremos ser a ponte que transforma oportunidades em experiências de sucesso para todos os envolvidos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e script personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Script existente do toggle
    function toggleNav() {
        const sidebar = document.getElementById("mySidebar");
        const main = document.getElementById("main");
        if (sidebar.style.width === "250px") {
            sidebar.style.width = "0";
            main.style.marginLeft = "0";
        } else {
            sidebar.style.width = "250px";
            main.style.marginLeft = "250px";
        }
    }

    // Novos scripts para interatividade
    document.addEventListener('DOMContentLoaded', function() {
        // Adiciona classe fade-in aos info-boxes
        const infoBoxes = document.querySelectorAll('.info-box');
        infoBoxes.forEach((box, index) => {
            box.classList.add('fade-in');
            // Atrasa a animação para cada card
            setTimeout(() => {
                box.classList.add('active');
            }, 200 * (index + 1));
        });

        // Animação ao scroll
        function checkScroll() {
            const elements = document.querySelectorAll('.fade-in:not(.active)');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < window.innerHeight - 100) {
                    element.classList.add('active');
                }
            });
        }

        // Listener para scroll
        window.addEventListener('scroll', checkScroll);

        // Efeito hover nos cards
        infoBoxes.forEach(box => {
            box.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            box.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Adiciona tooltip aos botões
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.setAttribute('title', button.textContent.trim());
        });
    });

    // Fecha sidebar ao clicar fora
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('mySidebar');
        const toggleButton = document.querySelector('.btn-outline-dark');
        
        if (sidebar.style.width === "250px" && 
            !sidebar.contains(event.target) && 
            event.target !== toggleButton) {
            toggleNav();
        }
    });
</script>
</body>
</html>