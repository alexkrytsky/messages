<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/19/18
 * Time: 7:27 PM
 */

//get request for viewMessages.php
function showView(){
    //prepare the data for the view page
    $records = getMessages();

    //load the view page
    require 'pages/viewMessages.php';
}

//get request for insertMessagges.php
function showInsertForm(){
    require 'pages/insertMessage.php';
}

//POST request
function handleInsertForm(){
    //get the form message and insert into DB
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $message = $_POST['message'];

        insertMessage($message);

        //redirect
        header('location:index.php?page=view');
    }
}

//get request for insertMessagges.php
function showEditForm($id){
    $record = getMessage($id);
    require 'pages/editMessage.php';
}

function handleEditForm(){
    updateMessage($_GET['id'], $_POST['message']);
//    print_r($_GET['id'] .  $_POST['message']);
    header('location:index.php?page=view');
}

?>