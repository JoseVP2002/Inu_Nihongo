<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

<center>
  <h1>
    <font color="green"><b>Introducción al Kanji</b></font>
  </h1>
</center>
<div class="col-sm-15-text-left">
  <p class="justificado">El kanji se usa para escribir palabras de origen chino, cada carácter de estos tiene un
    significado y también
    diferentes lecturas posibles. Esto puede sonar difícil a primeras pero imaginemos que nosotros vemos el número <font color="red">2</font>,
    al verlo sabemos
    que se lee <font color="red">dos</font> pero no hay nada implícito ahí que nos diga que se lee de esa manera, lo mismo pasa cuando
    escribimos <font color="red">22</font>, al leerlo
    será “veintidós”, como podemos ver al estar unidos los dos numero ya no se leen como <font color="red">dos dos</font>, sino que adoptaron
    una nueva lectura,
    con lo kanji pasa de manera similar, un kanji puede leerse de una forma estando solo pero en conjunto de otros
    kanjis puede tener otra lectura.
  </p>
  <p class="justificado">Por ejemplo:<br>
    <ruby><font color="red">火</font><rt>Hi</rt></ruby><font color="blue"> Fuego</font><br>
    <ruby><font color="red">山</font><rt>Yama</rt></ruby><font color="blue"> Montaña</font><br>
    Pero si los juntamos la pronunciación cambia y se vuelve una palabra compuesta.<br>
    <ruby><font color="red">火山</font><rt>Kazan</rt></ruby><font color="blue"> volcán</font>
    </p>
  <ul class="pager">
    <li class="previous"><a href="../katakana/introduccionkatakana.php">Anterior(katakana)</a></li>
    <li class="next"><a href="../N5/presentacionN5.php">Siguiente(N5)</a></li>
  </ul>
</div>
</div>
<?php
include "sidenav.php";
?>
</body>

</html>