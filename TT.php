<?php
// Verificar se o usuário está logado
session_start();
if (!isset($_SESSION['usuario_logado'])) {
    // Se o usuário não estiver logado, redireciona para a página de login
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=advice-widht", initial-scale="1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=".\css\TT.css">
    <link rel="stylesheet" href=".\css\base.css">
    <title> BENIMOTO RACING</title>
    <link rel="icon" href=".\images\Logo-janela1.png" type="image/png">
</head>
    <header>
        <button id="menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5.5 0 1 1 0 1H3a.5.5.5 0 1 1 0-4H3a.5.5.5 0 1 1 0-4H3z"/>
            </svg>
        </button>
        <nav class="nav-vertical" id="vertical-menu">
            <a href=".\Historia.php" class="nav-links" target="_self">História</a>
            <a href=".\Pilotos.php" class="nav-links" target="_self">Pilotos</a>
            <a href=".\Equipa.php" class="nav-links" target="_self">Equipa</a>   
            <a href="#" class="nav-links" target="_self">Loja</a>
        </nav>
        <div class="box-img-header">
            <a href=".\Home.php">
                <img class="img-logo" src=".\images\Logo-5.png">
            </a>
        </div>
        <div class="btnhaed">
                <div class="login" title="Login" id="login-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person default" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill hover" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </div>
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
                      <label for="reg-log"></label>
                      <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                          <div class="card-front">
                            <div class="center-wrap">
                              <div class="log-dados">
                                <img src="https://via.placeholder.com/300x150" alt="Imagem do Usuário">
                                <h2>Olá, Username</h2>
                                <h3>user@example.com</h3>
                                <div class="btn-loged">
                                    <a href="alterar-senha.php">Alterar senha</a>
                                    <a href="sair.php">Sair</a> 
                                </div>
                              </div>
                            </div>
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
<body id="Inicio">
        
    <main>
        <section class="first-section"> 
            <h2 class="ftext">Yamaha R6</h2>
            <img class="img" src=".\images\ilhatt.png" alt="right-img">
            <p class="text">
                No ano de 2010, participá-mos no circuito mais díficil e temido, o circuito Isle of Man TT. Com o nosso talentoso piloto Luís Carreira, enfrentou os desafios deste circuito expondo as suas habilidades e determinação em cada curva.
                <br><br>Luís Carreira na sua Yamaha R6 consquistou o impressionante 17º lugar, na categoria Superstock. Conquistou pontos cruiciais e demonstrou o seu compromisso nas corridas.
                Além da categoria Superstock, o nosso piloto conquistou também o 22º lugar na categoria Superbike, também em 2011 conquistou o 16º lugar com muita persistência. Atingindo os limites da velocidade e da técnica, representando-nos com destreza e bravura.
                <br><br>A nossa passagem pela Ilha of the Man TT em 2010 não foi apenas sobre as habilidades do nosso piloto Luís Carreira, mas também pelas incrivél tranformação da sua máquina para enfrentar os desafios extremos deste circuito lendário.
                <br><br>A sua R6 passou por uma série de modificações projetadas para extrair o máximo de desempenho e aerodinâmica da Yamaha, foram ajustadas as suspensões para lidar com as mudanças de elevação, enquanto o sistema de travagem foi aprimorado para propocionar uma 
                resposta precisa e consistente. O motor foi afinado para oferecer uma potência suave e controlável, garantimos que o piloto tivesse o necessário para enfrentar os trechos mais exigentes da pista.
                <br><br>A estampa da Yamaha R6 foi uma obra de arte, com as cores azul e branco que não apenas nos identificava, mas também proporcionava uma presença marcável nas estradas da Ilha. O azul dava uma sensação de confiança e determinação, enquanto o branco brilhante dava a elegância  e estilo á mota. Com o nosso logotipo em destaque em várias partes da mota, estáva-mos determinados a deixar a nossa marca na competição.
                <br><br>A tranformação por parte da equipa, não mostou apenas o nosso compromisso nas corridas. Criámos não apenas uma mota, mas uma obra de arte em movimento, pronta para desafiar os limiter e perigos da Isle of Man TT.
                <br><br>Assim, a nossa estampa não era apenas uma escolha estética, mas sim um símbolo de determinação, identidade e prestígio na corrida de estrada mais desafiadora do mundo.
            </p>
            <div class="camp">
                <svg fill="#ffffff" height="100px" width="100px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 296.193 296.193" xml:space="preserve">
                    <g>
                        <path d="M213.764,95.654V10c0-5.523-4.145-10-9.667-10h-49.333v75.687C176.764,76.927,196.764,83.822,213.764,95.654z"/>
                        <path d="M139.764,0H91.097c-5.522,0-10.333,4.477-10.333,10v86.341c18-12.063,38-19.171,59-20.594V0z"/>
                        <path d="M148.096,90.475c-56.807,0-102.857,46.051-102.857,102.859s46.051,102.859,102.857,102.859
                            c56.809,0,102.859-46.051,102.859-102.859S204.904,90.475,148.096,90.475z M197.507,209.379l6.593,38.447
                            c0.965,5.628-1.349,11.314-5.968,14.671c-2.613,1.898-5.708,2.864-8.818,2.864c-2.387,0-4.784-0.569-6.979-1.724l-34.522-18.151
                            l-34.527,18.152c-2.195,1.153-4.592,1.723-6.979,1.723c-3.11,0-6.206-0.966-8.819-2.865c-4.619-3.355-6.932-9.044-5.967-14.671
                            l6.597-38.446l-27.934-27.226c-4.089-3.985-5.561-9.947-3.796-15.377c1.765-5.431,6.459-9.389,12.109-10.21l38.601-5.607
                            l17.264-34.979c2.527-5.12,7.742-8.361,13.451-8.361c5.71,0,10.924,3.241,13.451,8.361l17.263,34.98l38.599,5.607
                            c5.65,0.82,10.345,4.778,12.109,10.208c1.765,5.431,0.293,11.392-3.796,15.377L197.507,209.379z"/>
                        <polygon points="147.813,228.539 189.315,250.361 181.39,204.142 214.969,171.411 168.566,164.67 147.813,122.619 127.059,164.67 
                            80.653,171.411 114.234,204.142 106.305,250.361 	"/>
                    </g>
                </svg>
                <p class="camptext">Classe Superstock <br>- 17º Lugar (2010)<br>- 13ºLugar (2011)</p>
            </div>
            <div class="pod">
                <svg fill="#ffffff" height="100px" width="100px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 296.193 296.193" xml:space="preserve">
                    <g>
                        <path d="M213.764,95.654V10c0-5.523-4.145-10-9.667-10h-49.333v75.687C176.764,76.927,196.764,83.822,213.764,95.654z"/>
                        <path d="M139.764,0H91.097c-5.522,0-10.333,4.477-10.333,10v86.341c18-12.063,38-19.171,59-20.594V0z"/>
                        <path d="M148.096,90.475c-56.807,0-102.857,46.051-102.857,102.859s46.051,102.859,102.857,102.859
                            c56.809,0,102.859-46.051,102.859-102.859S204.904,90.475,148.096,90.475z M197.507,209.379l6.593,38.447
                            c0.965,5.628-1.349,11.314-5.968,14.671c-2.613,1.898-5.708,2.864-8.818,2.864c-2.387,0-4.784-0.569-6.979-1.724l-34.522-18.151
                            l-34.527,18.152c-2.195,1.153-4.592,1.723-6.979,1.723c-3.11,0-6.206-0.966-8.819-2.865c-4.619-3.355-6.932-9.044-5.967-14.671
                            l6.597-38.446l-27.934-27.226c-4.089-3.985-5.561-9.947-3.796-15.377c1.765-5.431,6.459-9.389,12.109-10.21l38.601-5.607
                            l17.264-34.979c2.527-5.12,7.742-8.361,13.451-8.361c5.71,0,10.924,3.241,13.451,8.361l17.263,34.98l38.599,5.607
                            c5.65,0.82,10.345,4.778,12.109,10.208c1.765,5.431,0.293,11.392-3.796,15.377L197.507,209.379z"/>
                        <polygon points="147.813,228.539 189.315,250.361 181.39,204.142 214.969,171.411 168.566,164.67 147.813,122.619 127.059,164.67 
                            80.653,171.411 114.234,204.142 106.305,250.361 	"/>
                    </g>
                </svg>
                <p class="podtext">Classe Superbike <br>- 22º Lugar (2010)<br>- 16º Lugar (2011) </p>
            </div>
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
                <a href="Sobre.php"> 
                    <p>Sobre Nós</p>
                </a>
                <a href="Inf.php"> 
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
<script src="main.js"></script>
</html>