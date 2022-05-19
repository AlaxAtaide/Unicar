<?php

require_once "../conexao/conexao.php";
require_once "../model/cliente.php";

class ClienteDAO extends Conexao
{

    function insereCliente(Cliente $cliente)
    {
        try {
            $nom = $cliente->getNome();
            $em = $cliente->getEmail();
            $senha = $cliente->getSenha();

            $conn = $this->connect();

            $sql = "INSERT INTO cliente VALUES (default, :nom, :em, :senha)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':em', $em);
            $stmt->bindParam(':senha', $senha);

            if ($stmt->execute()) :
                $_SESSION['sucesso'] = 'Cadastrado com sucesso!';
                $destino = header("Location: ../../index.html");
            else :
                $_SESSION['error'] = 'Usuario ja cadastrado';
                $destino = header("Location:../../cadastro.php");
            endif;
        } catch (Exception $e) {
            print "Ocorreu um erro ao cadastradar" . $e;
        }
    }

    function procuraCliente(Cliente $cliente)
        {
            try {

                $conn = $this->connect();

                $sql = "SELECT * FROM cliente where email = :email and senha = :senha";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchALL();
            } catch (Exception $e) {
                print "Ocorreu um erro ao tentar buscar o cliente" . $e;
            }
        }
}
