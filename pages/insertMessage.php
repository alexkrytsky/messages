<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/12/18
 * Time: 8:24 PM
 */
require ('components/header.php');
?>

<body>
<form action="index.php?page=add" method="post">
    <div class="container">
        <div class="row">
            <div class="column-sm-12">
                <h1>Message Entry</h1>
                <div class="form-group">
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"> </textarea>
                </div>
                <button type="submit" class="form-control btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
require 'components/footer.php';