<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/createmodul.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <div class="navbar">
        <a href="/" class="logo-section">
            <img src="images/logostudymate.png" alt="StudyMate Logo" class="logo">
            <span class="logo-text">StudyMate</span>
        </a>
        <div class="nav-links">
          <a href="#about" class="nav-link">About</a>
          <a href="/#features" class="nav-link">Features <i class="fas fa-caret-down"></i></a>
        </div>
        <div class="search-bar">
          <i class="fas fa-search icon"></i>
          <input type="text" placeholder="Search..">
        </div>
        <button class="login-button" onclick="window.location.href='/signin'">SIGN IN</button>
      </div>

    <!-- Content -->
    <main>
        <div class="breadcrumbs">
            <p><span>All Room </span> &gt; 
                <span> Sistem Informasi </span> &gt; 
                <span> Create Modul </span> </p>
        </div>
    <div class="create-modul">
      <h2>Create New Modul</h2>
      <form>
        <div class="form-group">
          <label for="modul-name">Modul Name:</label>
          <input type="text" id="modul-name" placeholder="Enter Modul Name" required>
        </div>
        <div class="form-group">
          <label for="major">Major:</label>
          <input type="text" id="major" placeholder="Enter Major" required>
        </div>
        <div class="form-group">
          <label>Visibility:</label>
          <div>
            <label><input type="radio" name="visibility" value="private" checked> Private Room</label>
            <label><input type="radio" name="visibility" value="public"> Public Room</label>
          </div>
        </div>
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" id="date" required>
        </div>
        <div class="form-group">
          <label for="time">Time:</label>
          <input type="time" id="time" required>
        </div><br>
        <button type="submit">Create</button>
      </form>
    </div>
  </main><br><br><br>

    <!-- Footer -->
    <footer id="about">
        <div class="footer-container">
        <div class="footer-section about">
        <img src="images/logostudymate.png" alt="StudyMate Logo" class="logof">
        <span class="logof-text">StudyMate</span>
        <p>
            Join StudyMate to access online study rooms, free and premium resources, and mentor guidance. 
            Stay organized, earn rewards, and reach your study goals effortlessly!
        </p>
    </div>
            <div class="footer-section links">
                <h4>GET HELP</h4>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Latest Articles</a></li>
                    <li><a href="#">How To Use StudyMate</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-section links">
                <h4>FEATURE</h4>
                <ul>
                    <li><a href="#">Room Study</a></li>
                    <li><a href="#">Request Mentor</a></li>
                    <li><a href="#">Study Schedule</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Point System</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h4>CONTACT US</h4>
                <p>Address: Jl. Pendidikan No. 45, Surabaya, Indonesia</p>
                <p>Tel: +62 (361) 123-4567</p>
                <p>Mail: support@studymate.com</p>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2024 StudyMate | Desain Interaksi Praktikum</p>
        </div>
    </footer>
</body>
</html>