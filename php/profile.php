<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Mentors</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Mentors</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Profile Information</h2>
        <!-- PHP Dynamic Content -->
        <p><strong>Username:</strong> <?php echo htmlspecialchars($username ?? '[Username]'); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email ?? '[Email]'); ?></p>
        
        <form action="php/updateProfile.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" 
                   value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
            <input type="email" name="email" placeholder="Your Email" 
                   value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
            <input type="password" name="password" placeholder="New Password" required>
            <button type="submit">Update Profile</button>
        </form>
        
        <form action="php/deleteProfile.php" method="POST">
            <button type="submit">Delete Account</button>
        </form>

        <a href="logout.php" class="btn">Logout</a>
    </div>

    <footer>
        <p>&copy; 2024 Mentors. All rights reserved.</p>
    </footer>
</body>
</html>
