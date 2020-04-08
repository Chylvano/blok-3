<?php 
require('connection.php');
$query = $conn->prepare("SELECT * FROM characters where id=:id");
$query->execute(["id" => $_GET["id"]]);
$result = $query->fetch();
$rows = '';
?>

<header>
        <a href='index.php' class='terug'>terug</a>
    </header>    
    <?php   
    require('card.php');
    include('assets/includes/footer.php');
    ?>
</header>