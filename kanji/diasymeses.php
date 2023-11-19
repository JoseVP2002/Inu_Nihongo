<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

      <center><h1><font color="green"><b>Dias y meses</b></font></h1></center>
      <div class="col-sm-15-text-left">
        <p class="justificado">1 - <ruby>月<rt>つき</rt></ruby> - Luna</p>
        <p class="justificado">2 - <ruby>火<rt>ひ</rt></ruby> - Fuego</p>
        <p class="justificado">3 - <ruby>水<rt>みず</rt></ruby> - Agua</p>
        <p class="justificado">4 - <ruby>木<rt>き</rt></ruby> - Arbol</p>
        <p class="justificado">5 - <ruby>金<rt>きん</rt></ruby> - Oro</p>
        <p class="justificado">6 - <ruby>土<rt>つち</rt></ruby> - Tierra</p>
        <p class="justificado">7 - <ruby>日<rt>ひ</rt></ruby> - Sol</p>
        <p class="justificado">8 - <ruby>曜<rt>よう</rt></ruby> - Dia de la semana</p>
        <p class="justificado">Con estos Kanjis puedes formar las palabras para los días de la semana, los meses y los días del mes.</p>
        <center>
          <a class="btn btn-danger" href="semana.php" role="button">Aprende los dias de la semana</a>
          <a class="btn btn-danger" href="mes.php" role="button">Aprende los meses</a>
          <a class="btn btn-danger" href="diasmes.php" role="button">Aprende a contar los dias de los meses</a>
        </center>
          <ul class="pager">
                <li class="previous"><a href="numeros.php">Anterior</a></li>
                <li class="next"><a href="diasymeses.php">Siguiente</a></li>
            </ul>  
        </div>        
    </div>
    <?php
    include "sidenav.php";
    ?>
</body>
</html>
