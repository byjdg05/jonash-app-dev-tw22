<!DOCTYPE html>
<html>
<head>
    <title>Student Registration - Summary</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f4f8; padding: 40px; }
        .form-card { 
            background: white; width: 100%; max-width: 700px; margin: 0 auto; 
            border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        h1 { text-align: center; color: #0f172a; margin-bottom: 30px; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th { 
            background: #1e293b; color: white; padding: 12px; 
            text-align: left; text-transform: uppercase; font-size: 12px; letter-spacing: 1px;
        }
        td { 
            padding: 12px; border-bottom: 1px solid #e2e8f0; 
            font-size: 14px; color: #334155; 
        }
        .label-cell { font-weight: 600; width: 200px; color: #475569; background: #f8fafc; }
    </style>
</head>
<body>

<?php
    // DECLARED VARIABLES
    $raw_name     = "jonash aaron de guia";
    $raw_email    = "jcdeguia1@fit.edu.ph";
    $phone        = "09126789012";
    $raw_bday     = "2005-12-13";
    $gender       = "Male";
    $raw_status   = "single";
    $raw_religion = "catholic"; 
    
    $raw_course   = "bs in information technology";
    $year         = "2nd Year";
    $raw_school   = "FEU Institute of Technology";
    $address      = "Metro Manila, Philippines";

    // STRING FORMATTING
    $f_name      = ucwords(strtolower($raw_name));
    $f_email     = strtolower($raw_email);
    $f_course    = strtoupper($raw_course);
    $f_school    = ucwords(strtolower($raw_school)); 
    $f_status    = ucfirst($raw_status); 
    $f_religion  = ucfirst($raw_religion); 
    $f_bday      = date("F j, Y", strtotime($raw_bday)); 
?>

<div class="form-card">
    <h1>Student Registration Form</h1>

    <table>
        <tr>
            <th colspan="2">Personal Information</th>
        </tr>
        <tr>
            <td class="label-cell">Full Name</td>
            <td><?php echo $f_name; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Date of Birth</td>
            <td><?php echo $f_bday; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Civil Status</td>
            <td><?php echo $f_status; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Religion</td>
            <td><?php echo $f_religion; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Email Address</td>
            <td><?php echo $f_email; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Phone Number</td>
            <td><?php echo $phone; ?></td>
        </tr>

        <tr>
            <th colspan="2">Academic Details</th>
        </tr>
        <tr>
            <td class="label-cell">Course/Program</td>
            <td><?php echo $f_course; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Year Level</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Current School</td>
            <td><?php echo $f_school; ?></td>
        </tr>
        <tr>
            <td class="label-cell">Home Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</div>

</body>
</html>
