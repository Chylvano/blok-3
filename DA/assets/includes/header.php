<?php
$pdoQuery = "select * from characters";
$pdoResult = $conn->query($pdoQuery);
$rows = $pdoResult->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Alle <?php echo $rows?> de characters uit de database</h2>
</body>
</html>