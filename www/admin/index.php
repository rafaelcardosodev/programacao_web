<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_errors,',1);
    error_reporting(E_ALL);

    session_start();
    if(!isset($_GET['controller'])){
        require_once('controllers/MainController.php');
        $Main = new MainController();
        $Main -> inicio();
    }else{
        switch($_REQUEST['controller']){
            case 'main':
                require_once('controllers/MainController.php');
                $Main = new MainController();
                if(!isset($_GET['action'])){
                    $site -> inicio();
                }else{
                    switch ($_REQUEST['action']){
                        case 'login':
                            $Main -> login();
                        break;
                        case 'home':
                            $Main -> inicio();
                        break;
                        case 'logout':
                            $Main -> logout();
                    }
                }
            break;
            case 'client':
                require_once('controllers/ClientController.php');
                $client = new ClientController();
                if(!isset($_GET['action'])){
                    $client -> inicio();
                }else{
                    switch($_REQUEST['action']){
                        case 'listClients':
                            $client -> listClients();
                        break;
                        }
                    }
            break;
            case 'user':
                require_once('controllers/UsersController.php');
                $User = new UsersController();
                if(!isset($_GET['action'])){
                    $User -> inicio();
                }else{
                    switch($_REQUEST['action']){
                        case 'validatelogin':
                            $User -> validateLogin();
                        break;
                        }
                    }
            break;      
        break;
        }
    }

?>