<?php

    class Usuario {
        private $telefone;
        private $data_cadastro;
        private $nome;

        private $permissao;

        public function __construct () {
            $this->permissao = new Permissao ();
        }

        public function preencherDados ($nome, $telefone, $nivel) {
            $this->nome = $nome;
            $this->telefone = $telefone;

            $this->permissao->setNivel($nivel);
        }

        public function cadastrar () {
            $camposVazios = array();

            if (empty($this->nome))
                array_push($camposVazios, "nome");

            if (empty($this->telefone))
                array_push($camposVazios, "telefone");

            if (is_null ($this->permissao->getNivel()))
                array_push($camposVazios, "nivel");

            if (count($camposVazios)==0) {
                $this->data_cadastro = date("H:i:s d-m-Y");

                echo "Nome: ". $this->nome . "<br>" . "Telefone: ". $this->telefone . "<br>"
                 . "Nível: " . $this->permissao->getNivel() . "<br>" 
                 . "Data de cadastro: " . $this->data_cadastro;
                return "200";
            } else
                return $camposVazios;
        }

        public function getTelefone () {
            return $this->telefone;
        }

        public function getDataCadastro () {
            return $this->data_cadastro;
        }

        public function getNome () {
            return $this->nome;
        }
    }


?>