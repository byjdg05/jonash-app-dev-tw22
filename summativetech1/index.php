<!DOCTYPE html>
<html>
<head>
    <title>Student Registration - Declared Data</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f0f4f8; padding: 40px; }
        .form-card { 
            background: white; width: 100%; max-width: 700px; margin: 0 auto; 
            border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        .section-title { 
            background: #1e293b; color: white; padding: 10px; 
            font-size: 12px; text-transform: uppercase; letter-spacing: 1px;
            margin: 20px 0 15px 0; border-radius: 4px;
        }
        .input-row { margin-bottom: 15px; display: flex; align-items: center; }
        label { width: 180px; font-weight: 600; font-size: 14px; color: #475569; }
        input { 
            flex: 1; padding: 8px; border: none; 
            border-bottom: 2px solid #cbd5e1; background: transparent; outline: none;
            color: #1e293b; font-size: 15px;
        }
        h1 { text-align: center; color: #0f172a; margin-bottom: 30px; }
    </style>
</head>
<body>

<?php

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

    $f_name      = ucwords(strtolower($raw_name));
    $f_email     = strtolower($raw_email);
    $f_course    = strtoupper($raw_course);
    $f_school    = ucwords(strtolower($raw_school)); 
    $f_status    = ucfirst($raw_status); 
    $f_religion  = ucfirst($raw_religion); 
    $f_bday      = date("F j, Y", strtotime($raw_bday)); 
?>

<div class="form-card">
    <h1>Student Registration</h1>

    <div class="section-title">Personal Information</div>
    
    <div class="input-row">
        <label>Full Name:</label>
        <input type="text" value="<?php echo $f_name; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Date of Birth:</label>
        <input type="text" value="<?php echo $f_bday; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Gender:</label>
        <input type="text" value="<?php echo $gender; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Civil Status:</label>
        <input type="text" value="<?php echo $f_status; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Religion:</label>
        <input type="text" value="<?php echo $f_religion; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Email Address:</label>
        <input type="text" value="<?php echo $f_email; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Phone Number:</label>
        <input type="text" value="<?php echo $phone; ?>" readonly>
    </div>

    <div class="section-title">Academic Details</div>

    <div class="input-row">
        <label>Course/Program:</label>
        <input type="text" value="<?php echo $f_course; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Year Level:</label>
        <input type="text" value="<?php echo $year; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Current School:</label>
        <input type="text" value="<?php echo $f_school; ?>" readonly>
    </div>

    <div class="input-row">
        <label>Home Address:</label>
        <input type="text" value="<?php echo $address; ?>" readonly>
    </div>
</div>

</body>
</html>