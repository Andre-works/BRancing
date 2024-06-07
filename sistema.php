<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:index.php');
    }
    $logado=$_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <style>
        body{
            background-color: lightblue;
        }
        h1{
            color: #ffffff;
        }
        h2{
            color: #ffffff;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: red;
            padding: 20px;
            border-radius: 10px;
            color: black;   
        }
        .box a{
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            border-radius: 5px; 
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="box">
        <a href="sair.php">sair</a>
    </div>
    <?php
        echo "<h1>Bem-Vindo $logado</h1>";
    ?>
</body>