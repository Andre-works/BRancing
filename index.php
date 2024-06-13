<?php
    if(isset($_POST['submit']))
    {
        /*
        print_r('Nome: '.$_POST['nome']);
        print_r('<br>');
        print_r('Telemovel: '.$_POST['telemovel']);
        print_r('<br>');
        print_r('Email: '.$_POST['email']);
        print_r('<br>');
        print_r('Passowrd:'.$_POST['password']);
        */

        include_once('conexao.php');
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telemovel=$_POST['telemovel'];
        $password=$_POST['password'];
        $result=mysqli_query($conexao,"INSERT INTO usuarios(nome,email,telemovel,password) VALUES('$nome','$email','$telemovel','$password')");
    }
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="stylesheet" href="login.css">
    <title>BENIMOTO RACING</title>
    <link rel="icon" href=".\images\Logo-janela1.png" type="image/png">
</head>
<body>
  <div class="back">
    <img src="./images/back-login.png" alt="Background Image">
  </div>
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                        <form action="testelogin.php" method="POST">
                            <h4 class="mb-4 pb-3">Log In</h4>
                            <div class="form-group">
                                <input type="email" class="form-style" placeholder="Email"  name="email" required>
                                <i class="input-icon uil uil-at"></i>
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" class="form-style" placeholder="Password"  name="password" required>
                                <i class="input-icon uil uil-lock-alt"></i>
                            </div>
                            <input type="submit" class="btn mt-4" name="submit" id="submit" value="Login"></input>
                            <p class="mb-0 mt-4 text-center"><a href="#" class="link">Esqueceu a sua password?</a></p>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <form action="index.php" method="POST">
                        <h4 class="mb-3 pb-3">Sign Up</h4>
                        <div class="form-group">
                          <input type="text" class="form-style" placeholder="Nome completo" name="nome" required>
                          <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="tel" class="form-style" placeholder="Número telemóvel" name="telemovel" required>
                          <i class="input-icon uil uil-phone"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="email" class="form-style" placeholder="Email" name="email" required>
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Password" name="password" required>
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <input type="submit" class="btn mt-4" name="submit" id="submit"></input>
                      </form>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src=".\java\main.js"></script>
</body>
</html>