<?php

require_once "./app/conexao/conexao.php";

class listaProdutos
{

    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaProdutos(Produto $produto)
    {
        try {

            $query = "insert into produtos (descricao, valor, quantidade, ) 
					values ('{$produto->getDescricao()}', {$produto->getValor()}, 
						'{$produto->getQuantidade()}',)";

            return mysqli_query($this->conexao, $query);
        } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
    }
}