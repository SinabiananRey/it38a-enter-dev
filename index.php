<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <div class="left-section">
        <h1>Sports Club</h1>
        <p>A Sports Club Management System in Northern Bukidnon State College</p>
    </div>

    <div class="right-section">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])) { ?>
            <div class="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
        <form action="login.php" method="POST">
            <div class="input-container">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="options">
                <label><input type="checkbox" name="remember"> Remember</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>
