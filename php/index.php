<?php
include 'database_config.php';

// Retrieve data from POST request
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO contact_form_entries (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Execute statement and check for errors
if ($stmt->execute()) {
    echo "Thank you for your message!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
