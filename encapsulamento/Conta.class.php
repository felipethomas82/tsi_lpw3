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

    //lembrando, vocês devem implementar as classes em arquivos separados
    //aqui a classe ContaCorrente foi inserida no mesmo arquivo apenas para fins didáticos

    class ContaCorrente extends Conta {
        private $chequeEspecial = 1000;

        function imprimeSaldo()
        {
            $saldoAtual = $this->saldo + $this->chequeEspecial;
            echo "Saldo: R$ {$saldoAtual}<br><br>";
        }
    }

?>