<html>
<body>


<?php

if(isset($_POST['enviar-formulario'])):
    $erros = array();
    
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
     $erros[] = "Idade precisa ser um inteiro";
    endif;
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
     $erros[] = "Email invalido";
    endif;

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
     $erros[] = "Peso precisa ser um float";
    endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
     $erros[] = "IP invalido";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
     $erros[] = "URL invalida";
    endif;

    if (!empty($erros)):
    	foreach ($erros as $erro):
    		echo "<li> $erro </li>";
    	endforeach;
    else:
    	echo "Parabens, seus dados estão corretos!";
    endif;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Idade: <input type="text" name="idade"><br>
Email: <input type="text" name="email"><br>
Peso: <input type="text" name="peso"><br>
IP: <input  type="text" name="ip"><br>
URL: <input type="text" name="url"><br>

<button type="submit" name="enviar-formulario"> Enviar </button><br>


</form>

</body>
</html>