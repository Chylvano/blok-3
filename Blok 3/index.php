<?php 
$datum = date('H:i');
$state = '';
$groet = '';

if($datum >= 6 && $datum < 12){
    $state = 'ochtend';
    $groet = 'Goede morgen';
} elseif($datum >= 12 && $datum < 18){
    $state = 'middag';
    $groet = 'Goede middag';
}
elseif($datum >= 18 && $datum < 24){
    $state = 'avond';
    $groet = 'Goede avond';
}
elseif($datum >= 0 && $datum < 6){
    $state = 'nacht';
    $groet = 'Goede nacht';
}

echo $groet .'!' .'<br>'. '<br>' ;
echo 'Het is ' . $datum . ' uur';

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id= '<?=$state;?>'>
    
</body>
</html>