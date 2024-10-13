<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content, created_at) VALUES ('$title', '$content', NOW())";
    if ($conn->query($sql)) {
        echo "Post added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="dashboard" data-aos="fade-up">
        <h2>Admin Dashboard</h2>
        <form action="admin_dashboard.php" method="POST">
            <input type="text" name="title" placeholder="Post Title" required>
            <textarea name="content" rows="5" placeholder="Post Content" required></textarea>
            <button type="submit">Add Post</button>
        </form>
        <a href="logout.php">Logout</a>
    </section>
</body>
</html>
