<?php
include_once("UserModel.php");
include_once("../conex.php");
//regra de inserção de dados
if (isset($_GET["submit"])) {
    if ($_GET["submit"] == "gravar") {  
        $user = new UserModel( $_GET["username"], $_GET["password"], $_GET["fullname"]);
        $user->setCon($con);
        $user->gravar();
    }
}

unset($user);
header('Location: ../index.php');
?>