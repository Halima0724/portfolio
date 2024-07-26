<?php
include 'db.php';

$stmt = $conn->prepare("SELECT * FROM blog_posts ORDER BY created_at DESC");
$stmt->execute();
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo "<div class='blog-post'>";
    echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
    echo "<p>" . htmlspecialchars($post['content']) . "</p>";
    echo "<p><small>Posted on " . htmlspecialchars($post['created_at']) . "</small></p>";
    echo "</div>";
}
?>
