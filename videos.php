<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="videos.css">
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
                        <h1><font color="#FFF">Vídeos</font></h1>
                    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5rheMnepUN0" frameborder="0" allowfullscreen></iframe>
                   <div id="videos">
                    <br>
                   <p class="texto" align="justify">
                       <center>
                       No vídeo acima tem algumas das melhores jogadas dos ultimos 25 anos,uma coletanea feita com muita cautela.
                       </center>
                   </p>
                   <!-- area de comentários -->
                   <fieldset>
                       <legend>Comentários</legend>
                       Tem alguma dica de quais jogadas deveriam ser colocadas aqui ? Contate-nos
                       <br><br>
                    <form>
                        Nome: <input type="text" name="usrname" placeholder="Digite o seu nome aqui">
                        &nbsp;
                        E-mail: <input type="text" name="usrname" placeholder="Digite o seu e-mail aqui">
                    </form>
                    <textarea rows="6" cols="80" name="comment" form="usrform">
                    </textarea>
                    <br><input type="submit">
                   </fieldset>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/H3V9gpZK3T0" frameborder="0" allowfullscreen></iframe>
                    <p class="texto" align="justify">Tratando-se de dribles no futebol americano, tempo é vital. Ao ter a posse de bola, o objetivo de toda a defesa é evitar que você suba o campo deles, então não alimente esperanças de que um defensor esperará você terminar sua finta prolongada. Dribles ágeis e eficientes são sempre melhores que outros mais lentos e pausados, então mantenha os movimentos curtos e econômicos e certifique-se de correr o máximo que puder assim que passar ao redor do defensor, para não dar oportunidades desnecessários a ele de te arremessar no chão. E como vimos, esses jogadores souberam utilizar o tempo à seu favor.</p>
                   <fieldset>
                       <legend>Comentários</legend>
                       Tem alguma dica de quais jogadas deveriam ser colocadas aqui ? Contate-nos
                       <br><br>
                    <form>
                        Nome: <input type="text" name="usrname" placeholder="Digite o seu nome aqui">
                        &nbsp;
                        E-mail: <input type="text" name="usrname" placeholder="Digite o seu e-mail aqui">
                    </form>
                    <textarea rows="6" cols="80" name="comment" form="usrform">
                    </textarea>
                    <br><input type="submit">
                   </fieldset>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/KI5zJunlNt0" frameborder="0" allowfullscreen></iframe>
                    <p class="texto" align="justify">E para descontrair um pouco, estas são algumas das melhores comemorações da nfl, claro que é um jogo sério de muito contato e com muita tensão, mas não custa nada descontrair um pouquinho ! </p>
                   <fieldset>
                       <legend>Comentários</legend>
                       Tem alguma dica de quais jogadas deveriam ser colocadas aqui ? Contate-nos
                       <br><br>
                    <form>
                        Nome: <input type="text" name="usrname" placeholder="Digite o seu nome aqui">
                        &nbsp;
                        E-mail: <input type="text" name="usrname" placeholder="Digite o seu e-mail aqui">
                    </form>
                    <textarea rows="6" cols="80" name="comment" form="usrform">
                    </textarea>
                    <br><input type="submit">
                   </fieldset>
                    <br><br>
                   </div>
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