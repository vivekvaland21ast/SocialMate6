<?php
$config = require ('config.php');
$db = new Database($config['database']);

if (isset ($_POST['post'])) {
    if (isset ($_FILES["imageFile"]) && $_FILES["imageFile"]["error"] == 0) {
        $imageData = file_get_contents($_FILES["imageFile"]["tmp_name"]);
        $caption = $_POST['captionText'];
        $db->query('INSERT INTO post (caption, image) VALUES (:caption, :image)', [
            'caption' => $caption,
            'image' => $imageData,
        ]);
        echo "
        <div class='toast toast-end toast-middle'>
            <div class='alert alert-success'>
                <span>Post uploaded successfully.</span>
            </div>
        </div>
        ";

        header("Location: /");
        exit();
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Form not submitted.";
}
