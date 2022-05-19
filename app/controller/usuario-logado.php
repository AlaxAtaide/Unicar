<?php

session_start();

function usuarioLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;
}
 
function logout() {
	session_destroy();
}