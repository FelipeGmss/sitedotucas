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

    /* Header melhorado */
    .header {
        background-color: var(--white);
        padding: 15px 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 900;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Estilo para os botões de acesso */
    .access-container {
        text-align: center;
        margin-top: 50px;
    }

    .access-container h2 {
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .access-container input[type="submit"] {
        width: 200px;
        padding: 10px;
        margin: 10px auto;
        font-size: 16px;
        background-color: var(--primary-color);
        color: var(--white);
        border: none;
        border-radius: 5px;
        transition: var(--transition);
        display: block;
    }

    .access-container input[type="submit"]:hover {
        background-color: var(--hover-color);
        transform: scale(1.05);
    }
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
    </style>
</head>
<body>
    <!-- Conteúdo principal -->
    <div id="main" class="content">
        <!-- Cabeçalho -->
        <div class="header">
            <div class="d-flex align-items-center">
                <h1 class="h4 mb-0">Sistema de estágio</h1>
            </div>
        </div>

        <!-- Seção de Acesso -->
        <div class="container access-container">
            <h2>Acessar como</h2>
            <form action="controller/ControllerIndex.php" method="post">
                <input type="submit" name="btn" value="Aluno">
                <input type="submit" name="btn" value="Professor">
            </form>
        </div>
    </div>

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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>