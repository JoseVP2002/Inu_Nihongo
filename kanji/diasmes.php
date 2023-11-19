<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

      <center><h1><font color="green"><b>Dias del mes</b></font></h1></center>
      <div class="col-sm-15-text-left">
        <p class="justificado">1 - <ruby>一日<rt>ついたち</rt></ruby> - Primero del mes</p>
        <p class="justificado">2 - <ruby>二日<rt>ふつか</rt></ruby> - Segundo del mes</p>
        <p class="justificado">3 - <ruby>三日<rt>みっか</rt></ruby> - Tercero del mes</p>
        <p class="justificado">4 - <ruby>四日<rt>よっか</rt></ruby> - Cuatro del mes</p>
        <p class="justificado">5 - <ruby>五日<rt>いつか</rt></ruby> - Cinco del mes</p>
        <p class="justificado">6 - <ruby>六日<rt>むいか</rt></ruby> - Seis del mes</p>
        <p class="justificado">7 - <ruby>七日<rt>なのか</rt></ruby> - Siete del mes</p>
        <p class="justificado">8 - <ruby>八日<rt>ようか</rt></ruby> - Ocho del mes</p>
        <p class="justificado">9 - <ruby>九日<rt>ここのか</rt></ruby> - Nueve del mes</p>
        <p class="justificado">10 - <ruby>十日<rt>とおか</rt></ruby> - Diez del mes</p>
        <p class="justificado">11 - <ruby>十四日<rt>じゅうよっか</rt></ruby> - Catorce del mes</p>
        <p class="justificado">12 - <ruby>十九日<rt>じゅうくにち</rt></ruby> - Diecinueve del mes</p>
        <p class="justificado">13 - <ruby>二十日<rt>はつか</rt></ruby> - Veinte del mes</p>
        <p class="justificado">14 - <ruby>二十四日<rt>にじゅうよっか</rt></ruby> - Veinticuatro del mes</p>
        <p class="justificado">15 - <ruby>二十九日<rt>にじゅうくにち</rt></ruby> - Veintinueve del mes</p>
        <p class="justificado"><font color="red">Nota:</font> Estos son los dias con lectura irregular, el resto de los dias se dicen el <font color="red">numero del dia + <ruby>日<rt>にち</rt></ruby></font>.</p>
        <center>
          <a class="btn btn-danger" href="diasymeses.php" role="button">Volver a los kanji base</a>
          <a class="btn btn-danger" href="semana.php" role="button">Aprende los dias de la semana</a>
          <a class="btn btn-danger" href="mes.php" role="button">Aprende los meses</a>
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