<?php
    class CategoryModel{

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_herramientasferreteria;charset=utf8', 'root', '');
        }

        function getAllCategories(){
            $query = $this->db->prepare('SELECT * FROM categoria');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function addCategory($name_c, $type, $manager) {
        $query = $this->db->prepare("INSERT INTO categoria (nombre_c, tipo, responsable) VALUES (?, ?, ?)");
        $query->execute([$name_c, $type, $manager]);
        }

        function deleteCategory($id){
            $query = $this->db->prepare('DELETE FROM categoria WHERE id = ?');
            $query->execute([$id]);
        }

        function updateCategory($id, $name_c, $type, $manager){
            $query = $this->db->prepare('UPDATE categoria SET nombre_c = ? , tipo = ?, responsable = ? WHERE id = ?');
            $query->execute([$name_c, $type, $manager, $id]);
        }

        function getCategoryById ($id){
            $query = $this->db->prepare('SELECT * FROM categoria WHERE id = ?');
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }