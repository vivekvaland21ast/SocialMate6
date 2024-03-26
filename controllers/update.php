
<?php

$config = require('config.php');
$db = new Database($config['database']);


if (!empty($_FILES["imageFile"]["tmp_name"])) { 
    $imageData = file_get_contents($_FILES["imageFile"]["tmp_name"]);
    $db->query('update post set caption=:caption, image=:image where id = :id', [
        'image' => $imageData,
        'caption' => $_POST['captionText'],
        'id' => $_GET['id'],
    ]);
} else {
    $db->query('update post set caption=:caption where id = :id', [
        'caption' => $_POST['captionText'],
        'id' => $_GET['id'],
    ]);
}

header('location: /');
die();
