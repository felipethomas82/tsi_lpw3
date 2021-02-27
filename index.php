<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("conex.php");
        include_once("User.php");
        $user = new User();
        $user->setUsername( "felipe" );
        $user->setPassword( "1234" );
        $user->setCon( $con );
        $user->doLogin();
    ?>
</body>
</html>