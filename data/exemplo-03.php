<?php 

//Setando a linguagem das datas nos servidores com padrão Linux, UTF-8 e Windows respectivamente
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

echo strftime("%A %e de %B de %G");