<?php
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