<?php
session_start();
include '../../auth/dbConfig.php';

if (!isset($_GET['blog_id'])) {
    exit("Blog ID is missing.");
}

$blogID = $_GET['blog_id'];
echo "Blog ID: " . $_GET['blog_id']; 

if(isset($_SESSION['id'])) {
    $loggedInUserID = $_SESSION['id'];
    echo "Logged in user ID: " . $loggedInUserID;
} else {
    echo "User is not logged in.";
    exit;
}

$addUserBlog = $conn->prepare("INSERT INTO userBlog (fk_user_id, fk_blog_id) VALUES (?, ?)");
$addUserBlog->bind_param('ii', $loggedInUserID, $blogID);
$addUserBlogResult = $addUserBlog->execute();

if ($addUserBlogResult === false) {
    $error = "Error adding user to blog.";
} else {
    $addComment = $conn->prepare("INSERT INTO comments (heading, comment, fk_userBlog, pending) VALUES (?, ?, LAST_INSERT_ID(), 1)");
    $addComment->bind_param('ss', $_POST['heading'], $_POST['comment']);
    $addCommentResult = $addComment->execute();

    if ($addCommentResult === false) {
        $error = "Error adding comment.";
    } else {
        header("Location: ../../../blogDetails/$blogID");
        exit;
    }
}

if (isset($error)) {
    echo "<p>Error: $error</p>";
}

?>

