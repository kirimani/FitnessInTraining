<?php
$email = filter_input(INPUT_POST, 'email');
$cal = filter_input(INPUT_POST, 'cal');
$days = filter_input(INPUT_POST, 'days');
$time = filter_input(INPUT_POST, 'time');

$servername = "aa1cvt94jfoc6th.cykeatwtunfz.us-west-2.rds.amazonaws.com";
$dbusername = "root";
$dbpassword = "password";
$dbname = "FitnessInTraining"; //This is the database name, your database might be diffrent

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Fitness (Email, TotalCalBurn, DaysAvailable, TimeAvailable)
VALUES ('$email', '$cal','$days', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "A report has been sent to your email! Press return to return to the webiste.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
