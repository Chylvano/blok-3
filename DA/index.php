<?php 
require('connection.php');
$query = $conn->prepare("SELECT * FROM characters where id=:id");
$query->execute(["id" => $_GET["id"]]);
$result = $query->fetch();
$rows = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$result["name"]?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<header>
        <a href='main.php' class='terug'>terug</a>
    </header>    
    <?php   
    require('card.php');
    include('assets/includes/footer.php');
    ?>
</body>
</html>