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
    <title>Onkunde</title>
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
                     Onkunde
                </b></h5>    
                <form action="onkunde2.php" method="post">
                <div class="mb-1">
                   Wat zou je graag willen kunnen?<input type="text" id="input1" name="input1" required>
                </div>
                <div class="mb-1">
                    Met welke persoon kun je goed opschieten?<input type="text" id="input2" name="input2" required>
                </div>
                <div class="mb-1">
                   Wat is je favoriete getal?<input type="text" id="input3" name="input3">
                </div>
                <div class="mb-1">
                   Wat heb je altijd bij je als je op vakantie gaat?<input type="text" id="input4" name="input4" required>
                </div>
                <div class="mb-1">
                   Wat is je beste persoonlijk eigenschap?<input type="text" id="input5" name="input5" required>
                </div>
               <div class="mb-1">
                   Wat is je slechtste persoonlijke eigenschap?<input type="text" id="input6" name="input6" required>
               </div>
               <div class="mb-4">
                   Wat is het ergste dat je kan overkomen?<input type="text" id="input7" name="input7" required>
               </div>
               <input type="submit" id="submit">
               <div class="text-center text-light bg-dark py-3 mt-5">
                   Chylvano Landburg © 2020
                </div>
            </form>
        </div>
    </div>
</body>
</html>
