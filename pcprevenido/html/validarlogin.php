<?php
if (!empty(isset($_POST))) {
try {
    
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "bd_pcprevenido"; 
    
    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checa a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obtém dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara e executa a consulta
    $sql = "SELECT * FROM tb_login WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password); 
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        $_SESSION['logado'] = true;
        header("Location: ../index.php");

    } else {
        echo 'E-mail ou senha inválidos.';
    }

    // Fecha a conexão
    $stmt->close();
    $conn->close();
} catch (\Throwable $th) {
    //throw $th;
}
}
?>
