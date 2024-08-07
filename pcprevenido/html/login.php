<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aqua;
        }
        .caixa{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>


// // Verifica se o formulário foi submetido
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Conexão com o banco de dados (coloque suas próprias configurações)
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "tb_login";

//     // Estabelecendo conexão
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Verificando conexão
//     if ($conn->connect_error) {
//         die("Erro de conexão: " . $conn->connect_error);
//     }

//     // Capturando os dados do formulário
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Query para verificar se o usuário existe
//     $sql = "SELECT * FROM usuarios WHERE email = '$email'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // Usuário encontrado, verificar senha
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['password'])) {
//             // Senha correta, login bem sucedido
//             session_start();
//             $_SESSION['id'] = $row['id']; // Salvar ID do usuário na sessão, por exemplo
//             $_SESSION['email'] = $row['email']; // Salvar outros dados do usuário, se necessário

//             // Redirecionar para página de perfil ou dashboard, por exemplo
//             header("Location: dashboard.php");
//             exit();
//         } else {
//             // Senha incorreta
//             echo "Senha incorreta.";
//         }
//     } else {
//         // Usuário não encontrado
//         echo "Usuário não encontrado.";
//     }

//     // Fechar conexão
//     $conn->close();
// }
// ?> -->

<!-- <body>
    <div class="caixa">
        <form action="form.html">
            
            <div style="text-align: center;">

            <h1>PC PREVENIDO</h1>
            <br>

            <h2>Seja bem vindo(a)</h2>
            
            <label>Faça seu Login:</label>
            <br>
            <br>
            
            <input type="email" placeholder="E-mail" required>
            <i class='bx bxs-user'></i>
            <br>
            <br>
            
            <input type="password" placeholder="Senha" required>
            <i class='bx bxs-lock-alt'></i>
            <br>
            <br>

            
            <label><input type="checkbox">Lembrar-me</label>
            <br> <br>
            <label>Esqueceu a senha?</label> <a href="clique aqui.html">Cique aqui</a>
            
            <br> <br>
            <input type="submit" value="Entrar" >
            </div>

            <div class="register-link">
                <p>Você não tem conta ? <a href="./registrar.php">Registrar-se</a></p>
            </div>

        </form>
    </div>
    <script href="../js/script.js"></script>
</body>
</html> -->





<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: aqua;
        }
        .caixa {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="caixa">
        <form method="POST" action="">
            <div style="text-align: center;">

                <h1>PC PREVENIDO</h1>
                <br>

                <h2>Seja bem vindo(a)</h2>

                <label>Faça seu Login:</label>
                <br><br>

                <input type="email" name="email" placeholder="E-mail" required>
                <i class='bx bxs-user'></i>
                <br><br>

                <input type="password" name="password" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
                <br><br>

                <label><input type="checkbox">Lembrar-me</label>
                <br><br>
                <label>Esqueceu a senha?</label> <a href="clique_aqui.html">Clique aqui</a>

                <br><br>
                <input type="submit" value="Entrar">
            </div>

            <div class="register-link">
                <p>Você não tem conta? <a href="./registrar.php">Registrar-se</a></p>
            </div>

        </form>
    </div>

</body>
</html> -->



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: aqua;
        }

        .caixa {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>


<body>
    <div class="caixa">
        <form id="loginForm" method="POST" action="validarlogin.php">
            <div style="text-align: center;">
                <h1>PC PREVENIDO</h1>
                <br>

                <h2>Seja bem-vindo(a)</h2>
                <label>Faça seu Login:</label>
                <br><br>

                <input type="email" name="email" placeholder="E-mail" required>
                <i class='bx bxs-user'></i>
                <br><br>

                <input type="password" name="password" placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i>
                <br><br>

                <label><input type="checkbox"> Lembrar-me</label>
                <br><br>

                <label>Esqueceu a senha?</label> <a href="clique_aqui.html">Clique aqui</a>
                <br><br>
                <div id="resultado">
            
             
            </div>
                <input type="submit" value="Entrar">
                <p id="error-message" class="error"></p>
            </div>
            <div class="register-link">
                <p>Você não tem conta? <a href="./registrar.php">Registrar-se</a></p>
            </div>
        </form>
    </div>

</body>
</html>