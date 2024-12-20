<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/token.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Jost:ital,wght@0,100..900;1,100..900&family=Modak&display=swap" rel="stylesheet">
</head>
<body>
  <div class="navbar">
    <a href="/user" class="logo-section">
      <img src="images/logostudymate.png" alt="StudyMate Logo" class="logo">
      <span class="logo-text">StudyMate</span>
    </a>
    <div class="nav-links">
      <a href="#about" class="nav-link">About</a>
      <a href="#features" class="nav-link">Features <i class="fas fa-caret-down"></i></a>
    </div>
    <div class="search-bar">
      <i class="fas fa-search icon"></i>
      <input type="text" placeholder="Search..">
    </div>
    <a class="nav-link"><i class="fas fa-user"></i> USER</a>
    <button class="logout-button" onclick="window.location.href='/'">SIGN OUT</button>
  </div>

    <main>
        <div class="breadcrumbs">
          <p><a href="/user">Home</a> &gt; <a href="/major">Sistem Informasi</a> &gt; <a href="/modul">Modul HTML</a> &gt; <a href="/pilihjadwal">girlsonly Room</a> &gt; Input Token</p>
        </div>
        <div class="module-container">
            <h2>girlsonly Room - Modul HTML</h2>
            <p class="private-room">Private Room</p>
            <form action="/liveroom" method="GET">
                @csrf
                <div class="token-input">
                    <label for="token">Input Token To Access This Module</label>
                    <input type="text" id="token" name="token" placeholder="Type Here" required>
                    <button type="submit" class="button">Submit</button>
                </div>
            </form>            
        </div>
    </main>

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
    
    <script>
      const scrollAmount = 300; // Jumlah piksel untuk menggulir
    
      function scrollTestimonials(direction) {
        const container = document.getElementById('testimonialContainer');
        if (container) {
          console.log(`Scrolling ${direction}...`);
          const scrollValue = direction === 'left' ? -scrollAmount : scrollAmount;
          container.scrollBy({ left: scrollValue, behavior: 'smooth' });
        } else {
          console.error("Container tidak ditemukan!");
        }
      }
    
      function scrollRight() {
        scrollTestimonials('right');
      }
    </script>