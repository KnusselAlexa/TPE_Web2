<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';

class CategoryView{
    private $smarty;
    //inicializo smarty
    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showCategories($categories, $email){
        //asigno variables al tpl smarty
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categories', $categories);
        //mostrar el tpl
        $this->smarty->display('categoryList.tpl');
    }

    function showUpdateCategoryForm($category, $categories, $email){
        $this->smarty->assign('email', $email);
        $this->smarty->assign('category', $category);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('updateCategoryForm.tpl');
    }
}