<?php
    class Produto {
        private $nome;
        private $valor;
        
        public function setNome( $nome ) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setValor( $valor ) {
            $this->valor = $valor;
        }

        public function getValor() {
            return $this->valor;
        }

    }
?>