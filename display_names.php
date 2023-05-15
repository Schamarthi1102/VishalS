<!DOCTYPE html>
<html>
<head>
    <title>Display Names</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];

        echo "<h1>Welcome, $first_name $last_name!</h1>";
    }
    ?>
    
    <a href="your_homepage_link">Link to your home page</a>
</body>
</html>
