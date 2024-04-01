<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get like count for a post
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["post_id"])) {
    $post_id = $_GET["post_id"];

    $count_query = "SELECT COUNT(*) AS like_count FROM post_likes WHERE post_id = $post_id";
    $result = $conn->query($count_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row["like_count"];
    } else {
        echo "0";
    }
}

// Close connection
$conn->close();