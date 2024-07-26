<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="contact">
        <h1>Contact</h1>
        <form action="contacts.php" method="post">
            <label for="name">Name:</label> 
            <input type="text" id="name" name="name" required> <br>
            <label for="email">Email:</label> 
            <input type="email" id="email" name="email" required> <br>
            <label for="message">Message:</label> 
            <textarea id="message" name="message" required></textarea> <br>
            <button type="submit">Send</button>
        </form>
    </section>

    <footer>
        <p>&copy; Halima</p>
    </footer>
</body>
</html>
