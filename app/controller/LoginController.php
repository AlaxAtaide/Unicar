<?php 

require_once "usuario-logado.php";
require_once "../dao/clienteDAO.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$cliente = new Cliente();
$cliente->setEmail($email);
$cliente->setSenha($senha);  

$clienteDAO = new ClienteDAO();
$clienteDAO->procuraCliente($cliente);

var_dump($clienteDAO);

if(!$cliente) {
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: ../../cadastro.html");
} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location: ../../reserva.php");
}
die();
