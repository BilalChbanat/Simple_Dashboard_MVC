<?php
// require_once 'controller/UserController.php';
// if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//     switch ($action) {
//         case 'create':
//             createAction();
//             break;
//         case 'list':
//             indexAction();
//             break;
//         case 'destroy':
//             destroyAction();
//             break;
//         case 'edit':
//             editAction();
//             break;
//         case 'store':
//             storeAction();
//             break;
//         case 'update':
//             updateAction();
//             break;
//         case 'delete':
//             deleteAction();
//             break;
//         default:
//             indexAction();
//     }

// }else{
//     indexAction();
// }
require_once '../Router.php';
require_once '../vendor/autoload.php';

 new Router();
