<?php

    class CategoryController extends MainController{

        function showCategory(){
            $this->categoryView->showCategories($this->categories, $this->email);
        }

        function addCategory() {
            $this->checkLoggedIn();
            $name_c = $_POST['name_c'];
            $type = $_POST['type'];
            $manager = $_POST['manager'];

            $this->categoryModel->addCategory($name_c, $type, $manager);

            header("Location: " . BASE_URL . "categories"); 
        }

        function deleteCategory($id) {
            $this->checkLoggedIn();
            $name = $this->categoryModel->getCategoryById($id)->nombre_c;
            if(!$this->categoryContainsArticles($id)){
                $this->categoryModel->deleteCategory($id);
                header("Location: " . BASE_URL . "categories");
            }else{
                $this->homeView->showError("No se pudo eliminar la categoria " . $name . ".", $this->categories, $this->email);
            }
        }

        function updateCategory($id){
            $this->checkLoggedIn();
            $category = $this->categoryModel->getCategoryById($id);
            $this->categoryView->showUpdateCategoryForm($category, $this->categories, $this->email);
        }
        
        function categoryUpdated($id){
            $this->checkLoggedIn();
            $name_c = $_POST['name_c'];
            $type = $_POST['type'];
            $manager = $_POST['manager'];
            $this->categoryModel->updateCategory($id, $name_c, $type, $manager);
            header("Location: " . BASE_URL . "categories");
        }

        function categoryContainsArticles($id){
            return $this->articleModel->getArticlesByCategory($id);
        }
    }