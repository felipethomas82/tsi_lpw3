<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("Autoload.class.php");

        $conta = new Conta( "000234586654" );
        
        //$conta->nro = "000234586654"; //erro fatal
        $conta->imprimeNroConta();
        $conta->depositar(1000000);
        $conta->imprimeSaldo();

        echo "<br><br>CONTA CORRENTE<br>";
        $cc = new ContaCorrente("127368476");
        $cc->imprimeNroConta();
        $cc->depositar(500);
        $cc->imprimeSaldo();
        
    ?>
</body>
</html>