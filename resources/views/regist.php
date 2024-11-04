<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate Sign Up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Join StudyMate and Boost Your Study Productivity!</h1>
            <p>Create an account to access online study rooms, free and premium resources, and mentor guidance. Stay organized, earn rewards, and reach your study goals effortlessly!</p>
        </div>
        <div class="right-panel">
            <a href="login.php" class="back-link">← Back</a>
            <h2>Sign Up</h2>
            <form method="POST" action="signup_process.php"> <!-- Update action URL as needed -->
                <label for="name">Full Name*</label>
                <input type="text" id="name" name="name" placeholder="Enter full name" required>

                <label for="email">Email Address*</label>
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
                
                <label for="password">Password*</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">👁️</button>
                </div>

                <label for="confirm-password">Confirm Password*</label>
                <div class="password-container">
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" required>
                    <button type="button" class="toggle-password" onclick="toggleConfirmPassword()">👁️</button>
                </div>

                <button type="submit" class="signup-button">Sign Up</button>
            </form>
            <p class="signin-link">Already have an account? <a href="login.php">Sign In</a></p>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
