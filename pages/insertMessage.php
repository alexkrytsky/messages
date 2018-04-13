<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/12/18
 * Time: 8:24 PM
 */

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require '../database/db.php';

        $message = $_POST['message'];

        insertMessage($message);

        //redirect
        header('location', viewMessages.php);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<form action="insertMessage.php" method="post">
    <div class="container">
        <div class="row">
            <div class="column-sm-12">
                <h1>Message Entry</h1>
                <div class="form-group">
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="form-control btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>