<?php
    class UserModel {
        private $username;
        private $password;
        private $name;
        private $con;

        public function __construct($username = null, $password = null, $name = null)
        {
            $this->username = $username;
            $this->password = $password;
            $this->name = $name;
        }


        public function setUsername($username) {
            $this->username = $username;
        }

        public function setPassword($pass) {
            $this->password = $pass;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setCon( $con ) {
            $this->con = $con;
        }

        public function gravar() {
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $this->con->prepare('INSERT INTO user(username, password, name) VALUES(?,?,?)');
            $stmt->execute(array(
                0 => $this->username,
                1 => $this->password,
                2 => $this->name
            ));

            return true;
        }

        public function retornaClientes() {
            $rs = $this->con->prepare( "SELECT * FROM user" );
            
            $clientes = array();
            if ($rs->execute()) {
                if ($rs->rowCount() > 0) {
                    while($row = $rs->fetch(PDO::FETCH_OBJ)){
                        array_push($clientes, $row);
                    }
                    return $clientes;
                }
            } 
            return null;
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

        public function __destruct()
        {
            echo "FIMMMMMMMMMMMM";
        }
    }
?>