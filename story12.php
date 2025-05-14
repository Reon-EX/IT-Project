<?php
// story12.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Story 1 and 2</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: linear-gradient(135deg, #1f1c2c, #928dab);
            font-family: 'Poppins', sans-serif;
            color: white;
            min-height: 100vh;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: rgba(255,255,255,0.05);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            font-size: 38px;
            font-weight: 900;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .subtitle {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 40px;
            color: #f1f1f1;
        }
        .story-section {
            margin-bottom: 60px;
        }
        .story-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
            text-align: center;
        }
        .scene {
            margin-bottom: 40px;
            text-align: center;
        }
        .scene img {
            width: 100%;
            max-width: 900px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.5);
        }
        .scene p {
            font-size: 16px;
            line-height: 1.8;
            background-color: rgba(255,255,255,0.08);
            padding: 15px 20px;
            border-radius: 12px;
            max-width: 900px;
            margin: 15px auto 0;
        }
        .buttons {
            text-align: center;
            margin-top: 40px;
        }
        .nav-button {
            padding: 12px 24px;
            font-size: 16px;
            background-color: white;
            color: #1f1c2c;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin: 0 10px;
            transition: 0.3s;
            text-decoration: none;
        }
        .nav-button:hover {
            background-color: #444;
            color: white;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Short Film: The Untold Sides</h1>
    <div class="subtitle">STORYBOARD</div>

    <div class="story-section">
        <div class="story-title">Story 1</div>
        <div class="scene">
            <img src="story1page1.png.png" alt="Story 1 - Scene 1">
            <p>Aulia sitting nervously at her desk. Receiving messages from her parents. Her parents frustrated of her result.</p>
        </div>
        <div class="scene">
            <img src="story1page2.png.png" alt="Story 1 - Scene 2">
            <p>Aulia looking sad and overwhelmed staring at the messages. Aulia sending a simple "Sorry" message.</p>
        </div>
    </div>

    <div class="story-section">
        <div class="story-title">Story 2</div>
        <div class="scene">
            <img src="story2page1.png.png" alt="Story 2 - Scene 1">
            <p>Arisa and Alia excitedly invite Sara to go to the mall after class while Sara looks hesitant.</p>
        </div>
        <div class="scene">
            <img src="story2page2.png.png" alt="Story 2 - Scene 2">
            <p>Arisa and Alia try to persuade Sara to come while Sara looks conflicted.</p>
        </div>
        <div class="scene">
            <img src="story2page3.png.png" alt="Story 2 - Scene 3">
            <p>Sara walks back from the restroom and hears Arisa and Alia talking about her. She was shocked and hurt.</p>
        </div>
    </div>

    <div class="buttons">
        <a href="page3.php" class="nav-button">Previous</a>
        <a href="story34.php" class="nav-button">Next</a>
    </div>
</div>

</body>
</html>
