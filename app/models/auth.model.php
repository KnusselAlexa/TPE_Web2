<?php

    class AuthModel{

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_herramientasferreteria;charset=utf8', 'root', '');
        }

        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM administrador WHERE email = ?');
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }