<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StudyMate</title>
  <link rel="stylesheet" href="css/pilihjadwal.css">
  <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Top Navbar -->
        <div class="navbar">
            <div class="navbar-left">
                <div class="icon"></div>
                <div class="icon"></div>
                <div class="icon"></div>
            </div>
            <div class="navbar-right">
                <div class="recording">13:03:34</div>
                <button class="participants-btn">Participants</button>
                <button class="apps-btn">Apps</button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Whiteboard Section -->
            <div class="whiteboard">
                <h1>Whiteboard</h1>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
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
                <div class="chat-section">
                    <h3>Chats</h3>
                    <div class="chat-message">from Marry to Everyone: info soal HTML</div>
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
        </div>
    </div>
</body>
</html>