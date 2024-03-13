<?php
define('ROOT_DIR', '/Theatre/');

require 'dbConfig.php';
session_start();
$errorMsg = '';

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password field!');
}


if ($stmt = $conn->prepare('SELECT username, password, is_admin FROM users WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();

    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $admin);
    
        $stmt->fetch();
        
        if (password_verify($_POST['password'], $password)) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['is_admin'] = $admin;
            if ($admin == 1) {
                header('Location: ' . ROOT_DIR . 'a/dashboard');
            }
            else{
                header('Location: ' . ROOT_DIR . 'u/dashboard');
            }
            exit();

        } else {
            echo 'Incorrect password!';
        }
    }else {
        echo 'Incorrect username!';
    }
    $_SESSION['error_message'] = $errorMsg;

    setcookie("username", $_POST['username'], time() + 86400, "/");


}
