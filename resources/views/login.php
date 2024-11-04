<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate Sign In</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="left-panel" style="background-image: url('images/pictlogin.png');">
            <h1>Boost Your Study Productivity with StudyMate!</h1>
            <p>Join StudyMate to access online study rooms, free and premium resources, and mentor guidance. Stay organized, earn rewards, and reach your study goals effortlessly!</p>
        </div>
        <div class="right-panel">
            <a href="regist.php" class="back-link">← Back</a>
            <h2>Sign In</h2>
            <form method="POST" action="landing.php">
                <label for="email">Email address*</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
                
                <label for="password">Password*</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">👁️</button>
                </div>
                
                <button type="submit" class="signin-button">Sign In</button>
            </form>
            <p class="register-link">Don't have an account? <a href="regist.php">Sign Up</a></p>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
