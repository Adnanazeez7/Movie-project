<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'movie';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];  // Assuming you have an email field in your form
    $feedback = $_POST['feedback'];

    // Assuming your table is named 'feed'
    $sql = "INSERT INTO feed (email, feedback) VALUES ('$email', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
