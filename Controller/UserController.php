<?php
namespace Controllers;
require_once '../model/UserModel.php';
class UserController
{

    function index()
    {
        $users = latest();
        require_once '../views/liste_users.php';
    }

    function create()
    {
        require_once '../views/create.php';
    }

    function storeAction()
    {
        create();

        header('location:../public/index.php');
    }

    function edit($id)
    {
       
        $user = view($id);
        require_once '../views/edit.php';
    }


    function updateAction()
    {
        extract($_POST);
        edit($id, $nom, $prenom, $age, $login, $password);
        header('location:../public/index.php');
    }

    function delete($id)
    {
     
        destroy($id);

        header('location:../../');

    }

  
}