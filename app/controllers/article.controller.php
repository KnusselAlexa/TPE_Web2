<?php

    class ArticleController extends MainController{

        function showArticle($articleId){
            $article = $this->articleModel->getArticleById($articleId);
            if($article){
                $this->articleView->showArticle($article, $this->categories, $this->email);
            }else{
                $this->homeView->showError("Articulo no encontrado.", $this->categories, $this->email);
            }
        }

        function showArticles(){
            $articles = $this->articleModel->getAllArticlesAndCategories();
            $this->articleView->showArticles($articles, $this->categories, $this->email);
        }

        function showArticlesByCategory($categoryId){
            $category = $this->categoryModel->getCategoryById($categoryId);
            if($category){
                $articles = $this->articleModel->getArticlesByCategory($categoryId);
                $this->articleView->showArticles($articles, $this->categories, $this->email);
            }else{
                $this->homeView->showError("Categoria no encontrada.", $this->categories, $this->email);
            }
        }

        function addArticle() {
            $this->checkLoggedIn();
            $name = $_POST['name'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];

            $this->articleModel->addArticle($name, $amount, $description, $stock, $category);

            header("Location: " . BASE_URL); 
        }
        function deleteArticle($id) {
            $this->checkLoggedIn();
            $this->articleModel->deleteArticle($id);
            header("Location: " . BASE_URL . "articles");
        }

        function updateArticle($id){
            $this->checkLoggedIn();
            $article = $this->articleModel->getArticleById($id);
            $this->articleView->showUpdateArticleForm($article, $this->categories, $this->email);
        }

        function articleUpdated($id){
            $this->checkLoggedIn();
            $name = $_POST['name'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $category = $_POST['category'];
            $this->articleModel->updateArticle($id, $name, $amount, $description, $stock, $category );
            header("Location: " . BASE_URL . "articles");
        }

    }
