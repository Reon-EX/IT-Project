<?php
// proposal.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Proposal</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f172a;
            color: #f1f5f9;
            margin: 0;
            padding: 40px;
            text-align: center;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .logo-container img {
            height: 80px;
            width: auto;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .proposal-box {
            max-width: 900px;
            margin: auto;
            background-color: #1e293b;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }

        .info {
            margin: 10px 0;
            font-size: 18px;
        }

        .label {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #334155;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border: 1px solid #475569;
            font-size: 16px;
        }

        th {
            background-color: #1e293b;
            font-weight: bold;
        }

        .nav-button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .nav-button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="logo-container">
        <img src="ums.jpeg" alt="Logo 1">
        <img src="aums.jpeg" alt="Logo 2">
    </div>

    <div class="proposal-box">
        <div class="title">CK0025 PROJECT IT PROPOSAL</div>

        <div class="info"><span class="label">Supervisor:</span> Siti Hasnah binti Tanalol</div>
        <div class="info"><span class="label">Project Name:</span> SHORT FILM: The Untold Sides</div>
        <div class="info"><span class="label">Group Members:</span> 2</div>

        <table>
            <tr>
                <th>No</th>
                <th>No Matric</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>1.</td>
                <td>FT24110033</td>
                <td>NADA NAJWA BINTI AMRAN SIKIN</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>FT24110072</td>
                <td>BRANDON FOO JIAN WEI</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>FT24160173</td>
                <td>MUHAMMAD AMIN ZAHIRRUDDIN BIN JUNARDI</td>
            </tr>
        </table>

        <a href="introduction.php" class="nav-button">Next</a>
    </div>

</body>
</html>
