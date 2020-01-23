<?php
$nome = 5;
var_dump($nome);

if (is_string($nome)):
    echo "É uma String";
else:
    echo "Não é uma String";
endif;


class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Sandro");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";
?>