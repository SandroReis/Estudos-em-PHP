<?php
require_once 'db_connect.php';

session_start();
//verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect,$sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>


</html>
<head>
	<title> Página restrita</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Olá <?php echo $dados['nome'] ?></h1>
<a href="logout.php"> Sair</a>
</body>
</html>