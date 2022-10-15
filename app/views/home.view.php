<?php
require_once './libreria/smarty-4.2.1/libs/Smarty.class.php';

class HomeView{
    private $smarty;
    public function __construct(){
        $this->smarty = new Smarty();
    }
    function ShowHome($categories, $email){
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('home.tpl');
    }

    function showError($error, $categories, $email){
        $this->smarty->assign('email', $email);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('showError.tpl');
    }
    
}