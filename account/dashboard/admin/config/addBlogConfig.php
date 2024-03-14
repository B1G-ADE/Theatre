
<?php
    session_start();
     include '../../../auth/dbConfig.php';

    $userID = $_SESSION['id'];

    $statusMsg = '';

    // File upload path
    $targetDir = "../../../../assets/images/shows/";
    $fileName = basename($_FILES["img_path"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    if(isset($_POST["submit"]) && !empty($_FILES["img_path"]["name"])){
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            
            if(move_uploaded_file($_FILES["img_path"]["tmp_name"], $targetFilePath)){
                if ($_FILES["img_path"]["error"] > 0) {
                    $statusMsg = "Error: " . $_FILES["img_path"]["error"];
                }
                // Insert image file name into database
                $addBlog = $conn->prepare("INSERT INTO blog (title, blog_content, img_path, show_name) VALUES(?, ?, ?, ?)");
                $addBlog->bind_param('ssss', $_POST['title'], $_POST['blog_content'], $fileName, $_POST['show_name']);
                $addBlogResult = $addBlog->execute();

                if ($addBlogResult === true) {
                    // Insert successful
                    $blogId = $addBlog->insert_id;

                    // Prepare and execute query to insert into userBlog table
                    $addUserBlog = $conn->prepare("INSERT INTO userBlog (fk_user_id, fk_blog_id) VALUES(?, ?)");
                    $addUserBlog->bind_param('ii', $userID, $blogId);
                    $addUserBlogResult = $addUserBlog->execute();

                    if ($addUserBlogResult === true) {
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    } else {
                        // Error inserting into userBlog table
                        $statusMsg = "Error inserting into userBlog table: " . $conn->error;
                    }
                } else {
                    // Error inserting into blog table
                    $statusMsg = "Error inserting into blog table: " . $conn->error;
                }

            }
    }
}
    header("Location: ../../../../blogs");

?>