<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/major.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logo-section">
            <img src="images/logostudymate.png" alt="StudyMate Logo" class="logo">
            <span class="logo-text">StudyMate</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><input type="text" placeholder="Search..."></li>
                <li><a href="#">0 Point</a></li>
                <li><a href="#">USER</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <h1>All Room &gt; Major</h1>
        <div class="room-grid">
            <div class="room-item">
                <img src="images/SI.png" alt="Image description">
                <div class="label">Sistem</div>
            </div>            
            <div class="room-item">
                <img src="images/FIS.png" alt="Image description">
                <div class="label">Fisika</div>
            </div>
            <div class="room-item">
                <img src="images/BIO.png" alt="Image description">
                <div class="label">Biologi</div>
            </div>
            <div class="room-item">
                <img src="images/TB.png" alt="Image description">
                <div class="label">Teknik Biomedik</div>
            </div>
            <div class="room-item">
                <img src="images/MAT.png" alt="Image description">
                <div class="label">Matematika</div>
            </div>
            <div class="room-item">
                <img src="images/KIM.png" alt="Image description">
                <div class="label">Kimia</div>
            </div>
            <div class="room-item">
                <img src="images/STAT.png" alt="Image description">
                <div class="label">Statistika</div>
            </div>
            <div class="room-item">
                <img src="images/TE.png" alt="Image description">
                <div class="label">Teknik Elektro</div>
            </div>
            <div class="room-item">
                <img src="images/ROB.png" alt="Image description">
                <div class="label">Robotika</div>
            </div>
        </div>
    </main>

    <footer>
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