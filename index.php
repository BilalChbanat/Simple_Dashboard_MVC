<?php
require_once 'controller/UserController.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            createAction();
            break;
        case 'list':
            indexAction();
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            deleteAction();
            break;
    }
}

// session_start();
// require_once 'router.php';
// require_once 'autoloader.php';
// $router = new Router();
// $router->define([
//     'GET'=>[
//         'list'=>'controller/userController.php',
//         'product/add'=>'controller/ProductAddController.php',
//         'product/edit'=>'controller/ProductEditController.php',
//         'product/delete'=>'controller/ProductDeleteController.php',
//     ]
// ]);
// if(isset($_GET['url'])){
//     // remove crud_oop/ from the uri
//     $uri = trim($_GET['url'],'/');
//     $method = $_SERVER['REQUEST_METHOD'];
//     try{
//         require_once $router->direct($uri,$method);
//     }catch(Exception $e){
//         echo $e->getMessage();
//     }
// }
