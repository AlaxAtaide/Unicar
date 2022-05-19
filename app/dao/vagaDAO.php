<?php

require_once "../conexao/conexao.php";
require_once "../model/vaga.php";

class vagaDAO extends Conexao
{

    function insereVaga(Vaga $vaga)
    {
        try {
            $datav = $vaga->getData();
            $localv = $vaga->getLocal();

            $conn = $this->connect();

            $sql = "INSERT INTO vaga VALUES (default, :datav, :localv)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':datav', $datav);
            $stmt->bindParam(':localv', $localv);

            if ($stmt->execute()) :
                $_SESSION['sucesso'] = 'Cadastrada com sucesso!';
                $destino = header("Location: ../../index.html");
            else :
                $_SESSION['error'] = 'Vaga ja cadastrada';
                $destino = header("Location:../../reserva.php");
            endif;
        } catch (Exception $e) {
            print "Ocorreu um erro ao cadastradar" . $e;
        }
    }
}
