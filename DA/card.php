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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<header>
    </header>    
    <?php   
        echo "<img src='assets/images/$result[2]'><br>
     <h4> naam:  $result[1] <br>
      health:  $result[3] <br>
      color:  $result[5] <br>
      attack:  $result[6] <br>
      defense:  $result[7] <br>
      weapon:  $result[8] <br>
      armor:  $result[9] <br></h4>
     <p> $result[4]</p> <br>
        <hr>";
    ?>
</body>
</html>