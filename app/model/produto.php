<?php

    class Produto{
        public $id;
        public $descricao;
        public $valor;
        public $quantidade;

        public function _construct($id, $descricao, $valor, $quantidade){
            $this->id = $id;
            $this->descricao=$descricao;
            $this->valor = $valor;
            $this->quantidade = $quantidade;
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
           return $this->id = $id;
        } 

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            return $this->descricao = $descricao;
        }

        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
            return $this->valor = $valor;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade($quantidade){
            return $this->quantidade = $quantidade;
        }
    }