<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="heading">
        <h1>Registration Form</h1>
        <h6>Made With ❤ by Abhinav</h6>
        </div>
        <form action="register.php" method="POST">
         <div class="row">
        <div>
            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" id="student_name" required>
        </div>
        <div>
            <label for="father_name">Father's Name</label>
            <input type="text" name="father_name" id="father_name" required>
        </div>
        </div>
        <div class="row">
        <div>
            <label for="mobile_number">Mobile Number</label>
            <input type="tel" name="mobile_number" id="mobile_number" pattern="[0-9]{10}" required>
        </div>
        <div>
            <label for="email_address">Email Address</label>
            <input type="email" name="email_address" id="email_address" required>
        </div>
        </div>
        <div class="row">
            <div>
                <label for="branch">Branch</label>
                <input type="text" name="branch" id="branch" required>
            </div>
        <div>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" required>
        </div>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>
        </div>
        <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>


<?php
// Create connection to SQLite database
$db = new SQLite3('registration.db');
// Get form data and sanitize
$student_name = SQLite3::escapeString($_POST['student_name']);
$father_name = SQLite3::escapeString($_POST['father_name']);
$mobile_number = SQLite3::escapeString($_POST['mobile_number']);
$email = SQLite3::escapeString($_POST['email_address']);
$branch = SQLite3::escapeString($_POST['branch']);
$address = SQLite3::escapeString($_POST['address']);
$dob = SQLite3::escapeString($_POST['dob']);

// Insert data into database
$query = "INSERT INTO registrations (student_name, father_name, mobile_number, email, branch, address, dob) 
VALUES ('$student_name', '$father_name', '$mobile_number', '$email', '$branch', '$address', $'dob')";
$db->exec($query);

// Redirect to display page
header("Location: registrations.php");
exit();
?>