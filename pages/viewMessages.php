<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/5/18
 * Time: 7:45 PM
 */
//    getConnection();

require 'components/header.php';
?>

<!-- Place your content here -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <?php
                foreach ($records as $record) {
                    echo "<li class='list-group-item'>{$record['body']} <a href='index.php?page=edit&id={$record['id']}'>Edit</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php
    require 'components/footer.php';
?>
