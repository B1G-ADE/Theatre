<?php
session_start(); 
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../../login/');
    exit;
}

if(isset($_GET['uid']) && is_numeric($_GET['uid'])) {
    $uid = $_GET['uid'];

    // Check if the user is currently inactive (active = 0)
    $checkActive = $conn->prepare('SELECT active FROM users WHERE id = ?');
    $checkActive->bind_param('i', $uid);
    $checkActive->execute();
    $checkActive->bind_result($active);
    $checkActive->fetch();
    $checkActive->close();

    if ($active !== 1) {
        // Prepare the SQL statement
        $stmt = $conn->prepare('UPDATE users SET active = 1 WHERE id = ?');

        // Bind the parameter
        $stmt->bind_param('i', $uid);

        // Execute the statement
        $stmt->execute();

        // Close the statement
        $stmt->close();
    }
}

// Redirect to the allUsers page
header("Location: ../allUsers");
?>

