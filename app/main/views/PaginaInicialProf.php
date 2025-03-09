<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estágio - Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
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

    /* Novos estilos para os cards de ação rápida */
    .quick-action-card {
        background: var(--white);
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        transition: var(--transition);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }

    .quick-action-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .card-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .number {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-color);
        margin: 10px 0;
    }

    .action-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
    }

    .action-link:hover {
        color: var(--hover-color);
    }

    /* Estilos para painéis de atividade e tarefas */
    .activity-panel, .tasks-panel {
        background: var(--white);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        height: 100%;
        margin-bottom: 20px;
    }

    .activity-item, .task-item {
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }

    .activity-date {
        color: var(--primary-color);
        font-size: 0.9rem;
        font-weight: 500;
    }

    .task-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Estilos para alertas */
    .alerts-panel {
        background: var(--white);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    .alert {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .alert i {
        font-size: 1.2rem;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .quick-action-card {
            margin-bottom: 20px;
        }
    }
    </style>
</head>
<body>
    <!-- Menu lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="../views/paginaAlunos.php"><i class="fas fa-user-graduate"></i> Alunos</a>
        <a href="../views/paginaEmp.php"><i class="fas fa-building"></i> Empresas</a>
        <a href="../views/paginaRelatorios.php"><i class="fas fa-file-alt"></i> Relatórios</a>
    </div>

    <!-- Conteúdo principal -->
    <div id="main" class="content">
        <!-- Cabeçalho -->
        <div class="header">
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-dark me-3" onclick="toggleNav()">☰</button>
                <h1 class="h4 mb-0">Dashboard de Monitoramento</h1>
            </div>
        </div>

        <!-- Conteúdo Principal -->
        <div class="container mt-5">
            <!-- Cards de Ações Rápidas -->
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="quick-action-card">
                        <div class="card-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4>Alunos Ativos</h4>
                        <p class="number">45</p>
                        <a href="../views/paginaAlunos.php" class="action-link">Ver Detalhes</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="quick-action-card">
                        <div class="card-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Empresas Parceiras</h4>
                        <p class="number">28</p>
                        <a href="../views/paginaEmp.php" class="action-link">Gerenciar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="quick-action-card">
                        <div class="card-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4>Relatórios Pendentes</h4>
                        <p class="number">12</p>
                        <a href="../views/paginaRelatorios.php" class="action-link">Avaliar</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="quick-action-card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Horas Registradas</h4>
                        <p class="number">1.280</p>
                        <a href="../views/paginaRelatorios.php" class="action-link">Verificar</a>
                    </div>
                </div>
            </div>

            <!-- Seção de Atividades Recentes -->
            <div class="row mb-5">
                <div class="col-md-8">
                    <div class="activity-panel">
                        <h3>Atividades Recentes</h3>
                        <div class="activity-list">
                            <div class="activity-item">
                                <span class="activity-date">Hoje, 14:30</span>
                                <p>João Silva enviou novo relatório mensal</p>
                            </div>
                            <div class="activity-item">
                                <span class="activity-date">Ontem, 16:45</span>
                                <p>Nova empresa cadastrada: Tech Solutions</p>
                            </div>
                            <div class="activity-item">
                                <span class="activity-date">22/03, 09:15</span>
                                <p>Maria Santos completou 100 horas de estágio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tasks-panel">
                        <h3>Tarefas Pendentes</h3>
                        <div class="task-list">
                            <div class="task-item">
                                <input type="checkbox" id="task1">
                                <label for="task1">Avaliar 3 relatórios</label>
                            </div>
                            <div class="task-item">
                                <input type="checkbox" id="task2">
                                <label for="task2">Aprovar novo convênio</label>
                            </div>
                            <div class="task-item">
                                <input type="checkbox" id="task3">
                                <label for="task3">Reunião com supervisor</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seção de Alertas -->
            <div class="row">
                <div class="col-12">
                    <div class="alerts-panel">
                        <h3>Alertas Importantes</h3>
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle"></i>
                            5 alunos próximos do prazo final de estágio
                        </div>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle"></i>
                            Nova documentação disponível para download
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS e script personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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