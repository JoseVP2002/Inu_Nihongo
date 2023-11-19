<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

      <center><h1><font color="green"><b>Dias de la semana</b></font></h1></center>
      <div class="col-sm-15-text-left">
        <p class="justificado">1 - <ruby>月曜日<rt>げつようび</rt></ruby> - Lunes</p>
        <p class="justificado">2 - <ruby>火曜日<rt>かようび</rt></ruby> - Martes</p>
        <p class="justificado">3 - <ruby>水曜日<rt>すいようび</rt></ruby> - Miercoles</p>
        <p class="justificado">4 - <ruby>木曜日<rt>もくようび</rt></ruby> - Jueves</p>
        <p class="justificado">5 - <ruby>金曜日<rt>きにょうび</rt></ruby> - Viernes</p>
        <p class="justificado">6 - <ruby>土曜日<rt>どようび</rt></ruby> - Sabado</p>
        <p class="justificado">7 - <ruby>日曜日<rt>にちようび</rt></ruby> - Domingo</p>
        <p class="justificado"><font color="red">Nota:</font> En este caso el domingo cuenta con dos kanji iguales, sin embargo la lectura en ambos es diferente, los kanjis pueden tener mas de una lectura incluso estando en la misma palabra.</p>
        <center>
          <a class="btn btn-danger" href="diasymeses.php" role="button">Volver a los kanji base</a>
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
