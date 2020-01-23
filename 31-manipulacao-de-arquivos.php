<?php 

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";
$arquivoAberto = fopen($arquivo, 'r');
//fwrite($arquivoAberto, $conteudo);

$tamanhoArquivo = filesize($arquivo);
while(!feof($arquivoAberto)):
	$linha = fgets($arquivoAberto,$tamanhoArquivo);
	echo $linha."<br>";
endwhile;

fclose($arquivoAberto);