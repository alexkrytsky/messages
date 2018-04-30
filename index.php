<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/19/18
 * Time: 7:08 PM
 */
require "database/db.php";
require "controlers/messageControlle.php";

    //load shared resources among pages

    //save the HTTP verb
    $httpVerb = $_SERVER['REQUEST_METHOD'];


    //determine which page is requested
    $page = 'view';
    $file = 'viewMessages.php';
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page){
            case 'view':
                $file = 'viewMessages.php';
                break;
            case 'add':
                $file = 'insertMessage.php';
                break;
            case 'edit':
                $file = 'editMessage.php';
                break;
        }
    }

    switch ($page){
        case 'view':
            showView();
            break;
        case 'add':
            if($httpVerb == 'GET'){
                showInsertForm();
            }else{
                handleInsertForm();
            }
            break;
        case 'edit':
            if($httpVerb == 'GET'){
                showEditForm($_GET['id']);
            }else{
                handleEditForm();
            }
            break;
    }
    
    //load the requested page

    ?>