<?php 

class MainController{

    public function inicio(){
        if(!isset($_SESSION['login'])){
            header('Location: index.php?controller=main&action=login');
        }else{
            require_once('views/templates/body.php');
            require_once('views/templates/header.php');
            require_once('views/templates/footer.php');
        }
        
        
    }

    public function login(){
        require_once("views/main/login.php");
        
    }

    public function logout(){
        session_destroy();
        header('Location: http://localhost:8001/');
    }
}
?>