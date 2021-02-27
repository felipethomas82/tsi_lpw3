<?php
    class User {
        private $username;
        private $password;
        private $name;
        private $con;

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setPassword($pass) {
            $this->password = $pass;
        }

        public function setCon( $con ) {
            $this->con = $con;
        }
        
        public function doLogin() {
            $rs = $this->con->prepare( "SELECT * FROM user WHERE username = ?" );
            $rs->bindParam(1, $this->username);
            if ($rs->execute()) {
                if ($rs->rowCount() > 0) {
                    // while($row = $rs->fetch(PDO::FETCH_OBJ)){
                    $row = $rs->fetch(PDO::FETCH_OBJ);
                    if ($row->password == $this->password) {
                        $this->name = $row->name;
                        echo "Blzzz. Tudo certo. Login realizado com sucesso<br>Seja bem vindo " . $this->name;
                    } else {
                        echo "Login falhou. Senha inválida";
                    }
                    // echo $row->username . "<br />";
                    // echo $row->name . "<br />";
                    // echo $row->password . "<br />";
                    
                } else {
                    echo "User not found";
                }
            }
        }
    }
?>