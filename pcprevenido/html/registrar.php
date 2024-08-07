<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrar.css">
    <title>Registrar-se</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/registrar.svg">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Registrar-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registrar.css">
    <title>Registrar-se</title>

</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_pcprevenido";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processando o formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $number = trim($_POST['number']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    
    // Validação de campos
    if (empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($password) || empty($confirmpassword)) {
        die("Todos os campos são obrigatórios.");
    }
    
    if ($password !== $confirmpassword) {
        die("As senhas não coincidem.");
    }
    
    // Hash da senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Preparando a query para inserção
    $script = $conn->prepare("INSERT INTO tb_usuario (firstname, lastname, email, number, password, gender) VALUES ('$firstname', '$lastname', '$email', '$number', '$password', '$gender') ");
    // $script->bind_param("ssssss", $firstname, $lastname, $email, $number, $hashed_password, $gender);
    
    // Executando a query
    if ($script->execute()) {
         
        echo  " <script>alert('Registro inserido com sucesso.')</script>";
    } else {
        echo "Erro ao inserir registro: " . $script->error;
    }
    
    // Fechando statement
    $script->close();

    // $script = "insert into tb_usuario(id, firstname, lastname, email, number, password, gender )  VALUES ('$firstname', '$lastname', '$email', '$number', '$password', '$confirmpassword', '$gender' )";
}

// Fechando conexão
$conn->close();
?>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../img/registrar.svg" alt="Registrar">
        </div>
        <div class="form">
            <form action="registrar.php" method="post" onsubmit="return validateForm();">
                <div class="form-header">
                    <div class="title">
                        <h1>Registrar-se</h1>
                    </div>
                    
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword">Confirme sua senha</label>
                        <input id="confirmpassword" type="password" name="confirmpassword" placeholder="Confirme sua senha" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input type="radio" id="female" name="gender" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit">Criar conta</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Função para validar o formulário
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;
    
            if (password !== confirmpassword) {
                alert("As senhas não coincidem.");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>