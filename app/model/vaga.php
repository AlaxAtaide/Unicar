<?php

    class Vaga{
        public $data;
        public $local;

        public function getData(){
            return $this->data;
        }
        public function setData($data){
            return $this->data = $data;
        }

        public function getLocal(){
            return $this->local;
        }
        public function setLocal($local){
            return $this->local = $local;
        }

    }