<?php

    Class Carrinho {

        private $produtos;

        public function exibirProdutos() {
            foreach ($this->produtos as $produto) {
                echo $produto->getNome() . "<br>";
                echo $produto->getValor();
                echo "<br><br>";
            }
        }

        public function addProduto($prod) {
            $this->produtos[] = $prod;
        }
    }

?>