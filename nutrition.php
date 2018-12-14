<?php
$email = filter_input(INPUT_POST, 'email');
$cal = filter_input(INPUT_POST, 'cal');
$carbs = filter_input(INPUT_POST, 'carbs');
$fats = filter_input(INPUT_POST, 'fats');
$prot = filter_input(INPUT_POST, 'prot');

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

$sql = "INSERT INTO Food (Email, TotalCalIntake, Carb, Fat, Protein)
VALUES ('$email', '$cal','$carbs', '$fats', '$prot')";

if ($conn->query($sql) === TRUE) {
    echo "A report has been sent to your email! Press return to return to the webiste.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
