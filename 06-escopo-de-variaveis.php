<?php
//escopo global
$nome = "Sandro Reis";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";


function exibeCidade() {
    //escopo local
    global $cidade;
    $cidade = "Itajubá";
}

exibeCidade();
echo $cidade;
echo "<hr>";

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b']+ $GLOBALS['c'];
    }

soma();