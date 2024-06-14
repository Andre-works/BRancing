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
    <link rel="stylesheet" href=".\css\Equipa.css">
    <link rel="stylesheet" href=".\css\base.css">
    <title> BENIMOTO RACING</title>
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
    <main>
        <section class="first-section"> 
            <div>
                <img class="backgroundImage" src=".\images\Baner2.png" alt="Background">
            </div>
        </section>
        <section class="second-section"> 
            <div  class="x-bars">
                <div class="bars">
                    <h2 class="tit-bars">Sede</h2>
                    <div class="barras"></div>
                </div>
                <div class="text-bars">
                <p>A Benimoto Racing está localizada na Benedita, Portugal. Fundada em 2000, a tem como propósito oferecer uma ampla gama de veículos e serviços relacionados aos desportos motorizados. Especializada em moto 4, side-by-side e motas de água, a Benimoto Racing atua como concessionária oficial das marcas Can-Am e Sea-Doo e oficina da equipa de competições.
                O objetivo da Benimoto Racing é proporcionar uma experiência de qualidade e serviço de excelência. A nossa missão é promover a paixão pelos desportos motorizados e fornecer soluções de mobilidade inovadoras e emocionantes. Com uma equipa dedicada e experiente, a Benimoto Racing busca atender às necessidades dos entusiastas de desportos motorizados, ajudando-os a desfrutar ao máximo da sua experiência de condução.
                As novas instalações construidas em 2020, que propocionam um espaço de exposição de mais de 200m², uma oficina e um armazem de aproximandamente  1200m². Assim possibilitando o desenvolvimento e aprimoramento dos nossos carros campeões, bem como o desenvolvimento de novas tecnologias para serem usadas em competição.</p>
                </div>
            </div>
        </section>
        <section class="third-section"> 
            <div  class="x-bare">
                <div class="bare">
                    <div class="barrae"></div>
                    <h2 class="tit-bare">Equipa</h2>
                </div>
                <div class="equip-pics1">
                    <img id="openModalBtn1" src=".\images\Dep.eng.png" alt="Abrir Modal 1" class="modal-button">
                    <img id="openModalBtn2" src=".\images\Dep.aer.png" alt="Abrir Modal 2" class="modal-button">
                    <img id="openModalBtn3" src=".\images\Dep.assi-tec.png" alt="Abrir Modal 3" class="modal-button">
                    <img id="openModalBtn4" src=".\images\Dep.pil.png" alt="Abrir Modal 4" class="modal-button">
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Engenharia da nossa equipe de corrida é o coração pulsante por trás do desempenho excecional dos nossos veículos em terrenos desafiadores. Com uma equipe de engenheiros apaixonados e experientes, estamos constantemente a inovar e aprimorar os nossos veículos para garantir que estejam prontos para enfrentar qualquer obstáculo.
                            Os nossos engenheiros (NOMES) dedicam horas incansáveis ​​ao desenvolvimento e ajuste dos veículos para garantir que cada componente seja otimizado para maximizar o desempenho. Desde a suspensão até o sistema de tração, cada detalhe é meticulosamente trabalhado para proporcionar a melhor experiência de condução em condições extremas.
                            Além disso, a nossa equipa de engenharia está sempre em busca de novas tecnologias e soluções inovadoras para manter os nossos carros no topo da tabela.
                            No Departamento de Engenharia, a busca pela excelência e o desejo de superar limites impulsionam cada projeto, cada ajuste e cada inovação. Estamos comprometidos em levar os nossos carros ao pódio, e é com orgulho e determinação que enfrentamos cada desafio que se apresenta no emocionante mundo das corridas todo o terreno.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal2" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Aerodinâmica é a chave para maximizar a eficiência e o desempenho dos nossos veículos em competição. Com uma equipe de especialistas dedicados a moldar o ar ao nosso favor, buscamos constantemente soluções inovadoras para otimizar a aerodinâmica dos nossos veículos e garantir uma vantagem competitiva nas pistas.
                            Os nossos engenheiros aerodinâmicos utilizam simulações avançadas e análises detalhadas para projetar componentes que reduzem o arrasto, aumentam a downforce e melhoram a estabilidade dos nossos veículos em alta velocidade. Cada curva, cada ângulo e cada detalhe são cuidadosamente estudados e refinados para garantir um desempenho excecional em qualquer terreno.
                            Além disso, colaboramos estreitamente com os engenheiros de chassis, suspensão e motor para garantir que o design aerodinâmico se integre perfeitamente ao conjunto do veículo, proporcionando um equilíbrio ideal entre velocidade, controle e eficiência. O nosso maior objetivo é criar veículos que cortem o ar com elegância, mantendo-se estáveis e ágeis em condições desafiadoras.
                            No Departamento de Aerodinâmica, a busca pela excelência, a precisão nos detalhes e a paixão pela inovação são os pilares que nos impulsionam a desafiar os limites da física e da engenharia. Estamos comprometidos em garantir que cada curva, cada salto e nas retas sejam uma oportunidade para os nossos carros brilharem.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal3" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Assistência Técnica é o suporte fundamental por trás da operação suave e eficiente da nossa equipa. Com técnicos especializados e dedicados, estamos sempre prontos para lidar com os desafios e contratempos que podem surgir antes, durante e após as corridas, garantindo que nossos veículos estejam sempre em condições ideais para competir.
                            Os nossos técnicos são treinados para lidar com uma ampla gama de situações, desde manutenção preventiva e ajustes de última hora até reparos de emergência e resolução de problemas complexos. Eles trabalham em colaboração com os engenheiros e pilotos para garantir que cada veículo esteja pronto para enfrentar os rigores das corridas, oferecem suporte técnico especializado em todos os aspetos mecânicos e eletrónicos.
                            Além disso, o Departamento de Assistência Técnica é responsável por gerenciar o cronograma de manutenção, a logística de peças de reposição e o estoque de ferramentas e equipamentos necessários para garantir que a nossa equipa possa operar de forma eficiente em qualquer local e em todas as condições.
                            No Departamento de Assistência Técnica, a dedicação, a agilidade e a expertise técnica são os pilares que sustentam a nossa equipa e permite-nos superar os desafios mais exigentes das corridas. Estamos comprometidos em fornecer suporte inigualável aos nossos pilotos e engenheiros, garantindo que cada corrida seja uma oportunidade para demonstrar o nosso profissionalismo e excelência técnica.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal4" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Desenvolvimento de Pilotos é essencial para aprimorar o talento dos nossos pilotos, preparando-os para enfrentar os desafios únicos das corridas. Com um programa abrangente de treino, buscamos não apenas melhorar o desempenho nas pistas, mas também desenvolver habilidades essenciais dentro e fora do veículo.
                            Os instrutores e treinadores são pilotos experientes e especialistas em corridas off-road, capazes de transmitir conhecimentos técnicos, estratégicos e psicológicos fundamentais para o sucesso nas competições. Eles trabalham em estreita colaboração com cada piloto, identificando pontos fortes e áreas de melhoria, criando planos de desenvolvimento personalizados e oferecendo feedback construtivo para acelerar o crescimento e o progresso.
                            Além disso, o Departamento de Desenvolvimento de Pilotos organiza sessões de treino práticas, simulações de corrida, preparação física e mental, bem como atividades de team building para fortalecer o espírito de equipe e a conexão entre os pilotos e os membros da equipa. A busca pela excelência, pela consistência e pela resiliência são valores fundamentais que guiam o nosso trabalho diário.
                            No Departamento de Desenvolvimento de Pilotos, a paixão pela corrida, o comprometimento com a melhoria contínua e o respeito pela tradição e história do desporto são a base que sustentam o nosso programa de formação de pilotos de elite. </p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>
                </div>
                <div class="equip-pics2">
                    <img id="openModalBtn5" src=".\images\Dep.ges-des.png" alt="Abrir Modal 5" class="modal-button">
                    <img id="openModalBtn6" src=".\images\Dep.com.png" alt="Abrir Modal 6" class="modal-button">
                    <img id="openModalBtn7" src=".\images\Dep.log.png" alt="Abrir Modal 7" class="modal-button">
                    <img id="openModalBtn8" src=".\images\Dep.marketing.png" alt="Abrir Modal 8" class="modal-button">
                    <div id="modal5" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Gestão Desportiva desempenha um papel fundamental na organização e administração de todas as atividades relacionadas às  corridas. Com uma abordagem focada no sucesso, a nossa equipa de gestão esportiva trabalha incansavelmente nos bastidores para garantir que todos os aspetos logísticos estejam alinhados para alcançar os objetivos da equipa.
                            Os nossos gestores esportivos são responsáveis por uma variedade de funções essenciais, incluindo o planeamento do calendários de competições, a coordenação de viagens e hospedagem, a gestão de orçamentos, a supervisão de contratos e acordos comerciais, além do desenvolvimento de estratégias de marketing e comunicação para promover a equipa e os nossos pilotos.
                            Além disso, o Departamento de Gestão Desportiva atua como o elo entre a equipa, os pilotos, os organizadores de eventos e os fãs, garantindo uma comunicação eficaz e uma representação profissional em todas as interações.
                            No Departamento de Gestão Desportiva, a visão estratégica e a capacidade de liderança são os pontos cruiciais para a nossa equipa e nos permitem alcançar o sucesso em um ambiente altamente competitivo e dinâmico.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal6" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>Dentro do Departamento de Gestão Desportiva, a área de Comunicação desempenha um papel crucial na construção da imagem da equipa, na promoção da marca e dos pilotos, bem como na interação com os fãs e a imprensa. A comunicação eficaz é essencial para garantir uma presença forte e positiva no mundo das corridas.
                            Os profissionais de comunicação desta subdivisão são responsáveis por uma variedade de tarefas, incluindo a criação de estratégias de comunicação, a gestão das redes sociais, a produção de conteúdo visual e escrito e a resposta a consultas da imprensa e dos fãs.
                            Além disso, a equipe de Comunicação trabalha em estreita colaboração com os gestores esportivos e os pilotos para garantir uma mensagem consistente e alinhada com os valores da equipa. Eles são os porta-vozes da equipa em diversos canais de comunicação, transmitindo notícias, atualizações, histórias inspiradoras e informações relevantes para manter os fãs informados.
                            No Departamento de Comunicação, a criatividade, a proatividade e a habilidade de adaptação são fundamentais para construir relacionamentos sólidos e autênticos com diferentes públicos. A transparência e a autenticidade são valores essenciais que guiam nosso trabalho diário, assegurando que a equipa seja percebida como uma marca confiável, acessível e apaixonante para todos os seus seguidores e apoiadores.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal7" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Logística desempenha um papel fundamental na equipa, garantindo que todos os aspetos relacionados à movimentação das pessoas, equipamentos, carros e materiais sejam gerenciados de forma eficiente e eficaz. Com a natureza dinâmica e desafiadora das competições, a logística desempenha um papel crucial no sucesso da equipe.
                            A equipe de logística é responsável por uma série de tarefas essenciais, incluindo o planeamento do tranjeto, a coordenação de alojamento e alimentação durante as competições, o controle do estoque de peças de reposição e equipamentos, além da gestão de cronogramas e horários para garantir que tudo esteja sincronizado.
                            Além disso, o Departamento de Logística trabalha em estreita colaboração com os gestores esportivos, os mecânicos e os pilotos para garantir que as necessidades logísticas sejam atendidas de forma oportuna e eficiente, permitindo que a equipa se concentre no desempenho nas pistas sem preocupações adicionais.
                            A logística é a componente importante da equipa, garantindo que tudo funcione sem problemas nos bastidores para que os pilotos possam concentrar-se no que fazem de melhor: competir.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>

                    <div id="modal8" class="modal">
                        <div class="modal-content">
                            <span class="close-btn">&times;</span>
                            <p>O Departamento de Marketing desempenha um papel fundamental na promoção da equipa, garantindo que a mensagem certa seja entregue ao público-alvo da forma mais eficaz possível.
                            O departamento coleta dados para entender melhor o público-alvo, as preferências e comportamentos de consumo. Isso inclui informações demográficas, padrões de uso e feedback dos clientes.
                            Com base nos dados coletados, o departamento desenvolve estratégias de marketing personalizadas para atingir e engajar o público-alvo de maneira eficaz. Isso pode envolver campanhas, parcerias estratégicas e marketing de conteúdo.
                            O Departamento de Marketing trabalha em estreita colaboração com outros departamentos, como Desenvolvimento de Pilotos, Assistência Técnica e Gestão Desportiva, para garantir que as estratégias de marketing estejam alinhadas com os objetivos gerais da equipa.
                            O marketing integrado é essencial para garantir uma mensagem consistente em todos os canais de comunicação, incluindo redes sociais e publicidade online.
                            Após a implementação das estratégias de marketing, o departamento analisa os resultados para avaliar a eficácia das campanhas e ajustar as estratégias conforme necessário.
                            O Departamento de Marketing desempenha um papel crucial na construção da marca, na atração de novos clientes para a Benimoto e na fidelização dos existentes. Com uma abordagem estratégica e orientada a dados, o marketing contribui significativamente para o sucesso e crescimento da empresa.</p>
                            <img src=".\images\Box.jpg">
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <section class="fourth-section"> 
            <div  class="x-barl">
                <div class="barl">
                    <h2 class="tit-barl">Suporte Logístico</h2>
                    <div class="barral"></div>
                </div>
                <div class="logistic1">
                    <div class="s1">
                        <img class="left-img" src=".\images\maverick-equipa.png" alt="left-img">
                        <h2>5X</h2>
                        <p>Can-am Maverick</p>
                        <p>Classe T3 & T4</p>
                    </div>
                    <div class="s2">
                        <img class="left-img" src=".\images\tenda.png" alt="left-img">
                        <h2>7X</h2>
                        <p>Tenda</p>
                        <p>Sala de Estar</p>
                    </div>
                    <div class="s3">
                        <img class="left-img1" src=".\images\carrinha.png">
                        <h2>4X</h2>
                        <p>Carrinha de suporte</p>
                        <p>Técnica</p>
                    </div>
                </div>
                <div class="logistic2">
                    <div class="s1">
                        <img class="left-img" src=".\images\oficina.png" alt="left-img">
                        <h2>20 m²</h2>
                        <p>Oficina</p>
                    </div>
                    <div class="s5">
                        <img class="left-img" src=".\images\equipa.png"  alt="left-img">
                        <h2>12 Pessoas</h2>
                        <p>Equipa</p>
                        <p>Suporte</p>
                    </div>
                    <div class="s4">
                        <img class="left-img" src=".\images\camiao.png" alt="left-img">
                        <h2>1X</h2>
                        <p>Porta Carros</p>
                        <p>Transporte</p>
                    </div>
                </div>
            </div>
            <div class="montagem">
                <h2>Serviço global 100% completo e profissional</h2>
                <div class="top-row">
                    <p>Fazer parte da Benimoto Racing é sinónimo de grandes vitórias, mas também de garantia de um serviço premium e de assistência, com todos os meios necessários á disposição dos nossos clientes e parceiros.
                    Pode ser contratado o serviço de assistência técnica em prova e ainda um serviço “chave na mão” em que o piloto apenas tem de se deslocar ao local da prova. A nossa equipa trata de todo o processo de inscrição, marcação de alojamento, transporte do veículo até à prova e assistência técnica na mesma.</p>
                    <img src=".\images\Box.jpg" alt="left-img">
                </div>
                
            </div>
        </section>
        <div class="barraf"></div>
            
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

