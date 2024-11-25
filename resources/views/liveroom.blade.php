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
                <a href="/"><i class="fas fa-home"></i></a>
                <i class="fas fa-user-friends"></i>
                <i class="fas fa-cog"></i>
                <a href="/shareroom"><i class="fas fa-share-alt"></i></a>
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
    <div class="whiteboard-container">
        <canvas id="whiteboard" width="900" height="500"></canvas>
        <div class="tutoring-image-overlay">
            <img src="images/liveroom.png" alt="Tutoring Session">
        </div>
    </div>

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
                <img src="images/avatar1.png" alt="Avatar">
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
    <a href="/pilihjadwal" class="left-controls">
        <button class="control-btn leave-meeting">
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </a>
    <div class="center-controls">
        <button class="control-btn"><i class="fas fa-microphone"></i></button>
        <button class="control-btn"><i class="fas fa-video"></i></button>
        <button class="control-btn"><i class="fas fa-desktop"></i></button>
        <button class="control-btn"><i class="fas fa-chalkboard"></i></button>
    </div>
    <div class="reactions">
        <button class="reaction-btn">👍</button>
        <button class="reaction-btn">👏</button>
        <button class="reaction-btn">🎉</button>
        <button class="reaction-btn">🤔</button>
    </div>
</div>

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

        document.querySelectorAll('.reaction-btn').forEach((button) => {
    button.addEventListener('click', (event) => {
        const reaction = event.target.textContent;
        const effect = document.createElement('span');
        effect.className = 'reaction-effect';
        effect.textContent = reaction;

        // Posisi awal sesuai dengan posisi tombol
        const rect = button.getBoundingClientRect();
        effect.style.left = `${rect.left + rect.width / 2}px`;
        effect.style.top = `${rect.top - 10}px`;

        document.body.appendChild(effect);

        // Hapus elemen setelah animasi selesai
        effect.addEventListener('animationend', () => effect.remove());
    });
});

    </script>
</body>
</html>
