<?php

require_once "../model/vaga.php";
require_once "../dao/vagaDAO.php";

$datav = $_POST['datav'];
$localv = $_POST['localv'];

$vaga = new Vaga();

$vaga->setData($datav);
$vaga->setLocal($localv);

$novaVaga = new vagaDAO();
$novaVaga->insereVaga($vaga);

var_dump($vaga);