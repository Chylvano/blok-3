<?php

?>


<!DOCTYPE html>
<html lang="en" class="bg-secondary">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Peralta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Er heerst paniek</title>
</head>
<body class="w-75 mx-auto">    
      <div class="container">
      <h2 class="my-3">
                   MAD LIPS
                </h2>
               <div class="text-decoration-none bg-danger p-1"><a href="paniek.php">
                   Er heerst paniek....
                </a></div>
               <div class="text-decoration-none bg-danger p-1"><a href="onkunde.php">
                     Onkunde
               </a></div>
               <h5 class="mt-3"><b>
                   Er heerst paniek
                </b></h5>
                Er heerst paniek in het koninkrijk van <?= $_POST['input31'];?>, Koning <?= $_POST['input61'];?> is ten einde raad en als koning<br>
            <?= $_POST['input61'];?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST['input21'];?>.<br><br>
            "<?= $_POST['input21'];?>! Het is een ramp! Het is een schande!"<br><br>
            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
            "Mijn <?= $_POST['input11'];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_POST['input51'];?> voor hem gekocht!"<br><br>
            "Majesteit, uw <?= $_POST['input11'];?> komt vast vanzelf weer terug?"<br><br>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST['input81'];?> leren?"<br><br>
            "Maar Sire, daar kunt u toch uw <?= $_POST['input71'];?> voor gebruiken."<br><br>
            "<?= $_POST['input21'];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
            "Mij vervelen, Sire."
     <div class="text-center text-light bg-dark py-3 mt-5">
                   Chylvano Landburg © 2020
                </div>
        </div>
    </div>
</body>
</html>
