<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';

    class ArticleView{

        private $smarty;
        
        function __construct() {
            $this->smarty = new Smarty(); //inicializo smarty
        }

        function showArticle($article, $categories, $email){
            $this->smarty->assign('email', $email);
            $this->smarty->assign('article', $article);
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('articleList.tpl');
        }

        function showArticles($articles, $categories, $email) {
            //asigno variables al tpl smarty
            $this->smarty->assign('email', $email);
            $this->smarty->assign('articles', $articles);
            $this->smarty->assign('categories', $categories);
            //mostrar el tpl
            $this->smarty->display('articlesList.tpl');
        }
        
        function showUpdateArticleForm($article, $categories, $email){
            $this->smarty->assign('email', $email);
            $this->smarty->assign('article', $article);
            $this->smarty->assign('categories', $categories);
            $this->smarty->display('updateArticleForm.tpl');
        }
    }