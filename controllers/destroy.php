<?php
$config = require ('config.php');
$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database($config['database']);
    $db->query('DELETE FROM post WHERE id = :id', ['id' => $id]);

    header('Location: /profile');
    exit();
} else {
    header('Location: /profile');
    exit();
}

