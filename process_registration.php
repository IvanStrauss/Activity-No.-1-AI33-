<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve data from the form
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];

    
    header("Location: success.php?name=$name&email=$email&password=$password");
    exit();
}
?>
