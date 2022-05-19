<?php

require_once "./app/conexao/conexao.php";

class cadCliente
{

    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function insereCliente(Cliente $cliente)
    {

        try {

            $query = "insert into cliente (nome, email, senha) 
					values ('{$cliente->getNome()}', {$cliente->getEmail()}, 
						'{$cliente->getSenha()}',)";

            return mysqli_query($this->conexao, $query);
        } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
    }
}
