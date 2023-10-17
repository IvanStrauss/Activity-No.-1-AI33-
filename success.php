<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>
<body>
    <div style="text-align: center;">
        <h2>Registration Successful</h2>
        <?php
            
            $name = $_GET["name"];
            $email = $_GET["email"];
            $password = $_GET["password"];

            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Password: $password</p>";
        ?>
    </div>
</body>
</html>
