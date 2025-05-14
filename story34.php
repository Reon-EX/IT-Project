<?php
// story34.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Story 3 and 4</title>
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
        <div class="story-title">Story 3</div>
        <div class="scene">
            <img src="story3a.png" alt="Story 3 - Scene 1">
            <p>Aman issitting at his desk,surrounded by piles of
unfinished assignments.
His phone lights up with a message: "LET'S BREAK UP."
</p>
        </div>
        <div class="scene">
            <img src="story3b.png" alt="Story 3 - Scene 2">
            <p>Aman frantically types, asking why, and his girlfriend
repliesthat he istoo busy and doesn’t put effort into the
relationship.
Aman then tries calling, but the call doesn’t go through.</p>
        </div>
        <div class="scene">
            <img src="story3c.png" alt="Story 3 - Scene 3">
            <p> He glances at the notice board,showing the final exam date coming up soon. Scene: Aman holds his head, looking at both his unfinished assignments and his phone, completely defeated</p>
        </div>
    </div>

    <div class="story-section">
        <div class="story-title">Story 4</div>
        <div class="scene">
            <img src="story4a.png" alt="Story 4 - Scene 1">
            <p>Audi is wiping down tablesin a small
restaurant and suddenly got a callfrom
Haris asking why not in the class</p>
        </div>
        <div class="scene">
            <img src="story4b.png" alt="Story 4 - Scene 2">
            <p>Harisreminds Audi about their upcoming
study group for an English class project. Audi
looks guilty</p>
        </div>
        <div class="scene">
            <img src="story4c.png" alt="Story 4 - Scene 3">
            <p>Audistares at his phone after the call ends,
sighs, and returnsto wiping the table
,looking tired, thoughtful.
</p>
        </div>
    </div>

    <div class="buttons">
        <a href="story12.php" class="nav-button">Previous</a>
        <a href="video.php" class="nav-button">Next</a>
    </div>
</div>

</body>
</html>
