<?php

require('connection.php');

$stmt = $conn->prepare('select * from characters order by name');
$stmt->execute();
$result = $stmt->fetchAll();
$rows = '';
$char = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DA</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
 <div class='grid-container'>
<?php include("assets/includes/header.php") ?> 
    <?php foreach($result as $rows){
        echo "<img src='assets/images/$rows[2]'><br>
        $rows[1] <br>
        $rows[3] <br>
        <button><a href='index.php?id=$rows[0]'>bekijken</a></button><br>
        <hr>";
    
    }
    ?>
</div>

    <?php include('assets/includes/footer.php') ?>
</body>
</html>