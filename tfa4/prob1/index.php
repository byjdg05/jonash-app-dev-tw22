<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FA4 - Activity 1</title>
    <style>
        /* Simple dark theater background */
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
            margin: 40px 20px;
        }

        /* 5-column layout locked to prevent horizontal stretching */
        .fa4-act1-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            max-width: 1100px; 
            margin: 0 auto;    
        }
        
        /* Clean card style with vertical alignment fix */
        .fa4-act1-column {
            flex: 1;
            background-color: #2a2a2a;
            border: 1px solid #444;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            
           
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Fixed Portrait Movie Poster Sizing */
        .fa4-act1-column img {
            width: 100%;
            height: 300px;     
            object-fit: cover; 
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .fa4-act1-column p {
            font-size: 0.9rem;
            line-height: 1.4;
            color: #ccc;
            margin-bottom: 15px;
        }

        /* Clean Dropdown Box */
        details {
            margin-top: auto; 
            background-color: #333333;
            border-radius: 4px;
        }

        /* Simple Blue Clickable Button */
        summary {
            font-weight: bold;
            padding: 10px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            list-style: none; 
        }

        summary:hover {
            background-color: #0056b3;
        }

        /* Pure Text Bio Info inside the dropdown */
        .info-list {
            list-style: none;
            padding: 10px;
            margin: 0;
            text-align: left;
            font-size: 0.85rem;
        }
        
        .info-list li {
            margin-bottom: 5px;
            border-bottom: 1px solid #444;
            padding-bottom: 3px;
        }

        .info-list li:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Formative Assessment 4 - Activity 1</h1>
    <p style="text-align: center; color: #aaa; margin-bottom: 40px;">Applications Development and Emerging Technologies</p>

    <div class="fa4-act1-container">

        <div class="fa4-act1-column">
            <?php include('story1.php'); ?>
        </div>

        <div class="fa4-act1-column">
            <?php include('story2.php'); ?>
        </div>

        <div class="fa4-act1-column">
            <?php include('story3.php'); ?>
        </div>

        <div class="fa4-act1-column">
            <?php include('story4.php'); ?>
        </div>

        <div class="fa4-act1-column">
            <?php include('story5.php'); ?>
        </div>

    </div>

</body>
</html>