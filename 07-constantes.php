<?php
//constantes
define("NOME","Sandro Reis");
define ("IDADE", 24);
define("CASADO", true);
define ("ALURA", 1.69);
echo 'Meu nome é '.NOME.'minha idade é '.IDADE.' e minha altura é '.ALURA.'';

define("TIMES", ['vasco', 'flamengo', 'santos']);
echo "<hr>";
echo TIMES[2];

function exibeNome(){
    echo NOME;
}
exibeNome();