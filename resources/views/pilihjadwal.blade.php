<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/pilihjadwal.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Jost:ital,wght@0,100..900;1,100..900&family=Modak&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
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

    <!-- Content -->
    <main>
        <div class="breadcrumbs">
            <p><a href="/user">Home</a> &gt; <a href="/major">Sistem Informasi</a> &gt; <a href="/modul">Modul HTML</a> &gt; Pilih Jadwal</p>
        </div>
        <h1 class="page-title">Modul HTML</h1>
        <div class="search-container">
            <input type="text" placeholder="Search schedule available">
        </div>

        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Room Name</th>
                    <th>Schedule</th>
                    <th>Total Participant</th>
                    <th>Status</th>
                    <th>Pick Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-lock"></i> Genius_People</td>
                    <td>16.40 - 18.30 WIB</td>
                    <td>12/12</td>
                    <td class="status full">FULL</td>
                    <td><button class="disabled">Join Room</button></td>
                </tr>
                <tr>
                    <td>Nah, We'd WIN</td>
                    <td>16.40 - 18.30 WIB</td>
                    <td>8/10</td>
                    <td class="status avail">AVAIL</td>
                    <td><a href="/liveroom"><button class="active">Join Room</button></a></td>
                </tr>
                <tr>
                    <td><i class="fas fa-lock"></i> girlsonly</td>
                    <td>16.40 - 18.30 WIB</td>
                    <td>9/10</td>
                    <td class="status avail">AVAIL</td>
                    <td><a href="/token"><button class="active">Join Room</button></a></td>
                </tr>
                <tr>
                    <td>12SeniorHigh</td>
                    <td>16.40 - 18.30 WIB</td>
                    <td>36/40</td>
                    <td class="status avail">AVAIL</td>
                    <td><a href="/liveroom"><button class="active">Join Room</button></a></td>
                </tr>
                <tr>
                    <td>Lover_Man</td>
                    <td>16.40 - 18.30 WIB</td>
                    <td>6/6</td>
                    <td class="status full">FULL</td>
                    <td><button class="disabled">Join Room</button></td>
                </tr>
            </tbody>
        </table>
        <div><br><br><br><br></div>
    </main>

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

    <!-- Custom Notification -->
<div id="notification" class="notification-overlay">
    <div class="notification-box">
        <p>The room has started. Do you want to join now?</p>
        <div class="notification-buttons">
            <button id="yesButton">Yes</button>
            <button id="noButton">No</button>
        </div>
    </div>
</div>

<script>
    // Script for Notification and Redirection
    document.querySelectorAll("button.active").forEach((button) => {
        button.addEventListener("click", function (event) {
            const parentRow = button.closest("tr");
            const isLocked = parentRow.querySelector(".fa-lock");

            if (isLocked) {
                // Show notification for non-locked rooms
                event.preventDefault();
                const notification = document.getElementById("notification");
                notification.style.display = "flex";

                // Handle YES button
                document.getElementById("yesButton").onclick = function () {
                    window.location.href = "/token"; // Redirect to live room
                };
                
                // Handle NO button
                document.getElementById("noButton").onclick = function () {
                    notification.style.display = "none";
                };
            } else {
                // Show notification for non-locked rooms
                event.preventDefault();
                const notification = document.getElementById("notification");
                notification.style.display = "flex";

                // Handle YES button
                document.getElementById("yesButton").onclick = function () {
                    window.location.href = "/liveroom"; // Redirect to live room
                };

                // Handle NO button
                document.getElementById("noButton").onclick = function () {
                    notification.style.display = "none";
                };
            }
        });
    });
</script>

</body>
</html>