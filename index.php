<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebuko</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex justify-center items-center h-screen">
    <form action="process_comment.php" method="post" class="bg-white shadow-lg rounded-lg p-6 w-96">
        <label for="comment" class="block text-sky-500 font-semibold mb-2">Add Comment</label>
        <textarea name="comment" id="comment" cols="30" rows="3" 
                  class="w-full p-2 border border-sky-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:outline-none"
                  placeholder="What's on your mind..."></textarea>
        <button type="submit" class="mt-3 w-full bg-sky-500 text-white font-semibold py-2 rounded-lg hover:bg-sky-600 transition">
            Comment
        </button>
        <?php 
            $con = mysqli_connect("localhost", "root", "", "facebuko") 
            or die("Failed to connect to database!");
        ?>
        <div class="mt-2">
        <?php 
            $query = "SELECT comment FROM comments ORDER BY id DESC";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result))
            {
                echo "<p>Bogart: ". $row['comment'] ."</p>";
            }
        ?>
        </div>
    </form>
</body>
</html>