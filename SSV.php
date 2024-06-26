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
    <link rel="stylesheet" href=".\css\SSV.css">
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
            <h2 class="ftext">Mac-Am Maverick R</h2>
            <img class="img" src=".\images\CanAm-Maverick1.png" alt="right-img">
            <p class="text">
                A nossa equipa desafia os limites da emoção e extrai toda a performance do Maverick R X RS DCT Smart-Shox da Can-Am. Com um motor potente de 240cv, um sistema de suspensão inteligente e uma aerodinâmica incrivél, preparamo-lo para conquistar os terrenos mais desafiadores, bater recordes e conquistar todas as corridas!
                <br><br> O Maverick é mais do que um veículo todo-o-terreno é uma máquina de precisão desenvolvida para superar obstáculos e dominar as pistas mais desafiadoras. Juntamente com a incrível tecnologia que oferece, o sistema de suspensão Smart-Shox adapta-se automaticamente ao terreno, proporcionando uma condução suave e controlada em cada curva e em cada salto.
                <br><br> Com a nossa equipe no controle deste veículo, estamos preparados para todos os desafios em pistas off-road. Desde acelerar em retas até um encontro com o terreno acidentado, estamos determinados a expressar o nosso entusiasmo pela velocidade, e conquistar a vitória.
                <br><br> Usando dedicação e conhecimento da nosso departamento de engenharia e performance conseguimos aumentar o desempenho do nosso carro com um nível tão elevado que o transformou no carro mais rápido do grid. Esta mudança não só demonstra o nosso compromisso em vencer todas as corridas, consolidando o reconhecimento da nossa equipa e pilotos no mundo das competições off-road.
                <br><br> Com o Maverick R X RS DCT Smart-Shox day Can-Am nas mãos de nosso departamento, estamos prontos para ultrapassar todas as limitações e melhorar o desempenho em todas as competições. Com um carro que combina potência, tecnologia e design avançado, estamos prontos para conquistar novos percursos, superar desafios e deixar nossa marca no Mundo das Corridas. Juntos iremos  rumo ao sucesso, superar desafios e alcançar novos patamares de excelência.
            </p>
            <div class="camp">
                <svg fill="#ffffff" height="100px" width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M503.652,18.735H370.099c-0.118-0.006-0.237-0.008-0.356-0.008c-1.69,0-3.358,0-5.012,0c-0.001,0-0.003,0-0.004,0
                                c-50.046,0-84.027,0-135.686,0.008c-4.61,0.001-8.348,3.739-8.347,8.349c0,4.611,3.739,8.348,8.349,8.347
                                c48.733-0.007,81.74-0.008,127.338-0.008v122.943c-1.798,6.658-3.867,13.111-6.157,19.201c-0.747,1.5-1.496,3.054-2.258,4.637
                                c-2.397,4.98-4.877,10.13-7.807,14.513c-0.033,0.049-0.066,0.099-0.097,0.149c-7.077,11.096-15.007,19.981-24.945,27.944
                                c-8.621,6.111-17.86,10.477-28.24,13.344c-0.002,0-0.004,0.002-0.007,0.002c-5.309,1.467-10.815,2.534-16.819,3.261h-13.521
                                c-0.394,0-0.787,0.028-1.178,0.083c-1.685,0.24-3.595,0.362-5.678,0.362c-5.021,0-10.484-0.7-15.264-1.378l-8.431-2.103
                                c-0.002,0-0.004-0.002-0.008-0.002l-3.611-0.902c-7.752-2.946-14.628-6.855-21.9-11.002c-10.183-6.51-17.022-15.044-24.932-24.917
                                l-0.672-0.839c-9.717-14.602-15.659-27.775-18.648-41.354l-2.084-123.936h23.758c4.61,0,8.348-3.737,8.348-8.348
                                s-3.738-8.348-8.348-8.348h-31.885c-0.119-0.006-0.239-0.008-0.359-0.008c-0.12-0.001-0.242,0.002-0.361,0.008H8.348
                                C3.738,18.735,0,22.471,0,27.083c0,30.797,8.395,60.302,24.276,85.328c15.793,24.885,37.959,43.624,64.172,54.334v206.336
                                c0,3.335,1.985,6.35,5.048,7.668c3.063,1.319,6.616,0.688,9.039-1.604l15.513-14.683l18.013,15.474
                                c1.544,1.326,3.482,2.016,5.442,2.016c1.178,0,2.363-0.249,3.476-0.759c2.963-1.358,4.865-4.314,4.871-7.574l0.341-182.045
                                c3.058,6.108,6.697,12.307,10.985,18.725c0.135,0.201,0.278,0.396,0.429,0.585l0.897,1.12
                                c8.515,10.627,16.557,20.665,29.176,28.676c0.111,0.07,0.239,0.147,0.354,0.211c7.327,4.178,14.894,8.493,23.575,11.881v26.108
                                c0,4.611,3.738,8.348,8.348,8.348h8.825V420.04c-27.246,9.695-45.761,35.506-45.761,64.885c0,4.611,3.738,8.348,8.348,8.348
                                h121.373c4.61,0,8.348-3.736,8.348-8.348c0-28.93-18.163-54.619-44.892-64.564V287.225h8.905c4.61,0,8.348-3.736,8.348-8.348
                                v-26.506c9.924-3.355,18.983-7.995,27.542-14.093c0.124-0.089,0.245-0.18,0.363-0.275c11.48-9.163,20.614-19.36,28.739-32.085
                                c3.391-5.09,6.133-10.693,8.558-15.726v182.889c0,3.335,1.985,6.349,5.048,7.668c3.063,1.319,6.616,0.688,9.039-1.604
                                l15.514-14.683l18.015,15.474c1.544,1.326,3.482,2.016,5.441,2.016c1.178,0,2.363-0.249,3.476-0.759
                                c2.963-1.358,4.865-4.315,4.871-7.574l0.386-207.239c25.826-10.77,47.673-29.362,63.286-53.967
                                C503.605,87.385,512,57.88,512,27.083C512,22.472,508.262,18.735,503.652,18.735z M88.447,148.499
                                c-41.57-19.893-68.798-62.871-71.525-113.069h120.504l0.193,11.467H43.248c-2.444,0-4.767,1.072-6.353,2.933
                                c-1.586,1.86-2.276,4.323-1.89,6.737c4.675,29.161,25.499,59.004,53.442,76.932V148.499z M133.186,355.455l-9.971-8.566
                                c-1.568-1.347-3.505-2.016-5.438-2.016c-2.069,0-4.134,0.766-5.74,2.285l-6.893,6.525V136.557h28.452L133.186,355.455z
                                M98.061,119.83c-21.246-13.409-37.774-34.577-44.327-56.238h84.164l0.946,56.238H98.061z M307.715,476.578H204.378
                                c3.271-20.304,18.306-37.091,38.786-42.261c3.698-0.933,6.292-4.252,6.305-8.066l0.002-139.025h14.025v138.35v0.884
                                c0.004,3.774,2.54,7.074,6.185,8.053C289.736,439.89,304.466,456.586,307.715,476.578z M271.845,270.53h-30.721h-8.825v-13.478
                                c5.293,0.747,11.368,1.509,17.375,1.509c2.669,0,5.103-0.147,7.417-0.445h13.454c0.325,0,0.651-0.02,0.974-0.057
                                c3.181-0.374,6.246-0.834,9.23-1.385v13.855H271.845z M407.758,157.198c-0.242,0.768-0.376,1.584-0.384,2.432
                                c-0.008,0.886,0.126,1.741,0.374,2.544l-0.361,193.281l-9.969-8.566c-1.567-1.347-3.504-2.016-5.438-2.016
                                c-2.068,0-4.134,0.766-5.74,2.285l-6.895,6.526V136.557h28.453L407.758,157.198z M413.939,119.83h-40.862V63.593h85.19
                                C451.713,85.254,435.184,106.422,413.939,119.83z M424.471,148.058l0.028-15.183c27.463-17.991,47.872-47.48,52.494-76.309
                                c0.387-2.414-0.303-4.876-1.89-6.737c-1.586-1.861-3.908-2.933-6.353-2.933h-95.676V35.431h122.003
                                C492.373,85.256,465.524,127.975,424.471,148.058z"/>
                        </g>
                    </g>
                </svg>
                <p class="camptext">X vezes campeão na categoria de ssv</p>
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
                <p class="podtext">X subidas ao podio desde 2000</p>
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