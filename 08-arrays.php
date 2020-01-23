<?php
//arrays
$carros = array("BMW","Veloster","Hilux");
print_r($carros);
echo $carros [2];
$carros[] = "Amarok";
echo "<hr>"; 
print_r($carros);
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";

$clientes = ["Sandro", "Dani"];
print_r($clientes);
echo count($carros);

//foreach
echo "<hr>";
foreach($carros as $valor){
    echo $valor."<br>";
}

//array associativo
echo "<hr>";
$pessoa = array("nome"=>"Sandro", "idade"=>23, "altura"=>1.75);
print_r($pessoa);
$pessoa["cidade"] = "Itajuba";

foreach($pessoa as $indice => $valor ){
    echo $indice. ":" .$valor."<br>";
}

// Arary multidimensionais
echo "<hr>";
$times = array(
    "cariocas"=> array ("campeao"=>"vasco", "vice"=>"flamengo","terceiro"=>"botafogo"),
    "paulistas"=> array ("campeao"=>"santos","vice"=> "sao paulo"));
    echo $times["paulistas"]["campeao"];
    echo "<hr>";
    foreach($times["cariocas"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
    } 

    echo "<hr>";
    foreach($times["paulistas"] as $indice => $valor){
        echo $indice." : ".$valor."<br>";
    }

