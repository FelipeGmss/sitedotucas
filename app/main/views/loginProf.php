<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estágio - Login</title>
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

        /* Formulário de login */
        .login-box {
            background-color: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .login-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .login-box::before {
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

        .login-box:hover::before {
            transform: scaleX(1);
        }

        .login-box h2 {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            text-align: center;
        }

        .login-box h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background-color: var(--secondary-color);
        }

        .login-box .form-label {
            color: var(--primary-color);
            font-weight: 500;
        }

        .login-box .form-control {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            transition: var(--transition);
        }

        .login-box .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 5px rgba(46, 125, 50, 0.3);
        }

        .login-box .btn-primary {
            background-color: var(--primary-color);
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
            transition: var(--transition);
        }

        .login-box .btn-primary:hover {
            background-color: var(--hover-color);
            transform: scale(1.02);
        }

        /* Botão de voltar */
        .btn-voltar {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: var(--white);
            text-decoration: none;
            border-radius: 8px;
            transition: var(--transition);
            font-size: 1rem;
        }

        .btn-voltar:hover {
            background-color: #5a6268;
            transform: scale(1.05);
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
            .login-box {
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Seção de Login -->
    <div class="container mt-5">
        <div class="login-box fade-in">
            <!-- Botão de voltar -->
            <a href="../index.php" class="btn-voltar">← Voltar</a>
            <h2>Login</h2>
            <form action="../controller/ControllerLoginProf.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required>
                </div>
                <input type="submit" class="btn btn-primary" name="btn" value="Entrar">
            </form>
        </div>
    </div>

    <!-- Bootstrap JS e script personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Scripts para interatividade
        document.addEventListener('DOMContentLoaded', function() {
            // Adiciona animação fade-in ao formulário
            const loginBox = document.querySelector('.login-box');
            loginBox.classList.add('active');
        });
    </script>
</body>
</html>