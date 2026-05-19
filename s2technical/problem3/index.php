<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonash Aaron - Portfolio Dashboard</title>
    <style>

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f4f6f8; 
            margin: 40px 20px;
            color: #1a1f2c;
            display: flex;
            justify-content: center;
        }

        .portfolio-wrapper {
            width: 100%;
            max-width: 900px;
        }


        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #ffffff;
            border-radius: 16px; 
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); 
            border: 1px solid #eef1f6;
        }


        td {
            padding: 24px;
            vertical-align: top;
            border: none; 
        }

        .header-bg {
            background: linear-gradient(135deg, #1a1f2c 0%, #2e3748 100%); 
            color: #ffffff;
        }

        .photo-cell {
            width: 25%;
            text-align: center;
            vertical-align: middle;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .photo-cell img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .nav-row td {
            padding: 0;
            background-color: #fafbfc;
            border-bottom: 1px solid #eef1f6;
        }

        .nav-link {
            display: block;
            padding: 14px 24px;
            text-decoration: none;
            color: #4a5568;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            border-left: 4px solid transparent;
        }

        .nav-link:hover, .nav-link.active {
            background-color: #f0f4f8;
            color: #1a1f2c;
            border-left: 4px solid #1a1f2c; 
        }

        .display-panel {
            background-color: #ffffff;
            padding: 35px 40px;
            min-height: 200px;
        }

        .display-panel h2 {
            margin-top: 0;
            font-size: 1.4rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #1a1f2c;
            border-bottom: 2px solid #1a1f2c;
            padding-bottom: 8px;
            margin-bottom: 20px;
        }

        .display-panel p, .display-panel li {
            line-height: 1.6;
            color: #4a5568;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

<div class="portfolio-wrapper">
    <?php
    $name = "Jonash Aaron C. De Guia";
    $phoneNum = "(+63) 919 279 2747";
    $email = "jcdeguia1@fit.edu.ph";
    $location = "Manila, Philippines";
    $role = "Web & App Developer Student";

    $page = isset($_GET['page']) ? $_GET['page'] : 'objective';
    ?>

    <table>
        <tr>
            <td class="photo-cell header-bg">
                <img src="https://scontent.fmnl17-2.fna.fbcdn.net/v/t39.30808-1/688079437_965743586197800_7282944880120674638_n.jpg?stp=cp6_dst-jpg_s200x200_tt6&_nc_cat=107&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeEjXQFUHsJPYDwe7SRtG52OZshhs_q_ULZmyGGz-r9QthrWPyDJrYRv1eaNrMaO46FmTdzEGT1cMld5SyTpnZHq&_nc_ohc=nP7ZPzHjkxIQ7kNvwE3qyG0&_nc_oc=AdrWyUoxerGOxcmMGLkbLHQQBv9zka6cKeLfh6kBGXPkmRpO6Z0baCIryOi0qib7T4M&_nc_zt=24&_nc_ht=scontent.fmnl17-2.fna&_nc_gid=8KNlPsJCVrNBaf-3cXTv2g&_nc_ss=7b2a8&oh=00_Af5mx8lIlwqXj-a66Tjkd6yL2LRUi3PtA6crnY1WTn1flw&oe=6A11A2A8" alt="Jonash Aaron Photo">
            </td>
            <td class="header-bg">
                <?php include('personal.php'); ?>
            </td>
        </tr>

        <tr class="nav-row">
            <td colspan="2">
                <a href="index.php?page=objective" class="nav-link <?= $page == 'objective' ? 'active' : '' ?>">
                    👉 &nbsp; Career Objective
                </a>
            </td>
        </tr>
        <tr class="nav-row">
            <td colspan="2">
                <a href="index.php?page=education" class="nav-link <?= $page == 'education' ? 'active' : '' ?>">
                    🎓 &nbsp; Educational Attainment Page
                </a>
            </td>
        </tr>
        <tr class="nav-row">
            <td colspan="2">
                <a href="index.php?page=skills" class="nav-link <?= $page == 'skills' ? 'active' : '' ?>">
                    🛠️ &nbsp; Skills Page
                </a>
            </td>
        </tr>
        <tr class="nav-row">
            <td colspan="2">
                <a href="index.php?page=affiliation" class="nav-link <?= $page == 'affiliation' ? 'active' : '' ?>">
                    🎖️ &nbsp; Affiliation Page
                </a>
            </td>
        </tr>
        <tr class="nav-row">
            <td colspan="2">
                <a href="index.php?page=experience" class="nav-link <?= $page == 'experience' ? 'active' : '' ?>">
                    💼 &nbsp; Work Experience Page
                </a>
            </td>
        </tr>

        <tr>
            <td colspan="2" class="display-panel">
                <?php
                if ($page == 'objective') {
                    include('objective.php');
                } elseif ($page == 'education') {
                    require('education.php');
                } elseif ($page == 'skills') {
                    require('skills.php');
                } elseif ($page == 'affiliation') {
                    include('affiliation.php');
                } elseif ($page == 'experience') {
                    include('experience.php');
                } else {
                    include('objective.php');
                }
                ?>
            </td>
        </tr>
    </table>
</div>

</body>
</html>