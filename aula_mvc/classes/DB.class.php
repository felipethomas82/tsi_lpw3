<?php
    class DB {
        public static function newConnection() {
            return new PDO("mysql:host=localhost;dbname=lpw3", "root", "1234");
        }
    }
?>