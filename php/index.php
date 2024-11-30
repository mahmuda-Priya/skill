<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentors - Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Mentors</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#courses">Courses</a>
            <a href="#contact">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <section id="home">
        <h2>Our Motives</h2>
        <p>We provide top-quality mentorship in various domains to help you grow in your career.</p>
    </section>

    <section id="courses">
        <h2>Our Courses</h2>
        <div class="course-list">
            <?php
            $result = $conn->query("SELECT * FROM courses");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='course'>
                        <h3>{$row['name']}</h3>
                        <p>{$row['description']}</p>
                      </div>";
            }
            ?>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: contact@mentors.com</p>
        <p>Phone: +1234567890</p>
        <p>Address: 123 Mentor St, Learning City</p>
    </section>

    <footer>
        <p>&copy; 2024 Mentors. All Rights Reserved.</p>
    </footer>
</body>
</html>
