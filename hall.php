<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estiloHallDaFama.css">
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
            <center>
                <header>
                    <br>
                        <h1><font size="6px" color="#FFF">Hall da fama</font></h1>
                    <br><h2>Lista dos Membros do Hall da Fama</h2>
                    <ul id="listaHall">
                    <h4><li>Joe Montana (1956 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Durante seus 15 anos de carreira na NFL, Joe Montana arremeçou mais de 40 mil jardas e fez incríveis 273 touchdowns e teve apenas 139 interceptações. Montana levou para casa também o troféu de MVP (Most Valuable Player; em portugês: Jogador Mais Valioso) por dois anos consecutivos e foi convocado para jogar o Pro Bowl oito vezes. Montana tem o recorde pós-temporada para maior número de touchdowns na carreira, 45 e jardas em passes, 5772. Em cima de tudo isso, ele levou o 49ers a quatro vitórias do Super Bowl.
                    </p>
                        <img class="fotosHF" width="250" height="150" src="montana.jpg" alt="Joe Montana">
                    <br><h4><li>Johnny Unitas (1933 - 2002)</li></h4>
                    <p class="texto" align="justify">
                        Johnny Unitas teve um reinado de 18 anos na NFL, que levaram a títulos coletivo como as três vitórias de campeonato e o SuperBowl do Baltimore Colts. Johnny arremeçous para mais de 40 mil jardas e incríveis 290 touchdowns - 13 deles sendo terrestres. Foi convocado para o Pro Bowl por dez vezes e ganhou três prêmios MVP.
                    </p>
                        <img class="fotosHF" width="180" height="130" src="JohnnyUnitasjpg.jpg" alt="Johnny Unitas">
                    <h4><li>Tom Brady (1977 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Tom Brady venceu o SuperBowl na sua primeira temporada como Quarterback do New England Patriots em cima do St. Louis Rams e ainda foi eleito o MVP do jogo. Depois de seu primeiro Super Bowl Brady ainda faturou mais três outros títulos para os Pats e foi considerado o MVP do SuperBowl nas edições (XXXVI, XXXVIII, XLIX). Além disso o jogador detém vários recordes individuais, entre os quais a maior quantidade de passes para touchdown em Super Bowls (13) e em jogos de pós-temporada (53). Brady foi ainda eleito o "esportista do ano" pelas revistas Sports Illustrated (em 2005) e The Sporting News (em 2004 e 2007).
                    </p>
                        <img class="fotosHF" width="220" height="150" src="TomBrady.jpg" alt="Tom Brady"><br><br><br>
                    <h4><li>Peyton Manning (1976 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Peyton Manning vanceu dois SuperBowls em sua cerreira, cada um com um time diferente. Seu primeiro título foi com os Colts e o último com Denver Broncos no ano passado (2015), vitória essa que levou Meinning a receber o título de MVP do jogo e decidir por se aposentar na NFL após 18 anos de carreira. Meinning ainda detém títulos pessoais como o de MVP do Pro Bowl de 2005 e recordes como o de líder do Indianapolis Colts em vitórias, passes completados, além de ser o Quarterback com maior número de touchdows (539) e jardas aéreas (71.940) da história.
                    </p>
                        <img class="fotosHF" width="250" height="180" src="Peyton%20Manning.jpg" alt="Peyton Manning">
                    <h4><li>Eli Manning (1981 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Elisha Manning - mais conhecido como Eli Manning - atua como Quarterback pelo New York Giants. É o irmão mais novo de Peyton Manning e filho do ex-jogador Archie Manning. Manning foi nomeado MVP nas duas edições em que levou os Giants a vitória do SuperBowl (XLII e XLVI). Além disto foi tembém chamado quatro vezes para o Pro Bowl e detém consigo números excepcionais: 300 touchdowns e mais de 44 mil jardas aéreas
                    </p>
                        <img class="fotosHF" width="200" height="150" src="EliManning.jpg" alt="Eli Manning">
                    <h4><li>Troy Aikman (1966 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Durante sua carreira de onze anos como profissional na NFL, Troy Aikman foi eleito seis vezes para o Pro Bowl, liderou seu time em três vitórias no Super Bowl e foi eleito o melhor jogador das finais (XXVII) em 1993. Até os dias atuais, ele detém diversos recordes do seu único time, Dallas Cowboys. Ele também já foi dono de uma equipe da NASCAR Sprint Cup, junto com Roger Staubach, também ex-QB do Cowboys, mas atualmente trabalha como comentarista esportivo para a Fox Network.
                    </p>
                        <img class="fotosHF" width="230" height="170" src="ToryAikman.jpg" alt="Troy Aikman">
                    <h4><li>Bart Starr (1934 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Bryan Bartlett Starr - apelidade de Bart Starr -  é um ex-jogador e treinador de futebol americano. Usando a camisa #15, ele atuou como quarterback pelo Green Bay Packers de 1956 a 1971 e foi Most Valuable Player (MVP) das duas primeiras edições do Super Bowls, em 1967 e 1968. Ele foi selecionado quatro vezes para o Pro Bowl e foi para o Pro Football Hall of Fame em 1977. Starr começou a jogar futebol americano ainda na escola em Montgomery, Alabama, onde ele entrou para o Hall da Fama da escola. Ele então atuou pela University of Alabama, e foi então selecionado na 17ª rodada do Draft de 1956. Quando encerrou sua carreira como jogador, Starr se tornou treinador dos Packers por nove temporadas (1975–1983), com uma campanha de 52–76–3.
                        Como quarterback do treinador Vince Lombardi, os Packers de Starr venceram o NFL Championship de 1961, 1962, 1965, 1966 e 1967. Ele é o único quarterback a liderar seu time a cinco NFL championships.
                    </p>
                        <img class="fotosHF" width="210" height="290" src="Bart%20Starr.jpg" alt="Bart Starr">
                    <h4><li>Brett Favre (1969 - ainda vivo)</li></h4>
                    <p class="texto" align="justify">
                        Brett Lorenzo Favre é um ex-jogador que jogou por 20 anos na NFL como profissional, tendo jogado como quarterback pelo Atlanta Falcons (1991), Green Bay Packers (1992–2007), New York Jets (2008) e pelo Minnesota Vikings (2009–2010). Favre é o único QB na história da NFL que lançou para mais de 70 mil jardas na carreira, o único com 300 interceptações e também o único com 10 mil passes tentados. Ele se aposentou oficialmente em 17 de janeiro de 2011. Lorenzo venceu o prêmio de MVP da NFL três vezes seguidas (1995–97). Ele também conquistou oito títulos de divisão na carreira (1995, 1996, 1997, 2002, 2003, 2004, 2007, 2009), cinco finais de conferência da NFC (1995, 1996, 1997, 2007, 2009) e disputou dois Super Bowl (XXXI, XXXII), vencendo apenas a edição XXXI.
                    </p>
                        <img class="fotosHF" width="220" height="270" src="BrettFavre.jpg" alt="Brett Favre">
                    </ul>
                        <br><br>
                </header>
                <br>
            </center>
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