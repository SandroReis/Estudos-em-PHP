<html>

<body>

<?php
if(isset($_POST['enviar-formulario'])):
	$formatosPermitidos = array("png","jpeg", "jpg", "gif");
	$quantidadedeArquivos = count($_FILES['arquivo']['name']);
	$contador = 0;

	while ($contador < $quantidadedeArquivos):

		$extensao = pathinfo($_FILES['arquivo']['name'][$contador],PATHINFO_EXTENSION);

		 if(in_array($extensao, $formatosPermitidos)):
		 	//echo "existe";
		 	$pasta = "arquivos/";
		 	$temporario = $_FILES['arquivo']['tmp_name'][$contador];
		 	$novoNome = uniqid().".$extensao";

		 	if(move_uploaded_file($temporario, $pasta.$novoNome)):
		 		echo "upload feito com sucesso para $pasta$novoNome<br>";
		 	else:
		 		echo "erro ao enviar $temporario<br>";
		 	endif;

		 else:
			echo "Formato invalido<br>";
		 endif;

$contador++;
endwhile;
endif;
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">
 </form>

</body>
</html>