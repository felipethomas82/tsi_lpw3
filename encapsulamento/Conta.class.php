<?php

    class Conta {
        private $nro;
        protected $saldo;

        public function __construct($nro)
        {
            $this->nro = $nro;
            $this->saldo = 0;
        }

        public function imprimeNroConta() {
            echo "Nro conta: {$this->nro}<br>";
        }

        public function depositar( $valor ) {
            $this->saldo += $valor;
        }

        public function imprimeSaldo() {
            echo "Saldo: R$ {$this->saldo}<br><br>";
        }

        public function __destruct()
        {
            // echo "<br><br>Bye, bye, bye";
        }
    }
?>