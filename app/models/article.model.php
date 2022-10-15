<?php

    class ArticleModel{

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_herramientasferreteria;charset=utf8', 'root', '');
        }

        function getArticleById($id){
            $query = $this->db->prepare('SELECT articulos.id, articulos.nombre, articulos.descripcion,
            articulos.precio, articulos.stock, categoria.nombre_c FROM articulos JOIN categoria ON articulos.id_categoria_fk = categoria.id WHERE articulos.id = ? ');
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function getArticleByName($name){
            $query = $this->db->prepare('SELECT articulos.id, articulos.nombre, articulos.descripcion,
            articulos.precio, articulos.stock, categoria.nombre_c FROM articulos JOIN categoria ON articulos.id_categoria_fk = categoria.id WHERE articulos.nombre = ? ');
            $query->execute([$name]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function getAllArticlesAndCategories(){
            $query = $this->db->prepare('SELECT articulos.id, articulos.nombre, articulos.descripcion,
            articulos.precio, articulos.stock, categoria.nombre_c FROM articulos JOIN categoria ON articulos.id_categoria_fk = categoria.id');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getArticlesByCategory($category){
            $query = $this->db->prepare('SELECT articulos.id, articulos.nombre, articulos.descripcion,
            articulos.precio, articulos.stock, categoria.nombre_c FROM articulos JOIN categoria ON articulos.id_categoria_fk = categoria.id WHERE id_categoria_fk = ? ');
            $query->execute([$category]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function addArticle($name, $amount, $description, $stock, $category) {

        $query = $this->db->prepare("INSERT INTO articulos (nombre, precio, descripcion, stock, id_categoria_fk) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$name, $amount, $description, $stock, $category]);
        }

        function deleteArticle($id){
            $query = $this->db->prepare('DELETE FROM articulos WHERE id = ?');
            $query->execute([$id]);
        }

        function updateArticle($id, $name, $amount, $description, $stock, $id_category_fk){
            $query = $this->db->prepare('UPDATE articulos SET nombre = ? , precio = ?, descripcion = ?, stock = ?, id_categoria_fk = ? WHERE id = ?');
            $query->execute([$name, $amount, $description, $stock, $id_category_fk, $id]);
        }

}
