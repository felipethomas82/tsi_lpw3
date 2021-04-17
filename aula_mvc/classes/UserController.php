<?php
include_once("Autoload.class.php");
//regra de inserção de dados
if (isset($_GET["submit"])) {
    if ($_GET["submit"] == "gravar") {  
        $user = new UserModel( $_GET["username"], $_GET["password"], $_GET["fullname"]);
        $user->gravar();
    }
    header('Location: ../index.php');
} else {
    $user = new UserModel();
    $clientes = $user->retornaClientes();
    echo json_encode($clientes);
}
?>