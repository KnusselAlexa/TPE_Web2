<?php

require_once './app/controllers/main.controller.php';
require_once './app/controllers/article.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/category.controller.php';
require_once './app/controllers/home.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode("/", $action);

switch ($params[0]) {
    case 'home':
        $homeController = new HomeController();
        $homeController->showHome();
        break;

    case 'articles':
        $articleController = new ArticleController();
        if(isset($params[1])){
            $articleController->showArticlesByCategory($params[1]);
        } else{
            $articleController->showArticles();
        }
        break;

    case 'categories':
        $categoryController = new CategoryController();
        $categoryController->showCategory();
        break;

    case 'detail':
        $articleController = new ArticleController();
        if(isset($params[1])){
            $articleController->showArticle($params[1]);
        }
        break;

    case 'search':
        $homeController = new HomeController();
        if(isset($_POST['search'])){
            $homeController->showArticleFound($_POST['search']);
        }
        break;

    case 'login':
        $authController = new AuthController();
        $authController->login();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

    case 'addArticle':
        $articleController = new ArticleController();
        $articleController->addArticle();
        break;

    case 'deleteArticle':
        $articleController = new ArticleController();
        if(isset($params[1])){
            $articleController->deleteArticle($params[1]);
        };
        break;
    
    case 'updateArticle':
        $articleController = new ArticleController();
        if(isset($params[1])){
            $articleController->updateArticle($params[1]);
        };
        break;

    case 'articleUpdated':
        $articleController = new ArticleController();
        if(isset($params[1])){
            $articleController->articleUpdated($params[1]);
        };
        break;

    case 'addCategory':
        $categoryController = new CategoryController();
        $categoryController->addCategory();
        break;

    case 'deleteCategory':
        $categoryController = new CategoryController();
        if(isset($params[1])){
            $categoryController->deleteCategory($params[1]);
        };
        break;

    case 'updateCategory':
        $categoryController = new CategoryController();
        if(isset($params[1])){
            $categoryController->updateCategory($params[1]);
        };
        break;

    case 'categoryUpdated':
        $categoryController = new CategoryController();
        if(isset($params[1])){
            $categoryController->categoryUpdated($params[1]);
        };
        break;
    
    default:
        $homeController = new HomeController();
        $homeController->showError("Error 404, page not found.");
        break;
}
