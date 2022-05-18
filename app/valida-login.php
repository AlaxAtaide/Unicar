<?php
require_once("conexao.php");

function buscaCliente($conexao, $email, $senha) {

	$senha = ($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from cliente where email='{$email}' and senha='{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$cliente = mysqli_fetch_assoc($resultado);

	return $cliente;
}