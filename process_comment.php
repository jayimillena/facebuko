<?php 
    // This is connection string, this is used to connect PHP to MySQL
    $con = mysqli_connect("localhost", "root", "", "facebuko") 
        or die("Failed to connect to database!");

    $comment = $_POST['comment'];
    $query = "INSERT INTO comments (comment) VALUES ('$comment')";

    mysqli_query($con, $query);

    header('location: index.php')
?>