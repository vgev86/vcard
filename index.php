<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard - ACTrade</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <img src="files/logo.png" alt="vCard Logo">
        <nav>
            <a href="admin.php" class="button">Admin Panel</a>
            <a href="generateqr.php" class="button">Generate QR Code</a>
            <form action="userinfo.php" method="GET">
                <input type="text" name="id" placeholder="Search by ID">
                <button type="submit" class="button">Search</button>
            </form>
            <a href="register.php" class="button">Register</a>
            <a href="login.php" class="button">Login</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Welcome to vCard</h1>
            <p>This is a platform for managing and sharing digital business cards.</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 vCard - ACTrade</p>
    </footer>
</body>
</html>
