<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate Live Room</title>
  <link rel="stylesheet" href="css/liveroom.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Notifications -->
        <div id="notifications"></div>

        <!-- Navbar -->
        <div class="navbar">
            <div class="navbar-left">
                <i class="fas fa-home"></i>
                <i class="fas fa-user-friends"></i>
                <i class="fas fa-cog"></i>
            </div>
            <div class="navbar-right">
                <div class="recording">
                    <i class="fas fa-dot-circle"></i>
                    <span>Recording 13:03:34</span>
                </div>
                <button class="navbar-button participants-btn">
                    <i class="fas fa-users"></i>
                    <span>Participants</span>
                </button>
                <button class="navbar-button apps-btn">
                    <i class="fas fa-th"></i>
                    <span>Apps</span>
                </button>
            </div>
            
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Whiteboard Area -->
            <canvas id="whiteboard" width="800" height="400"></canvas>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Participants Section -->
                <div class="participants-section">
                    <h3>Participants</h3>
                    <div class="participant">
                        <img src="images/avatar1.png" alt="Avatar">
                        <span>Natura</span>
                        <span class="role">Host</span>
                    </div>
                    <div class="participant">
                        <img src="images/avatar2.jpg" alt="Avatar">
                        <span>Cecile</span>
                        <span class="role">Co-Host</span>
                    </div>
                </div>

                <!-- Chat Section -->
                <div class="chat-section">
                    <h3>Chats</h3>
                    <div class="chat-message">from Marry to Everyone: Info soal HTML</div>
                    <div class="chat-input">
                        <input type="text" placeholder="Message to everyone...">
                        <button>Send</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Controls -->
        <div class="controls">
            <button>Mute</button>
            <button>Video</button>
            <button>Share Screen</button>
            <button>Whiteboard</button>
            <button class="leave-meeting">Leave Meeting</button>

            <!-- Reaction Buttons -->
            <div class="reactions">
                <button class="reaction-btn">👍</button>
                <button class="reaction-btn">👏</button>
                <button class="reaction-btn">🎉</button>
                <button class="reaction-btn">🤔</button>
            </div>
        </div>

        <!-- Background Music Control -->
        <audio id="bg-music" loop>
            <source src="audio/background.mp3" type="audio/mp3">
        </audio>
        <button id="toggle-music-btn">🎵 Toggle Music</button>
    </div>

    <!-- Inline JavaScript -->
    <script>
        // Whiteboard Setup
        const canvas = document.getElementById('whiteboard');
        const ctx = canvas.getContext('2d');
        let drawing = false;

        canvas.addEventListener('mousedown', () => (drawing = true));
        canvas.addEventListener('mouseup', () => (drawing = false));
        canvas.addEventListener('mousemove', draw);

        function draw(event) {
            if (!drawing) return;
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.strokeStyle = '#fff';
            ctx.lineTo(event.clientX - canvas.offsetLeft, event.clientY - canvas.offsetTop);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(event.clientX - canvas.offsetLeft, event.clientY - canvas.offsetTop);
        }

        // Notification Function
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            document.getElementById('notifications').appendChild(notification);

            setTimeout(() => notification.remove(), 4000);
        }

        // Example Notifications
        showNotification('Natura has joined the meeting');
        showNotification('Cecile left the meeting');

        // Background Music Control
        const bgMusic = document.getElementById('bg-music');
        const toggleMusicBtn = document.getElementById('toggle-music-btn');

        toggleMusicBtn.addEventListener('click', () => {
            if (bgMusic.paused) {
                bgMusic.play();
                toggleMusicBtn.textContent = '🎵 Pause Music';
            } else {
                bgMusic.pause();
                toggleMusicBtn.textContent = '🎵 Play Music';
            }
        });
    </script>
</body>
</html>
