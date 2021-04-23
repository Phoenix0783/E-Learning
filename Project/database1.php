<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successfully Registered</title>
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="database-style.css">
</head>
<body>
        <div class="block1" id="p1">
                <img src="tick2.png" class="tick">
        </div>
        <div class="block2" id="p2">
                <div class="line1a">Congratulation, your account</div><br>
                <div class="line1b">has been successfully created.</div><br>
                <a href="login-page.html"><button>Continue</button></a>
        </div>
<?php
                $Name =$_GET["name"];
                $Email =$_GET["email"];
                $Password =$_GET["password"];

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "WPbase";

                $conn = new mysqli($servername, $username, $password,$dbname);

                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $stmt = $conn->prepare("INSERT INTO wpmain (Names, Email, Passwords) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $names, $emails, $pass);

                $names = $Name;
                $emails = $Email;
                $pass = $Password;
                $stmt->execute();

                $stmt->close();
                $conn->close();           
?>
</body>
</html>