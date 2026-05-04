<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $name = "Jonash Aaron C. De Guia";
    $phoneNum = "(+63) 919 279 2747";
    $email = "jcdeguia1@fit.edu.ph";
    $location = "Manila, Philippines";
    $role = "Web & App Developer Student";
    $about = "Aspiring developer with a passion for learning web and application development, digital content creation, and online business.";
?>

<div class="container">

    <!-- Header -->
    <div class="header">
    <div class="profile-photo">
        <img src="profile.jpg" alt="Profile Photo">
    </div>
        <h1><?= $name ?></h1>
        <p class="role"><?= $role ?></p>
    </div>

    <hr>

    <!-- Contact Info -->
    <div class="info">
        <p><strong>✉️</strong> <?= $email ?></p>
        <p><strong>📱</strong> <?= $phoneNum ?></p>
        <p><strong>📍</strong> <?= $location ?></p>
    </div>

    <!-- About -->
    <div class="about">
        <h2>About Me</h2>
        <p><?= $about ?></p>
    </div>

    <!-- Education -->
    <div class="education">
        <h2>Education</h2>

        <p>
            <strong>Elementary:</strong><br>
            High Horizon Learning Center<br>
            <em>2012 – 2018</em>
        </p>

        <p>
            <strong>High School (Junior High):</strong><br>
            San Diego Parochial School<br>
            <em>2018 – 2022</em>
        </p>

        <p>
            <strong>Senior High School:</strong><br>
            Our Lady of Fatima College<br>
            <em>2022 – 2024</em>
        </p>

        <p>
            <strong>College:</strong><br>
            FEU Institute of Technology<br>
            <em>2024 – Present</em>
        </p>
    </div>

    <!-- Skills -->
    <div class="skills">
        <h2>Skills</h2>

        <div class="skill-group">
            <h3>Technical Skills</h3>
            <ul>
                <li>Basic HTML, Javascript & CSS</li>
                <li>PHP Fundamentals</li>
                <li>Responsive Web Design (Beginner)</li>
                <li>Visual Studio</li>
                <li>Basic UX/UI Design</li>
            </ul>
        </div>

        <div class="skill-group">
            <h3>Social Media & Business Skills</h3>
            <ul>
                <li>Social Media Content Management</li>
                <li>Basic Digital Marketing</li>
                <li>Audience Engagement Handling</li>
                <li>Online Customer Communication</li>
                <li>Simple Video Editing</li>
            </ul>
        </div>

        <div class="skill-group">
            <h3>Soft Skills</h3>
            <ul>
                <li>Communication</li>
                <li>Teamwork & Collaboration</li>
                <li>Time Management</li>
                <li>Adaptability & Willingness to Learn</li>
            </ul>
        </div>
    </div>

    <!-- Experience -->
    <div class="experience">
        <h2>Experience & Side Projects</h2>

        <div class="exp-item">
            <h3>YouTube Automation & Channel Management</h3>
            <p class="exp-date">2024 – Present</p>
            <ul>
                <li>Managed automated YouTube channels with over 100,000 subscribers</li>
                <li>Handled video uploads, optimization, and workflow systems</li>
                <li>Analyzed performance metrics and audience engagement</li>
            </ul>
        </div>

        <div class="exp-item">
            <h3>Music Producer / Beat Maker</h3>
            <p class="exp-date">2023 – Present</p>
            <ul>
                <li>Produced original beats for local and international artists</li>
                <li>Handled music arrangement, mixing, and production</li>
                <li>Collaborated with artists to meet creative goals</li>
            </ul>
        </div>

        <div class="exp-item">
            <h3>TikTok Affiliate & Whop Content Clipper</h3>
            <p class="exp-date">2026 – Present</p>
            <ul>
                <li>Created short-form content for TikTok affiliate marketing</li>
                <li>Repurposed long-form videos into high-performing clips</li>
                <li>Applied trends, hooks, and calls-to-action</li>
            </ul>
        </div>
    </div>

    <!-- Certifications -->
    <div class="certifications">
        <h2>Certifications</h2>
        <ul>
            <li><strong>Cisco Certified:</strong> Java Programming</li>
            <li><strong>Cisco Certified:</strong> JavaScript</li>
            <li><strong>Cisco Certified:</strong> Python Programming</li>
        </ul>
    </div>

</div>

</body>
</html>