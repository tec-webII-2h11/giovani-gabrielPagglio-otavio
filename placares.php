<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estiloplacar.css">
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
                        <h1><font size="6px" color="#FFF">Classificação dos times</font></h1>
                        
                        <br><br>
            <div id="tabela">
            <table border="2">
            <tr>
                <th class="coluna" >Conferência Americana</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
            </tr>
            <tr>
                <td class="coluna">Denver Broncos</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>3</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
            </tr>
            <tr>
                <td class="coluna">New England Patriots</td>
                <td><center>16</center></td>
                <td><center>12</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>2</center></td>
            
            </tr>
            <tr>
                <td class="coluna">Cincinnati Bengals</td>
                <td><center>16</center></td>
                <td><center>11</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>3</center></td>
            </tr>
            <tr>
                <td class="coluna">Houston Texans</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>7</center></td>
            </tr>
            <tr>
                <td class="coluna">Kansas City Chiefs</td>
                <td><center>16</center></td>
                <td><center>11</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>5</center></td>
            </tr>
            <tr>
                <td class="coluna">Pittsburgh Steelers</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>5</center></td>
            </tr>
            <tr>
                <td class="coluna">New York Jets</td>
                <td><center>16</center></td>
                <td><center>8</center></td>
                <td><center>2</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>6</center></td>
            </tr>
            <tr>
                <td class="coluna">Buffalo Bills</td>
                <td><center>16</center></td>
                <td><center>8</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>8</center></td>
            </tr>
            <tr>
                <td class="coluna">Indianapolis Colts</td>
                <td><center>16</center></td>
                <td><center>7</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>7</center></td>
            </tr>
            <tr>
                <td class="coluna">Oakland Raiders</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
            </tr>
            <tr>
                <td class="coluna">Miami Dolphins</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>10</center></td>
            </tr>
            <tr>
                <td class="coluna">Jacksonville Jaguars</td>
                <td><center>16</center></td>
                <td><center>5</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>10</center></td>
            </tr>
            <tr>
                <td class="coluna">Baltimore Ravens</td>
                <td><center>16</center></td>
                <td><center>4</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>11</center></td>
            </tr>
            <tr>
                <td class="coluna">San Diego Chargers</td>
                <td><center>16</center></td>
                <td><center>4</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>11</center></td>
            </tr>
            <tr>
                <td class="coluna">Cleveland Browns</td>
                <td><center>16</center></td>
                <td><center>2</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>12</center></td>
            </tr>
            <tr>
                <td class="coluna">Tennessee Titans</td>
                <td><center>16</center></td>
                <td><center>2</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>13</center></td>
            </tr>
        </table>
                <table border="2">
            <tr>
                <th class="coluna">Conferência Nacional</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
            </tr>
            <tr>
                <td class="coluna">Carolina Panthers</td>
                <td><center>16</center></td>
                <td><center>14</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
            </tr>
            <tr>
                <td class="coluna">Arizona Cardinals</td>
                <td><center>16</center></td>
                <td><center>13</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>3</center></td>
            
            </tr>
            <tr>
                <td class="coluna">Minnesota Vikings</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>5</center></td>
            </tr>
            <tr>
                <td class="coluna">Washington Redskins</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>6</center></td>
            </tr>
            <tr>
                <td class="coluna">Green Bay Packers</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>6</center></td>
            </tr>
            <tr>
                <td class="coluna">Seattle Seahawks</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>4</center></td>
            </tr>
            <tr>
                <td class="coluna">Atlanta Falcons</td>
                <td><center>16</center></td>
                <td><center>7</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>7</center></td>
            </tr>
            <tr>
                <td class="coluna">St.Louis Rams</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>7</center></td>
            </tr>
            <tr>
                <td class="coluna">Detroit Lions</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
            </tr>
            <tr>
                <td class="coluna">Philadelphia Eagles</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
            </tr>
            <tr>
                <td class="coluna">New Orleans Saints</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>8</center></td>
            </tr>
            <tr>
                <td class="coluna">Tampa Bay Buccaneers</td>
                <td><center>16</center></td>
                <td><center>5</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>10</center></td>
            </tr>
            <tr>
                <td class="coluna">New York Giants</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>9</center></td>
            </tr>
            <tr>
                <td class="coluna">Chicago Bears</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>9</center></td>
            </tr>
            <tr>
                <td class="coluna">San Francisco 49ers</td>
                <td><center>16</center></td>
                <td><center>3</center></td>
                <td><center>2</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>11</center></td>
            </tr>
            <tr>
                <td class="coluna">Dallas Cowboys</td>
                <td><center>16</center></td>
                <td><center>2</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>13</center></td>
            </tr>
        </table>
        <table border="2">
         <tr>
                <th class="coluna">AFC Leste</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">New England Patriots</td>
                <td><center>16</center></td>
                <td><center>12</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>2</center></td>
          </tr>
          <tr>  
                <td class="coluna">New York Jets</td>
                <td><center>16</center></td>
                <td><center>8</center></td>
                <td><center>2</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>8</center></td>
          </tr>
          <tr>  
                <td class="coluna">Buffalo Bills</td>
                <td><center>16</center></td>
                <td><center>8</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>8</center></td>
        </tr>
          <tr>  
                <td class="coluna">Dallas Cowboys</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>10</center></td>
         </tr>
        </table>
                  <table border="2">
         <tr>
                <th class="coluna">AFC Norte</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Cincinnati Bengals</td>
                <td><center>16</center></td>
                <td><center>11</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>3</center></td>
          </tr>
          <tr>  
                <td class="coluna">Pittsburgh Steelers</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>5</center></td>
          </tr>
          <tr>  
                <td class="coluna">Baltimore Ravens</td>
                <td><center>16</center></td>
                <td><center>4</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>10</center></td>
        </tr>
          <tr>  
                <td class="coluna">Cleveland Browns</td>
                <td><center>16</center></td>
                <td><center>2</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>12</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">AFC Sul</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Houston Texans</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>7</center></td>
          </tr>
          <tr>  
                <td class="coluna">Indianapolis Colts</td>
                <td><center>16</center></td>
                <td><center>7</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>7</center></td>
          </tr>
          <tr>  
                <td class="coluna">Jacksonville Jaguars</td>
                <td><center>16</center></td>
                <td><center>5</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>10</center></td>
        </tr>
          <tr>  
                <td class="coluna">Tennessee Titans</td>
                <td><center>16</center></td>
                <td><center>2</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>13</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">AFC Oeste</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Denver Broncos</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>3</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>4</center></td>
          </tr>
          <tr>  
                <td class="coluna">Kansas City Chiefs</td>
                <td><center>16</center></td>
                <td><center>11</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>5</center></td>
          </tr>
          <tr>  
                <td class="coluna">Oakland Raiders</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
        </tr>
          <tr>  
                <td class="coluna">San Diego Chargers</td>
                <td><center>16</center></td>
                <td><center>4</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>11</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">NFC Leste</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Washington Redskins	</td>
                <td><center>16</center></td>
                <td><center>9</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>6</center></td>
          </tr>
          <tr>  
                <td class="coluna">Philadelphia Eagles</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
          </tr>
          <tr>  
                <td class="coluna">New York Giants</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>9</center></td>
        </tr>
          <tr>  
                <td class="coluna">Dallas Cowboys</td>
                <td><center>16</center></td>
                <td><center>4</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>10</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">NFC Norte</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Minnesota Vikings</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>5</center></td>
          </tr>
          <tr>  
                <td class="coluna">Green Bay Packers</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>6</center></td>
          </tr>
          <tr>  
                <td class="coluna">Detroit Lions</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>9</center></td>
        </tr>
          <tr>  
                <td class="coluna">Chicago Bears</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>8</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">NFC Sul</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Carolina Panthers</td>
                <td><center>16</center></td>
                <td><center>14</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
          </tr>
          <tr>  
                <td class="coluna">Atlanta Falcons</td>
                <td><center>16</center></td>
                <td><center>7</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>7</center></td>
          </tr>
          <tr>  
                <td class="coluna">New Orleans Saints</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>1</center></td>
                <td><center>8</center></td>
        </tr>
          <tr>  
                <td class="coluna">Tampa Bay Buccaneers</td>
                <td><center>16</center></td>
                <td><center>5</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>10</center></td>
         </tr>
        </table>
         <table border="2">
         <tr>
                <th class="coluna">NFC Oeste</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Vitórias em prolongamento</th>
                <th>Empates</th>
                <th>Derrotas em prolongamento</th>
                <th>Derrotas</th>
         </tr>
        <tr>  
                <td class="coluna">Arizona Cardinals</td>
                <td><center>16</center></td>
                <td><center>13</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>3</center></td>
          </tr>
          <tr>  
                <td class="coluna">Seattle Seahawks</td>
                <td><center>16</center></td>
                <td><center>10</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>4</center></td>
          </tr>
          <tr>  
                <td class="coluna">St. Louis Rams</td>
                <td><center>16</center></td>
                <td><center>6</center></td>
                <td><center>1</center></td>
                <td><center>0</center></td>
                <td><center>2</center></td>
                <td><center>7</center></td>
        </tr>
          <tr>  
                <td class="coluna">San Francisco 49ers</td>
                <td><center>16</center></td>
                <td><center>3</center></td>
                <td><center>2</center></td>
                <td><center>0</center></td>
                <td><center>0</center></td>
                <td><center>11</center></td>
         </tr>
        </table>
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