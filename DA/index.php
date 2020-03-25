<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamische_applicatie";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo "connected succesfully";
}
catch(PDOException $e)
    {
    echo "connection failed: " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamische Applicatie</title>
</head>
<body>
    
</body>
</html>