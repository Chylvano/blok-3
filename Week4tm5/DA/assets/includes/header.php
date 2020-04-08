<?php
$pdoQuery = "select * from characters";
$pdoResult = $conn->query($pdoQuery);
$rows = $pdoResult->rowCount();

?>


<h2>Alle <?php echo $rows?> de characters uit de database</h2>
