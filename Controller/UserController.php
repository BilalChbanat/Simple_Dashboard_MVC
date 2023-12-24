<?php
namespace Controllers;
require_once 'model/UserModel.php';
class UserController
{

    function index()
    {
        $users = latest();
        require_once 'views/liste_users.php';
    }

    function createAction()
    {
        require_once 'views/create.php';
    }

    function storeAction()
    {
        create();

        header('location:index.php?action=list');
    }

    function editAction()
    {
        $id = $_GET['id'];
        $user = view($id);
        require_once 'views/edit.php';
    }

    function updateAction()
    {
        extract($_POST);
        edit($id, $nom, $prenom, $age, $login, $password);
        header('location:index.php?action=list');
    }

    function deleteAction()
    {
        $id = $_GET['id'];
        require_once 'views/delete.php';
    }

    function destroyAction()
    {
        destroy($_GET['id']);

        header('location:index.php?action=list');

    }
}