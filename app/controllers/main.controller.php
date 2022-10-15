<?php

    require_once './app/models/article.model.php';
    require_once './app/models/category.model.php';
    require_once './app/models/auth.model.php';
    require_once './app/views/article.view.php';
    require_once './app/views/category.view.php';
    require_once './app/views/home.view.php';

    class MainController{

        protected $articleModel;
        protected $authModel;
        protected $categoryModel;
        protected $articleView;
        protected $categoryView;
        protected $homeView;
        protected $categories;
        protected $email;

        function __construct(){
            $this->articleModel = new ArticleModel();
            $this->authModel = new AuthModel();
            $this->categoryModel = new CategoryModel();
            $this->articleView = new ArticleView();
            $this->categoryView = new CategoryView();
            $this->homeView = new HomeView();
            $this->categories = $this->categoryModel->getAllCategories();
            session_start();
            $this->setEmail();
        }

        protected function checkLoggedIn(){
            if(empty($_SESSION['email'])){
                header("Location: " . BASE_URL);
                die();
            }
        }
        
        private function setEmail(){
            if(isset($_SESSION['email']))
            $this->email = $_SESSION['email'];
        }
    }