<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/landingpage.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Jost:ital,wght@0,100..900;1,100..900&family=Modak&display=swap" rel="stylesheet">

</head>
<body>
  <div class="navbar">
    <div class="logo-section">
      <img src="images/logostudymate.png" alt="StudyMate Logo" class="logo">
      <span class="logo-text">StudyMate</span>
    </div>
    <div class="nav-links">
      <a href="#about" class="nav-link">About</a>
      <a href="#features" class="nav-link">Features <i class="fas fa-caret-down"></i></a>
    </div>
    <div class="search-bar">
      <i class="fas fa-search icon"></i>
      <input type="text" placeholder="Search..">
    </div>
    <button class="login-button">LOGIN</button>
  </div>
  <section class="landing">
    <div class="landing__content">
        <h1 class="landing__title">
            <span class="landing__welcome">Boost Your Study Productivity with StudyMate!</span> <br>
          </h1>          
        <!-- Tambahan subjudul dan deskripsi yang baru -->
        <p class="landing__description">Join StudyMate to access online study rooms, free and premium resources, and mentor guidance. Stay organized, earn rewards, and reach your study goals effortlessly!</p>
        
        <a href="#" class="landing__button">Sign Up Now<i class="ri-arrow-right-line"></i></a>
    </div>
    <div class="landing__image">
        <img src="images/stduymate_lp.png" alt="Cupcakes">
    </div>
</section>
<section class="features" id="features">
  <h2 class="features__title">FEATURES</h2>
  <div class="features__flex">
    <div class="feature top-feature">
      <img src="images/c1.png" alt="Room Study">
      <a href="#room-study" class="feature__button">Room Study</a>
    </div>
    <div class="feature top-feature">
      <img src="images/c2.png" alt="Request Mentor">
      <a href="#request-mentor" class="feature__button">Request Mentor</a>
    </div>
    <div class="feature top-feature">
      <img src="images/c3.png" alt="Library">
      <a href="#library" class="feature__button">Library</a>
    </div>
  </div>
  <div class="features__bottom">
    <div class="feature bottom-feature">
      <img src="images/c4.png" alt="Study Schedule">
      <a href="#study-schedule" class="feature__button">Study Schedule</a>
    </div>
    <div class="feature bottom-feature">
      <img src="images/c5.png" alt="Point System">
      <a href="#point-system" class="feature__button">Point System</a>
    </div>
  </div>
  <section class="testimonial" id="testimonial">
  <h2 class="testimonial_title">WHAT PEOPLE SAYS ABOUT US</h2>
  <div class="testimonial-navigation">
    <div class="testimonial-container" id="testimonialContainer">
      <div class="testimonial-card">
        <p class="testimonial-text">
          "StudyMate telah membantu saya lebih teratur dalam belajar. Fitur Room Study dan Jadwal Belajar Bersama benar-benar meningkatkan produktivitas saya!"
        </p>
        <img src="images/test1.jpg" alt="Maverick Panjaitan" class="testimonial-image">
        <h3 class="testimonial-name">Maverick Panjaitan</h3>
        <p class="testimonial-institution">Universitas Indonesia</p>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">
          “Fitur Request Mentor sangat bermanfaat! Saya bisa mendapatkan bimbingan langsung dari mentor berpengalaman.”
        </p>
        <img src="images/test2.jpg" alt="Haikal Mahendra" class="testimonial-image">
        <h3 class="testimonial-name">Haikal Mahendra</h3>
        <p class="testimonial-institution">Institut Teknologi Bandung</p>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">
          "Fitur jadwal belajar membantu saya untuk tetap konsisten dan fokus setiap hari!"
        </p>
        <img src="images/test3.jpg" alt="Edgar Valentino" class="testimonial-image">
        <h3 class="testimonial-name">Edgar Valentino</h3>
        <p class="testimonial-institution">Universitas Airlangga</p>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">
          "Sangat terbantu dengan fitur StudyMate, saya dapat mengatur waktu belajar dengan baik!"
        </p>
        <img src="images/test4.jpg" alt="Kartika Pangestu" class="testimonial-image">
        <h3 class="testimonial-name">Kartika Pangestu</h3>
        <p class="testimonial-institution">Universitas Gadjah Mada</p>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">
          "StudyMate membuat saya lebih produktif dengan fitur pengingat jadwal yang luar biasa!"
        </p>
        <img src="images/test5.jpg" alt="Miguel Leonardo" class="testimonial-image">
        <h3 class="testimonial-name">Miguel Leonardo</h3>
        <p class="testimonial-institution">Universitas Diponegoro</p>
      </div>
    </div>
    <button class="nav-button right" onclick="scrollRight()">&#10095;</button> <!-- Panah Kanan -->
  </div>
  </section>

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
  const scrollAmount = 100; // Jumlah piksel untuk menggulir

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

