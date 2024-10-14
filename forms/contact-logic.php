<?php
session_start();
// Include your database connection file
require '../config/db.php';

// Initialize variables
$errors = [];
$successMessage = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input values
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate inputs
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If no errors, insert data into the database
    if (empty($errors)) {
        // Prepare an insert statement
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            // Success message
            $successMessage = "Your message has been sent successfully!";
        } else {
            $errors[] = "Something went wrong. Please try again.";
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();

// Redirect back to the form page (optional)
header("Location: ../contact.php");
exit;
?>
