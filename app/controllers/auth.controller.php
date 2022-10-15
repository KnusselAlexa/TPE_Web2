<?php

    class AuthController extends MainController{

        function login(){
            if(isset($_POST['email'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
            $user = $this->authModel->getUser($email);
            if($user && password_verify($password, $user->password)){
                $_SESSION['email'] = $user->email;
                header("Location: " . BASE_URL);  
            } else{
                $this->homeView->showError("Usuario o contraseña incorrecta", $this->categories, $this->email);
            };
        }

        function logout(){
            session_destroy();
            header("Location:" . BASE_URL);
        }
    }