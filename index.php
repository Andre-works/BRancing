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

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="stylesheet" href=".\css\base.css">
    <title>BENIMOTO RACING</title>
    <link rel="icon" href=".\images\Logo-janela1.png" type="image/png">
</head>
<body id="Inicio">
    <header>
        <button id="menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5.5 0 1 1 0 1H3a.5.5.5 0 1 1 0-4H3a.5.5.5 0 1 1 0-4H3z"/>
            </svg>
        </button>
        <nav class="nav-vertical" id="vertical-menu">
            <a href=".\Historia.html" class="nav-links" target="_self">História</a>
            <a href=".\Pilotos.html" class="nav-links" target="_self">Pilotos</a>
            <a href=".\Equipa.html" class="nav-links" target="_self">Equipa</a>   
            <a href="#" class="nav-links" target="_self">Loja</a>
        </nav>
        <div class="box-img-header">
            <a href="#Inicio">
                <img class="img-logo" src=".\images\Logo-5.png">
            </a>
        </div>
        <div class="btnhaed">
            <?php if (isset($_SESSION['id']) && isset($_SESSION['nome'])): ?>
                <div class="user-menu">
                    <div class="user-image">
                        <img src=".\images\user.png" alt="User Image">
                    </div>
                    <div class="user-info">
                        <p>Olá, <?php echo $_SESSION['nome']; ?></p>
                        <p>Email: <?php echo $_SESSION['email']; ?></p>
                        <p><a href="configuracoes.php">Configurações</a></p>
                        <p><a href="sair.php">Sair</a></p>
                    </div>
                </div>
            <?php else: ?>
                <div class="login" title="Login" id="login-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person default" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill hover" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </div>
            <?php endif; ?>
            <div class="buttoncont" title="Contactar">
                Contactar
                <div class="contact-menu">
                    <a href="tel:+351 262 929 955" target="_blank">📞: +351 262 929 955</a>
                    <a href="mailto:comercial@benimoto.pt?subject=Assunto do Email&body=Olá, gostaria de entrar em contato sobre...">
                        📧: comercial@benimoto.pt
                    </a>
                </div>
            </div>
        </div>  
        <div class="bodylogin" id="bodylogin">
            <div class="container">
                <div class="row full-height justify-content-center">
                  <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                      <button class="close-button" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                        </svg>
                      </button>
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
    </header>
    <main>
        <section class="first-section"> 
            <div>
                <img id="backgroundImage" src=".\images\Capa-JanelaP2.jpg" alt="Background">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <div class="your-story">
                    <p class="image-text">A verdadeira <br>corrida começa <br>aqui!</p>
                    <p class="image-subtext">SSV’s os nossos carros campeões</p>
                    <button href="#your-story" class="saber" onclick="scrollToSection()">Conheça-nos</button>
                </div>
            </div>
        </section>
        <section id="your-story" class="second-section" > 
            <div>
                <img class="image-right" src=".\images\Logo-3.png" alt="logo-story">
                <p class="text-left"> Esta equipa formada após longos anos de experiência na
                    competição e na preparação de veículos e motores, foi oficializada
                    em 2007 e teve origem no campeonato nacional e europeu de
                    velocidade na categoria superbike. Vencedora do campeonato
                    nacional de velocidade  participação no Mundial de Superbikes
                    WSBK, North West 200, TT da Ilha de Man e o GP de Macau</p>
            </div>
        </section>
        <section class="third-section"> 
            <div class="expose">
                <div>
                    <img src=".\images\Logo-Titulo.png" alt="Imagem 1">
                    <p class="titulos-text1">Grupo Benimoto</p>
                    <p class="titulos-text">Campeões Nacionais de <br>Velocidade<br> 2008, 2009, 2010</p>
                </div>
                <div>
                    <img src=".\images\Logo-Titulo.png" alt="Imagem 2">
                    <p class="titulos-text1">Grupo Benimoto</p>
                    <p class="titulos-text">Campeões de Bajas<br>2020</p>
                </div>
                <div>
                    <img src=".\images\Logo-Capacete.png" alt="Imagem 3">
                    <p class="titulos-text1">Alexandre Pinto</p>
                    <p class="titulos-text">Vice-Campeão Mundial<br>Categoria<br></p>
                </div>
                <div>
                    <img src=".\images\Logo-Capacete.png" alt="Imagem 4">
                    <p class="titulos-text1">João Dias</p>
                    <p class="titulos-text">Campeão Mundial e<br>Nacional Categoria<br></p>
                </div>
                <div>
                    <img src=".\images\Logo-Capacete.png" alt="Imagem 5">
                    <p class="titulos-text1">Ruben Faria</p>
                    <p class="titulos-text">Campeão Mundial<br>Categoria<br></p>
                </div>
            </div>
        </section>
        <section class="fourth-section">
            <div class="barra-horizontal"></div>
            <div class="circulo"></div>
            <img class="canam-logo" src=".\images\Can-Am-Logo.png">
        </section>
        
    </main>

    <footer id="contactar">
        <div class="container1">
            <div class="Benimoto">
                <h2>BENIMOTO</h2><br>
                <div class="linhaB"></div>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=84" target="_blank">Sobre Nós</a><br>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=91" target="_blank">Contactos - Benedita</a><br>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=545" target="_blank">Contactos - Caldas da Rainha</a><br>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=95" target="_blank">Termos de Utilização</a><br>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=96" target="_blank">Politica de Privacidade</a><br>
                <a href="https://www.benimoto.pt/benimoto_motas.aspx?ID_Canal=96" target="_blank">Politica de Privacidade</a><br>
                <a href="https://www.benimoto.pt/benimoto_contactos.aspx" target="_blank">Pedir Informação</a>
            </div>
            <div class="Contactos">
                <h2>CONTACTOS</h2>
                <br>
                <div class="linhaC"></div>
                <a href="tel:+351 262 920 054" title="Telefone">  📞 :+351 262 920 054</a><br>
                <a href="mailto:comercial@benimoto.pt?subject=Assunto do Email&body=Olá, gostaria de entrar em contato sobre..." title="Email">  📧: comercial@benimoto.pt</a>
                <p>🕗 :Seg-Sex: 9:00 - 13:00 e 14:30 - 19:00<br>‎ ‎ ‎ ‎   ㅤSáb: 9:00 - 13:00</p>
            </div>
            <div class="BenimotoRacing">
                <h2>BENIMOTO RACING</h2>
                <br>
                <div class="linhaR"></div>
                <a href="Sobre.html"> 
                    <p>Sobre Nós</p>
                </a>
                <a href="Inf.html"> 
                    <p>Pedir Informação</p>
                </a>
                <div class="redescont">
                    <a href="https://www.instagram.com/benimotoracing" title="Instagram" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/benimotoracing/?locale=pt_BR" title="Facebook" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>    
                    </a>
                    <a href="https://www.youtube.com/@benimotoracing4200?app=desktop" title="Youtube" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="marginfinal"></div>
    </footer>
</body>
</html>