<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estiloSobre.css">
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="30">
        <meta name="description" content="Um site de futebol americano">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Gio, Otavio, Gabriel">
        <link rel="icon" type="image/png" href="http://files.softicons.com/download/toolbar-icons/fugue-16px-additional-icons-by-yusuke-kamiyamane/png/16x16/sport-football.png">
        <script>
            <!--
                var tx = new Array (
                "TOUCHDOWN !!!",
                "Welcome to the NFL :P");
                var txcount=2;
                var i=1;
                var wo=0;
                var ud=1;
                function animatetitle()
                                                {
                window.document.title=tx[wo].substr(0, i)+"_";
                if (ud==0) i--;
                if (ud==1) i++;
                if (i==-1) {ud=1;i=0;wo++;wo=wo%txcount;}
                if (i==tx[wo].length+10) {ud=0;i=tx[wo].length;}
                // if (window.document.title.length < 20 ) window.document.title=window.document.title+"-";
                // if (window.document.title.length == 20 ) window.document.title=window.document.title+"]";
                // if (window.document.title.length == 21 ) setTimeout("window.document.title='Animierte Seitentitel '; ",1000);
                parent.window.document.title=tx[wo].substr(0, i)+"_";
                setTimeout("animatetitle()",200);
                                                }
                animatetitle();
            // -->
        </script>
    </head>
    <body>
<div id="site"> 
<div id="topo">        
                <a id="top"></a>
            <center>
                <img src="topo.jpg" width="1000" height="350" alt="Logo dos times" >
            </center>
</div>
        <?php include 'nav.inc'; ?> <!-- professora por algum motivo não funciona :/ -->
            <br>
            <section class="corpo">
                <header>
                    <br>
                        <h1><font color="#FFF" size="6px">Sobre</font></h1>
                    <div id="text">
                        <p align="justify">
                            <font size="20px">O</font> Futebol americano, conhecido nos Estados Unidos simplesmente como football, e em alguns outros países de língua inglesa como gridiron, é um jogo de equipe e de contato que surgiu de uma variação do rugby e que recompensa a velocidade, agilidade, capacidade tática e força bruta dos jogadores que se empurram, bloqueiam e perseguem uns aos outros, tentando fazer avançar uma bola em território inimigo durante uma hora de tempo de jogo, que se transforma em três ou quatro de tempo real. É frequente ver no futebol americano uma metáfora para a guerra, com muita violência pessoal a ter lugar dentro do campo, com jogadores pesados e fortes a empurrar-se mutuamente com cada grama do seu peso, e com uma linha de frente claramente definida, que se move para trás e para a frente ao longo do campo, separando as equipes de ataque e defesa.
                        </p>
                    </div>
                        <img id="seattle" width="350px" height="250px" src="SeattleSeahawks.jpeg" alt="seattle">
                        <div id="text2">
                            <p align="justify">
                        <br><br><font size="6px">Regras</font><br><br>
                        O jogo em si consiste de uma série de jogadas de curta duração entre as quais a bola não está em jogo. São permitidas substituições entre as jogadas, nas quais os treinadores colocam em campo os jogadores que servem melhor para a situação específica seguinte. O jogo é muito tático e estratégico. Com 22 jogadores dentro de campo ao mesmo tempo (11 por equipe), cada um com uma tarefa atribuída para a jogada seguinte escolhida pelo técnico.<br>
                        Os jogos possuem duração de 60 minutos e são dividido em duas metades separadas por um intervalo. Cada metade consiste de dois quartos com a duração de 15 minutos. As equipes mudam de campo no fim do primeiro e do terceiro quartos. Se um jogo estiver empatado ao fim do tempo regulamentar, joga-se uma prorrogação. As prorrogações obedecem ao método em que a equipe que pontuar primeiro, seja de que forma for, sai vitoriosa. <br> 
                        Um Chute inicial (ou kickoff) é uma jogada especial usada para iniciar cada meio jogo, e também para reiniciar o jogo depois de cada Field goal ou conversão de um touchdown. O chutador da equipe chuta a bola, geralmente desde a sua linha de 35 jardas, embora um chute inicial possa ocorrer de outras zonas do campo devido a uma penalidade na jogada anterior. A bola deve ser chutada a partir do chão (e não no ar) e segura, e deve viajar pelo menos 10 jardas. A partir do momento em que a bola tenha viajado 10 jardas para o campo adversário ou tenha sido tocada pelo time que retornará o kickoff a bol já pode ser recolhida por qualquer uma das equipes. Em geral, a bola é simplesmente chutada com força para o campo adversário, mas por vezes uma equipe tenta recuperar o seu próprio pontapé, numa jogada que é conhecida como Onside Kick. Nele a equipe em vez de chutar a bola como um kickoff dá um chute mais curto e tentam pegar a bola de volta. <br>
                        Usa-se um safety punt para reiniciar o jogo depois de um safety, mas isso não acontece com frequência. A equipe que foi derrubada na sua zona final (ou endzone) e, portanto, concedeu dois pontos à outra equipe, faz o punt (chute onde a bola é chutada no ar) sua linha de 20 jardas.
                        <br><br><font size="6px">Objetivo</font><br><br>
                        O objetivo do jogo é somar mais pontos que seu adversário. A principal jogada é entrar na área ao fundo do campo adversário (endzone) com a posse da bola, jogada chamada de touchdown, na qual se ganha 6 pontos e o direito a um pontapé livre a gol por mais 1 ponto extra (extra-point), ou mesmo 2 pontos extras se os jogadores tentarem, ao invés de um pontapé livre ao gol, um passe ou uma corrida para a endzone novamente. Ou ainda em uma situação onde um jogador com posse de bola é derrubado, em sua própria "endzone", por um adversário. Tal situação confere dois pontos a equipe do jogador que o derrubou. Essa é a única situação onde um time sem a posse de bola pode pontuar.
                        <br><br><font size="6px">A NFL</font><br><br>
                        A National Football League (ou Liga Nacional de Futebol Americano) é a maior liga de futebol americano do mundo, com trinta e dois times nos Estados Unidos. Em termos de renda e número de fãs, a NFL é a maior liga de esportes na América do Norte e uma das maiores do mundo. O valor médio dos clubes avaliado em 2008 é de 1,04 bilhão de dólares, sendo o mais valioso o Dallas Cowboys, que chega a valer 1,612 bilhão de dólares. A divisão mais valiosa da NFL é a NFC Leste, formada por Cowboys, Washington Redskins, New York Giants e Philadelphia Eagles, todos valendo mais de um bilhão de dólares.<br>
                        A idéia de criação de uma liga de futebol americano profissional veio de Jim Thorpe, medalhista olímpico e treinador do Canton Bulldogs e Leo Lyons, dono do Rochester Jeffersons, times que disputavam a Ohio League, eles foram inspirados no sucesso da Major League Baseball, contudo seus planos foram adiados devido a Primeira Guerra Mundial e a gripe espanhola.<br><br>
                        <center><img width="500" height="300" src="mapaEUA.jpg" alt="mapa nfl/eua"></center>
                            </p>
                    </div>
                
                        <br><br>
                </header>
                <br>
            </section>
<div class="footer">
    <br>
            <center><img src="nfl.png" height="220" width="300" alt="Nfl"></center>
</div>
            <hr>
            <footer>
        <center>
            <?php include 'footer.inc'; ?> <!-- por algum motivo não funciona !-->
            <a href="#top">
                <img src="football.png" width="30" height="30" alt="Voltar ao topo">
            </a> 
</div>
        </center>        
    </footer>
</div>
    </body>
</html>