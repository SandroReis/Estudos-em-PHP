<?php
$senha = "123456";



//$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

//

$senha_db = '$2y$10$Xd2qGT.9n0.65dURIBghauCYdVdlH/TWovgjnYnYC3ylE2hFhiMo6';

if(password_verify($senha, $senha_db)):
	echo "Senha valida";
else:
	echo "senha invalida";
endif;
