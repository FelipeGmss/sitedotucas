<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoramento de Alunos - Sistema de Estágio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
    :root {
        --primary-color: #2E7D32;
        --secondary-color: #4CAF50;
        --hover-color: #1B5E20;
        --bg-color: #f0f2f5;
        --white: #ffffff;
        --transition: all 0.3s ease;
        --enfermagem-color: #FF6B6B;
        --informatica-color: #4ECDC4;
        --administracao-color: #45B7D1;
        --edificacoes-color: #96CEB4;
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

    .header {
        background-color: var(--white);
        padding: 15px 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 900;
    }

    /* Estilos para as abas de cursos */
    .course-tabs {
        background: var(--white);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .course-tab {
        padding: 15px 25px;
        border-radius: 8px;
        margin: 5px;
        cursor: pointer;
        transition: var(--transition);
    }

    .course-tab.enfermagem {
        background-color: var(--enfermagem-color);
        color: white;
    }

    .course-tab.informatica {
        background-color: var(--informatica-color);
        color: white;
    }

    .course-tab.administracao {
        background-color: var(--administracao-color);
        color: white;
    }

    .course-tab.edificacoes {
        background-color: var(--edificacoes-color);
        color: white;
    }

    /* Estilos para os cards de alunos */
    .student-card {
        background: var(--white);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: var(--transition);
    }

    .student-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .student-header {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .student-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .progress-info {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-top: 15px;
    }

    .status-badge {
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .status-active {
        background-color: #28a745;
        color: white;
    }

    .status-warning {
        background-color: #ffc107;
        color: black;
    }

    .status-danger {
        background-color: #dc3545;
        color: white;
    }

    /* Filtros e Pesquisa */
    .filters-section {
        background: var(--white);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .search-box {
        position: relative;
        margin-bottom: 20px;
    }

    .search-box input {
        width: 100%;
        padding: 10px 40px 10px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .search-box i {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
    }

    /* Estatísticas do curso */
    .course-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: var(--white);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-color);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .course-stats {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>
<body>
    <!-- Menu lateral -->
    <div id="mySidebar" class="sidebar">
        <a href="#"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#"><i class="fas fa-user-graduate"></i> Alunos</a>
        <a href="#"><i class="fas fa-building"></i> Empresas</a>
        <a href="#"><i class="fas fa-file-alt"></i> Relatórios</a>
    </div>

    <!-- Conteúdo principal -->
    <div id="main" class="content">
        <!-- Cabeçalho -->
        <div class="header">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <button class="btn btn-outline-dark me-3" onclick="toggleNav()">☰</button>
                    <h1 class="h4 mb-0">Monitoramento de Alunos</h1>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Filtrar por Status
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Todos</a></li>
                            <li><a class="dropdown-item" href="#">Ativos</a></li>
                            <li><a class="dropdown-item" href="#">Pendentes</a></li>
                            <li><a class="dropdown-item" href="#">Concluídos</a></li>
                        </ul>
                    </div>
                    <div class="search-box">
                        <input type="text" placeholder="Pesquisar aluno...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conteúdo Principal -->
        <div class="container mt-4">
            <!-- Abas dos Cursos -->
            <div class="course-tabs d-flex justify-content-between flex-wrap">
                <button class="course-tab enfermagem active" onclick="showCourse('enfermagem')">
                    Enfermagem (45)
                </button>
                <button class="course-tab informatica" onclick="showCourse('informatica')">
                    Informática (43)
                </button>
                <button class="course-tab administracao" onclick="showCourse('administracao')">
                    Administração (47)
                </button>
                <button class="course-tab edificacoes" onclick="showCourse('edificacoes')">
                    Edificações (44)
                </button>
            </div>

            <!-- Estatísticas do Curso -->
            <div class="course-stats">
                <div class="stat-card">
                    <h3>Total de Alunos</h3>
                    <p class="stat-number">45</p>
                </div>
                <div class="stat-card">
                    <h3>Em Estágio</h3>
                    <p class="stat-number">38</p>
                </div>
                <div class="stat-card">
                    <h3>Concluídos</h3>
                    <p class="stat-number">5</p>
                </div>
                <div class="stat-card">
                    <h3>Pendentes</h3>
                    <p class="stat-number">2</p>
                </div>
            </div>

            <!-- Lista de Alunos -->
            <div class="row" id="studentsList">
                <!-- Exemplo de Card de Aluno -->
                <div class="col-md-6 col-lg-4">
                    <div class="student-card">
                        <div class="student-header">
                            <img src="https://via.placeholder.com/60" alt="Foto do aluno" class="student-avatar">
                            <div>
                                <h5 class="mb-0">Ana Silva</h5>
                                <small class="text-muted">Matrícula: 2021001</small>
                                <span class="status-badge status-active">Ativo</span>
                            </div>
                        </div>
                        <div class="student-info">
                            <p><strong>Empresa:</strong> Hospital Santa Casa</p>
                            <p><strong>Função:</strong> Auxiliar de Enfermagem</p>
                            <p><strong>Supervisor:</strong> Dr. João Santos</p>
                            <div class="progress-info">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Progresso do Estágio</span>
                                    <span>75%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p><i class="fas fa-clock"></i> Horas Completadas: 280/400</p>
                                <p><i class="fas fa-calendar-check"></i> Frequência: 95%</p>
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <button class="btn btn-sm btn-outline-primary">Ver Detalhes</button>
                        </div>
                    </div>
                </div>
                <!-- Mais cards de alunos serão adicionados aqui -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
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

    function showCourse(course) {
        // Implementar lógica para mostrar alunos do curso selecionado
        console.log(`Mostrando alunos do curso: ${course}`);
        // Aqui você adicionaria a lógica para filtrar e mostrar os alunos do curso selecionado
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
    <script>
// Dados dos alunos por curso
const coursesData = {
    enfermagem: {
        color: '#FF6B6B',
        profiles: ['Auxiliar de Enfermagem', 'Técnico em Enfermagem', 'Instrumentador Cirúrgico'],
        companies: ['Hospital Santa Casa', 'Clínica São Lucas', 'Hospital Regional', 'UPA Central'],
        students: [
            {
                id: 'ENF001',
                name: 'Ana Silva',
                registration: '2021001',
                photo: 'https://via.placeholder.com/60',
                status: 'active',
                company: 'Hospital Santa Casa',
                profile: 'Auxiliar de Enfermagem',
                supervisor: 'Dr. João Santos',
                progress: 75,
                hours: {
                    completed: 280,
                    total: 400
                },
                frequency: 95,
                lastReport: '2024-03-15'
            },
            // Adicione mais alunos de enfermagem aqui
        ]
    },
    informatica: {
        color: '#4ECDC4',
        profiles: ['Desenvolvedor Full Stack', 'Suporte Técnico', 'Analista de Sistemas', 'Desenvolvedor Front-end'],
        companies: ['Tech Solutions', 'DataSys', 'InnovaTech', 'WebDev Co.'],
        students: [
            {
                id: 'INF001',
                name: 'Pedro Santos',
                registration: '2021045',
                photo: 'https://via.placeholder.com/60',
                status: 'active',
                company: 'Tech Solutions',
                profile: 'Desenvolvedor Full Stack',
                supervisor: 'Maria Oliveira',
                progress: 60,
                hours: {
                    completed: 240,
                    total: 400
                },
                frequency: 92,
                lastReport: '2024-03-10'
            },
            // Adicione mais alunos de informática aqui
        ]
    },
    administracao: {
        color: '#45B7D1',
        profiles: ['Auxiliar Administrativo', 'Assistente Financeiro', 'Assistente de RH', 'Auxiliar Contábil'],
        companies: ['Empresa ABC', 'Contabilidade XYZ', 'Grupo Empresarial', 'Banco Nacional'],
        students: [
            {
                id: 'ADM001',
                name: 'Carlos Mendes',
                registration: '2021089',
                photo: 'https://via.placeholder.com/60',
                status: 'active',
                company: 'Empresa ABC',
                profile: 'Auxiliar Administrativo',
                supervisor: 'Roberto Alves',
                progress: 85,
                hours: {
                    completed: 340,
                    total: 400
                },
                frequency: 98,
                lastReport: '2024-03-12'
            },
            // Adicione mais alunos de administração aqui
        ]
    },
    edificacoes: {
        color: '#96CEB4',
        profiles: ['Auxiliar de Obras', 'Desenhista CAD', 'Técnico em Edificações', 'Assistente de Projetos'],
        companies: ['Construtora Silva', 'Engenharia XYZ', 'Projetos & Obras', 'Construções Ltda'],
        students: [
            {
                id: 'EDI001',
                name: 'Mariana Costa',
                registration: '2021123',
                photo: 'https://via.placeholder.com/60',
                status: 'active',
                company: 'Construtora Silva',
                profile: 'Técnico em Edificações',
                supervisor: 'Eng. Paulo Roberto',
                progress: 70,
                hours: {
                    completed: 280,
                    total: 400
                },
                frequency: 90,
                lastReport: '2024-03-14'
            },
            // Adicione mais alunos de edificações aqui
        ]
    }
};

// Função para criar card de aluno
function createStudentCard(student) {
    return `
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="student-card">
                <div class="student-header">
                    <img src="${student.photo}" alt="Foto de ${student.name}" class="student-avatar">
                    <div>
                        <h5 class="mb-0">${student.name}</h5>
                        <small class="text-muted">Matrícula: ${student.registration}</small>
                        <span class="status-badge status-${student.status}">${student.status === 'active' ? 'Ativo' : 'Inativo'}</span>
                    </div>
                </div>
                <div class="student-info">
                    <p><strong>Empresa:</strong> ${student.company}</p>
                    <p><strong>Função:</strong> ${student.profile}</p>
                    <p><strong>Supervisor:</strong> ${student.supervisor}</p>
                    <div class="progress-info">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Progresso do Estágio</span>
                            <span>${student.progress}%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: ${student.progress}%"></div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p><i class="fas fa-clock"></i> Horas Completadas: ${student.hours.completed}/${student.hours.total}</p>
                        <p><i class="fas fa-calendar-check"></i> Frequência: ${student.frequency}%</p>
                        <p><i class="fas fa-file-alt"></i> Último Relatório: ${formatDate(student.lastReport)}</p>
                    </div>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-sm btn-outline-primary" onclick="showStudentDetails('${student.id}')">
                        Ver Detalhes
                    </button>
                </div>
            </div>
        </div>
    `;
}

// Função para mostrar detalhes do aluno
function showStudentDetails(studentId) {
    // Implementar modal ou página de detalhes do aluno
    console.log(`Mostrando detalhes do aluno: ${studentId}`);
}

// Função para formatar data
function formatDate(dateString) {
    const options = { day: '2-digit', month: '2-digit', year: 'numeric' };
    return new Date(dateString).toLocaleDateString('pt-BR', options);
}

// Função para mostrar alunos de um curso específico
function showCourse(courseName) {
    const courseData = coursesData[courseName];
    if (!courseData) return;

    // Atualizar estatísticas
    updateCourseStats(courseData);

    // Limpar e preencher lista de alunos
    const studentsList = document.getElementById('studentsList');
    studentsList.innerHTML = courseData.students.map(student => createStudentCard(student)).join('');

    // Atualizar abas ativas
    document.querySelectorAll('.course-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    document.querySelector(`.course-tab.${courseName}`).classList.add('active');
}

// Função para atualizar estatísticas do curso
function updateCourseStats(courseData) {
    const stats = {
        total: courseData.students.length,
        active: courseData.students.filter(s => s.status === 'active').length,
        completed: courseData.students.filter(s => s.progress === 100).length,
        pending: courseData.students.filter(s => s.status === 'pending').length
    };

    document.querySelectorAll('.stat-card .stat-number').forEach((stat, index) => {
        const values = [stats.total, stats.active, stats.completed, stats.pending];
        stat.textContent = values[index];
    });
}

// Função de pesquisa
function searchStudents(query) {
    const currentCourse = document.querySelector('.course-tab.active').textContent.split(' ')[0].toLowerCase();
    const filteredStudents = coursesData[currentCourse].students.filter(student => 
        student.name.toLowerCase().includes(query.toLowerCase()) ||
        student.registration.includes(query) ||
        student.company.toLowerCase().includes(query.toLowerCase())
    );

    const studentsList = document.getElementById('studentsList');
    studentsList.innerHTML = filteredStudents.map(student => createStudentCard(student)).join('');
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Mostrar primeiro curso por padrão
    showCourse('enfermagem');

    // Adicionar listener para pesquisa
    const searchInput = document.querySelector('.search-box input');
    searchInput.addEventListener('input', (e) => searchStudents(e.target.value));
});

// Função para filtrar por status
function filterByStatus(status) {
    const currentCourse = document.querySelector('.course-tab.active').textContent.split(' ')[0].toLowerCase();
    const filteredStudents = status === 'todos' 
        ? coursesData[currentCourse].students
        : coursesData[currentCourse].students.filter(student => student.status === status);

    const studentsList = document.getElementById('studentsList');
    studentsList.innerHTML = filteredStudents.map(student => createStudentCard(student)).join('');
}

// Adicionar mais alunos aos cursos
function generateMoreStudents() {
    const names = ['João', 'Maria', 'Pedro', 'Ana', 'Carlos', 'Julia', 'Lucas', 'Beatriz'];
    const surnames = ['Silva', 'Santos', 'Oliveira', 'Souza', 'Ferreira', 'Costa', 'Rodrigues', 'Almeida'];

    Object.keys(coursesData).forEach(course => {
        for (let i = 0; i < 44; i++) { // Gerar até completar aproximadamente 45 alunos por curso
            const randomName = `${names[Math.floor(Math.random() * names.length)]} ${surnames[Math.floor(Math.random() * surnames.length)]}`;
            const randomProgress = Math.floor(Math.random() * 100);
            const randomHours = Math.floor(Math.random() * 400);

            coursesData[course].students.push({
                id: `${course.toUpperCase()}${(i + 2).toString().padStart(3, '0')}`,
                name: randomName,
                registration: `2021${(i + 45).toString().padStart(3, '0')}`,
                photo: 'https://via.placeholder.com/60',
                status: randomProgress === 100 ? 'completed' : 'active',
                company: coursesData[course].companies[Math.floor(Math.random() * coursesData[course].companies.length)],
                profile: coursesData[course].profiles[Math.floor(Math.random() * coursesData[course].profiles.length)],
                supervisor: `Supervisor ${i + 2}`,
                progress: randomProgress,
                hours: {
                    completed: randomHours,
                    total: 400
                },
                frequency: 85 + Math.floor(Math.random() * 15),
                lastReport: new Date(2024, 2, Math.floor(Math.random() * 30) + 1).toISOString().split('T')[0]
            });
        }
    });
}

// Gerar mais alunos ao carregar a página
generateMoreStudents();
</script>
</body>
</html>