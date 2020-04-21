<?php

include ("assets/includes/functions.php");

$result = getchar();

?>
<title><?= $result['name'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="assets/css/style1.css" rel="stylesheet"/>
<body>
<header><h1><?= $result['name'] ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="assets/images/<?= $result['avatar']?>">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?= $result['health'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?= $result['attack'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?= $result['defense'] ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Location</b>: <?= $result['location'] ?></li>    
                    <li><b>Weapon</b>: <?= $result['weapon'] ?></li>
                    <li><b>Armor</b>: <?= $result['armor'] ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?= $result['bio'] ?>
            </p>
            <form>
                <label><b>Huidige Locatie:</b></label>
                <select>
                    <option value="1">Bowsers Castle</option>
                </select>
                <input type="submit" value="update">
            </form>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Chylvano Landburg 2020</footer>
</body>
</html>