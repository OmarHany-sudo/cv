<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omar Hany Shalaby | Cybersecurity Specialist</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <!-- صفحة البداية والقسم التعريفي -->
    <section id="home" data-aos="fade-in">
        <h1>Welcome to Omar Hany Shalaby's Personal Site</h1>
        <p>Cybersecurity Specialist, AOU - Egypt</p>
    </section>

    <!-- عرض المنشورات -->
    <section id="blog" data-aos="fade-up">
        <h2>Latest Posts</h2>
        <div class="posts">
            <?php
            $sql = "SELECT * FROM posts ORDER BY created_at DESC";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['content'] . "</p>";
                echo "<small>Posted on " . $row['created_at'] . "</small>";
                echo "</article><hr>";
            }
            ?>
        </div>
    </section>

    <!-- قسم التواصل -->
    <section id="contact" data-aos="fade-up">
        <h2>Contact Me</h2>
        <form action="submit_form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
