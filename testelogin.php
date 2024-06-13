<?php
    session_start();
    print_r($_REQUEST);
    include_once('conexao.php');
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Verificação das credenciais
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['usuario_logado'] = true;
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            header('Location: Home.php');
            exit();
        } else {
            echo "Email ou senha inválidos.";
            header('Location: index.php');
        }
    }
?>