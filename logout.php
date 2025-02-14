<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-weight: bold;
        }

        p {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Logging out...</h1>
        <p>Redirecting in <span id="countdown">2</span> seconds</p>
    </div>
    <script>
        // Set isLoggedIn to false in localStorage
        localStorage.setItem('isLoggedIn', 'false');
        localStorage.removeItem('u-type');
        localStorage.removeItem('role');
        // Countdown and redirect
        var countdown = 2; // Set initial countdown value
        var countdownInterval = setInterval(function() {
            document.getElementById("countdown").innerText = countdown;
            countdown--; // Decrement countdown value
            if (countdown < 0) {
                clearInterval(countdownInterval); // Stop the countdown
                window.location.href = 'index.html'; // Redirect after countdown ends
            }
        }, 1000); // 1000 milliseconds (1 second) interval
    </script>

</body>
</html>