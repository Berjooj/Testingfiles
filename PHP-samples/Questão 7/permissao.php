<?php 

    class Permissao {

        private $nivel;

        public function __constructor () {}

        public function setNivel ($novoNivel) {
            $this->nivel = $novoNivel;
        }

        public function getNivel () {
            return $this->nivel;
        }

    }

?>