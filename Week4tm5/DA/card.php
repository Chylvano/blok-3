<?php 
require('connection.php');
$query = $conn->prepare("SELECT * FROM characters where id=:id");
$query->execute(["id" => $_GET["id"]]);
$result = $query->fetch();
$rows = '';
?>
  
  
 "<img src='assets/images/<?php echo $result["avatar"]?>'><br>
     <h4> naam:  <?php echo $result["name"]?> <br>
      health:      <?php echo $result["health"]?> <br>
      color:      <?php echo $result["color"]?> <br>
      attack:    <?php echo $result["attack"]?> <br>
      defense:    <?php echo $result["defense"]?>  <br>
      weapon:    <?php echo $result["weapon"]?> <br>
      armor:   <?php echo $result["armor"]?> <br></h4>
     <p>   <?php echo $result["bio"]?> <br></p> <br>
        <hr>



