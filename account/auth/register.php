<?php
include 'dbConfig.php';

if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
    exit('Username is not valid!');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    exit('Password must be between 5 and 20 characters long!');
}

$stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ? ');
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo 'Username exists! Please choose another.';
} else {
    $stmt->close();
    $stmt = $conn->prepare("INSERT INTO users (username, password, email, active, is_admin, img_path, dob) VALUES(?, ?, ?, ?, 0, 0, '');");
  
   
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $_POST['dob']);
    $stmt->execute();
    $conn->close();

    echo '<p>You have successfully created an account</p> <a href="../login">Return to Login page</a>';

}

header('Location: ../../login');
