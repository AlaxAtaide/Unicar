<?php 

require_once '../app/valida-login.php';
require_once '../app/login.php';

$cliente = buscaCliente($conexao, $_POST["email"], $_POST["senha"]);

if($cliente == null) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location: reserva.html");
}
die();
