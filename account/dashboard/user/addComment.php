
 <?php
    session_start();
    include '../../auth/dbConfig.php';

    $blogID = $_GET['blog_id'];
    $userID = $_SESSION['id'];

    // Prepare and execute the query to insert into userBlog table
    $addUserBlog = $conn->prepare("INSERT INTO userBlog (fk_user_id, fk_blog_id) VALUES (?, ?)");
    $addUserBlog->bind_param('ii', $userID, $blogID);
    $addUserBlogResult = $addUserBlog->execute();

    if ($addUserBlogResult === false) {
        // Handle error (e.g., display an error message or log the error)
        die("Error executing query: " . $conn->error);
    }

    // Prepare and execute the query to insert into comments table
    $addComment = $conn->prepare("INSERT INTO comments (heading, comment, fk_userBlog, pending) VALUES (?, ?, LAST_INSERT_ID(), 1)");
    $addComment->bind_param('ss', $_POST['heading'], $_POST['comment']);
    $addCommentResult = $addComment->execute();

    if ($addCommentResult === false) {
        // Handle error (e.g., display an error message or log the error)
        die("Error executing query: " . $conn->error);
    }

    // Redirect to the blog details page
    header("Location: ../../../blogDetails/$blogID");
    exit;
?>
