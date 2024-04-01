<?php
// Connect to your database
$conn = mysqli_connect("localhost", "root", "", "login");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user_id and post_id from the GET request
$user_id = $_GET['user_id'];
$post_id = $_GET['post_id'];

// Check if the user has already liked the post
$query = "SELECT * FROM post_likes WHERE user_id = $user_id AND post_id = $post_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // If the user has already liked the post, delete the like
    $delete_query = "DELETE FROM post_likes WHERE user_id = $user_id AND post_id = $post_id";
    mysqli_query($conn, $delete_query);
    echo "unliked";
} else {
    // If the user hasn't liked the post yet, insert a new like
    $insert_query = "INSERT INTO post_likes (user_id, post_id) VALUES ($user_id, $post_id)";
    mysqli_query($conn, $insert_query);
    echo "liked";
}