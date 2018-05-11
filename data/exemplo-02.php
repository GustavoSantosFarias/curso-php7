<?php

//Converte string em timestamp
$ts = strtotime("2001/09/11");
echo date("d/m/Y", $ts);

//Dia seguinte
$ts = strtotime("+1");
echo "<br>".date("d/m/Y", $ts);