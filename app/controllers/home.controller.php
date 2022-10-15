<?php

    class HomeController extends MainController{

        function showHome(){
            $this->homeView->showHome($this->categories, $this->email);
        }

        function showArticleFound($name){
            $article = $this->articleModel->getArticleByName($name);
            if($article){
                $this->articleView->showArticle($article, $this->categories, $this->email);
            } else{
                $this->showError("Articulo no encontrado");
            }
        }

        function showError($error){
            $this->homeView->showError($error, $this->categories, $this->email);
        }
    }