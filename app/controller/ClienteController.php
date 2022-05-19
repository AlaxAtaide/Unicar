<?php

require_once "../model/cliente.php";
require_once "../dao/clienteDAO.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cliente = new Cliente();

$cliente->setNome($nome);
$cliente->setEmail($email);
$cliente->setSenha($senha);  

$novoCliente = new ClienteDAO();
$novoCliente->insereCliente($cliente);

var_dump($cliente);