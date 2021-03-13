<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("Carrinho.php");
        include_once("Produto.php");

        $prod1 = new Produto();
        $prod1->setNome("Perfume");
        $prod1->setValor(100);

        $prod2 = new Produto();
        $prod2->setNome("Play5");
        $prod2->setValor(5000);

        $carrinho = new Carrinho();
        $carrinho->addProduto($prod1);
        $carrinho->addProduto($prod2);

        $carrinho->exibirProdutos();
    ?>
</body>
</html>